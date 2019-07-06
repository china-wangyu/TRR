<?php
/** Created By china_wangyu@aliyun.com, Data: 2019/7/3 */

namespace app\api\controller;

use app\lib\token\Token;

/**
 * Class Auth
 * @doc('授权类')
 * @route('auth')
 * @middleware('Validate')
 * @package app\api\controller
 */
class Auth
{
    /**
     * @doc('创建授权')
     * @route('','post')
     * @param('name','名称','require')
     * @param('password','密码','require')
     * @return \think\response\Json
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
     */
    public function refresh()
    {
        $result = Token::refresh();
        return json($result, 200);
    }
}