<?php
/**
 * Created by PhpStorm.
 * User: 沁塵
 * Date: 2019/4/30
 * Time: 16:22
 */

namespace app\lib\exception\token;


use WangYu\exception\Exception;

class TokenException extends Exception
{
    public $errorCode = 100001;
}