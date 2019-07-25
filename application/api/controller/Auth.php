<?php
/** Created By china_wangyu@aliyun.com, Data: 2019/7/3 */

namespace app\api\controller;

use app\lib\token\Token;

/**
 * Class Auth
 * @doc('授权类')
 * @group('auth')
 * @middleware('Validate')
 * @package app\api\controller
 */
class Auth
{
    /**
     * @doc('创建授权')
     * @route('','post')
     * @validate('Token')
     * @param('name','名称','require')
     * @param('password','密码','require')
     * @return \think\response\Json
     * @success('{
          "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUUlIiLCJpYXQiOjE1NjQwNDc4ODcsImV4cCI6MTU2NDA1NTA4NywidXVpZCI6MTAwLCJzaWduYXR1cmUiOiIxMiJ9.QAvjERUOvQ2QwUcPnQOJuYGuTDgzWCZ7gaNziJHDmVI",
          "refresh_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUUlIiLCJpYXQiOjE1NjQwNDc4ODcsInV1aWQiOjEwMCwic2lnbmF0dXJlIjoiMTIifQ.n-TZSFr9NqaTIjWpxR3ZUeP7WobYrhYvS5lIVkxRaIM"
          }')
     * @error('{
          "code": 3000,
          "message": "3000: 错误内容 . 参数验证 .   name不能为空,password不能为空",
          "request_url": "auth"
      }')
     */
    public function create()
    {
        return json(Token::get('100', request()->param('name')), 200);
    }

    /**
     * @doc('刷新授权')
     * @route('refresh','get')
     * @return array
     * @throws \app\lib\exception\token\TokenException
     * @throws \think\Exception
     * @success('')
     */
    public function refresh()
    {
        $result = Token::refresh();
        return json($result, 200);
    }
}