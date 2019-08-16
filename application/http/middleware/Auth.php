<?php
/** Created By wene<china_wangyu@aliyun.com>, Data: 2019/7/3 */


namespace app\http\middleware;

use app\lib\token\Token;

class Auth
{
    /**
     * 权限验证
     * @param $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        Token::verification();

        return $next($request);
    }
}