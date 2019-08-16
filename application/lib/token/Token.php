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
     * @param int $uuid 唯一ID
     * @param string $signature 签名
     * @param string $secretKey 密钥
     * @return array
     * @throws TokenException
     */
    public static function get(int $uuid, string $signature,string $secretKey = 'SDJxjkxc9o')
    {
        try{
            return [
                'access_token' => self::createAccess($uuid, $signature,$secretKey),
                'refresh_token' => self::createRefresh($uuid, $signature,$secretKey)
            ];
        }catch (\Exception $exception){
            throw new TokenException('创建token失败~');
        }
    }


    // 刷新
    public static function refresh(string $secretKey = 'SDJxjkxc9o')
    {
        $accessToken = self::createAccess(
            self::key('uuid'),
            self::key('signature'),
            $secretKey
        );
        return [
            'access_token' => $accessToken,
        ];
    }

    // 获取key
    public static function key(string $key, string $secretKey = 'SDJxjkxc9o')
    {
        $jwt = static::verification($secretKey);

        if (array_key_exists($key, $jwt)) {
            return $jwt[$key];
        } else {
            throw new TokenException('尝试获取的Token变量不存在');
        }
    }

    // 验证
    public static function verification(string $secretKey = 'SDJxjkxc9o')
    {
        $authorization = Request::header('authorization');

        if (!$authorization) {
            throw new TokenException('请求header未携带authorization信息');
        }

        try{
            list($type, $token) = explode(' ', $authorization);
        }catch (\Exception $exception){
            throw new TokenException('authorization信息不正确');
        }

        if ($type !== 'Bearer') {
            throw new TokenException('接口认证方式需为Bearer');
        }

        if (!$token) {
            throw new TokenException('尝试获取的authorization信息不存在');
        }

        try {
            return (array)JWT::decode($token, $secretKey, ['HS256']);
        } catch (\Firebase\JWT\SignatureInvalidException $exception) {  //签名不正确
            throw new TokenException('令牌签名不正确');
        } catch (\Firebase\JWT\BeforeValidException $exception) {  // 签名在某个时间点之后才能用
            throw new TokenException('令牌尚未生效');
        } catch (\Firebase\JWT\ExpiredException $exception) {  // token过期
            throw new TokenException('令牌已过期，刷新浏览器重试');
        } catch (\UnexpectedValueException $exception){
            throw new TokenException('access_token不正确，'.$exception->getMessage());
        }catch (Exception $exception) {  //其他错误
            throw new Exception($exception->getMessage());
        }
    }

    // 创建授权
    private static function createAccess(int $uuid, string $signature,string $secretKey)
    {
        $payload = [
            'iss' => 'TRR', //签发者
            'iat' => time(), //什么时候签发的
            'exp' => time() + 7200, //过期时间
            'uuid' => $uuid,
            'signature' => $signature
        ];
        $token = JWT::encode($payload, $secretKey);
        return $token;
    }

    // 创建刷新token
    private static function createRefresh(int $uuid, string $signature,string $secretKey)
    {
        $payload = [
            'iss' => 'TRR', //签发者
            'iat' => time(), //什么时候签发的
            'uuid' => $uuid,
            'signature' => $signature
        ];
        $token = JWT::encode($payload, $secretKey);
        return $token;
    }

}