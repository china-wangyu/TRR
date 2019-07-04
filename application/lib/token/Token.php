<?php
/**
 * Created by PhpStorm.
 * User: 沁塵
 * Date: 2019/4/16
 * Time: 11:33
 */

namespace app\lib\token;

use app\lib\exception\token\TokenException;
use Firebase\JWT\JWT;
use think\Exception;
use think\facade\Request;

class Token
{
    /**
     * @var string $key 用户KEY
     */
    protected static $key = 'SDJxjkxc9o';


    /**
     * 获取 TOKEN
     * @param int $uuid
     * @param string $signature
     * @return array
     */
    public static function get(int $uuid, string $signature)
    {
        $accessToken = self::createAccess($uuid, $signature);
        $refreshToken = self::createRefresh($uuid, $signature);
        return [
            'access_token' => $accessToken,
            'refresh_token' => $refreshToken
        ];
    }

    /**
     * 刷新 TOKEN
     * @return array
     * @throws Exception
     * @throws TokenException
     */
    public static function refresh()
    {
        $accessToken = self::createAccess(self::getCurrentUID(),self::getCurrentName());
        return [
            'access_token' => $accessToken,
        ];
    }

    /**
     * 创建 TOKEN 授权
     * @param int $uuid
     * @param string $signature
     * @return string
     */
    private static function createAccess(int $uuid, string $signature)
    {
        $key = static::$key;
        $payload = [
            'iss' => 'TRR', //签发者
            'iat' => time(), //什么时候签发的
            'exp' => time() + 7200, //过期时间
            'uuid' => $uuid,
            'signature' => $signature
        ];
        $token = JWT::encode($payload, $key);
        return $token;
    }

    /**
     * 创建刷新TOKEN授权
     * @param int $uuid
     * @param string $signature
     * @return string
     */
    private static function createRefresh(int $uuid, string $signature)
    {
        $key = static::$key;
        $payload = [
            'iss' => 'TRR', //签发者
            'iat' => time(), //什么时候签发的
            'uuid' => $uuid,
            'signature' => $signature
        ];
        $token = JWT::encode($payload, $key);
        return $token;
    }

    /**
     * @return mixed
     * @throws Exception
     * @throws TokenException
     */
    public static function getCurrentUID()
    {
        $uid = self::getCurrentTokenVar('uid');
        return $uid;
    }

    /**
     * @return mixed
     * @throws Exception
     * @throws TokenException
     */
    public static function getCurrentName()
    {
        $uid = self::getCurrentTokenVar('signature');
        return $uid;
    }

    /**
     * @param $key
     * @return mixed
     * @throws TokenException
     * @throws Exception
     */
    private static function getCurrentTokenVar($key)
    {
        $authorization = Request::header('authorization');

        if (!$authorization) {
            throw new TokenException(['message' => '请求未携带authorization信息']);
        }

        list($type, $token) = explode(' ', $authorization);

        if ($type !== 'Bearer') throw new TokenException(['message' => '接口认证方式需为Bearer']);

        if (!$token) {
            throw new TokenException(['message' => '尝试获取的authorization信息不存在']);
        }

        $secretKey = static::$key;

        try {
            $jwt = (array)JWT::decode($token, $secretKey, ['HS256']);
        } catch (\Firebase\JWT\SignatureInvalidException $e) {  //签名不正确
            throw new TokenException(['msg' => '令牌签名不正确']);
        } catch (\Firebase\JWT\BeforeValidException $e) {  // 签名在某个时间点之后才能用
            throw new TokenException(['msg' => '令牌尚未生效']);
        } catch (\Firebase\JWT\ExpiredException $e) {  // token过期
            throw new TokenException(['msg' => '令牌已过期，刷新浏览器重试']);
        } catch (Exception $e) {  //其他错误
            throw new Exception($e->getMessage());
        }
        if (array_key_exists($key, $jwt)) {
            return $jwt[$key];
        } else {
            throw new TokenException(['msg' => '尝试获取的Token变量不存在']);
        }

    }
}