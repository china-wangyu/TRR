<?php
/** Created By wene<china_wangyu@aliyun.com>, Data: 2019/7/3 */


namespace app\api\controller\v1;


/**
 * Class Book
 * @doc(图书类)
 * @group('v1/book')
 * @middleware('Validate')
 * @package app\api\controller\v1
 */
class Book
{
    /**
     * sdas
     * @doc('创建图书')
     * @route('','post')
     * @param('name','图书名称','require|graph|length:1,50')
     * @param('img','图书img','require|graph|length:1,16')
     * @return \think\response\Json
     * @success('')
     * @error('')
     */
    public function create()
    {
        return json(['msg'=>'创建成功'],200);
    }

}