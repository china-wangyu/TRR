<?php
/** Created By china_wangyu@aliyun.com, Data: 2019/7/3 */


namespace app\api\controller;

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
     * @route('','get')
     * @param('name','名称','require')
     * @param('password','密码','require')
     * @return \think\response\Json
     */
    public function create()
    {
        return json(['auth_token'=>'ascasfmascojasj dfk sj2qiwrye21ud j xcv cf2b   bMZb'],200);
    }
}