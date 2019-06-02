<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Released under the MIT License.
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------

namespace app\smh\controller;
use think\facade\Config;


class GoodsController extends SmhBaseController
{
    public function index()
    {
       // return $this->fetch(':index');
       
    //    requireFunc("function.php"); 

    //    echo "smh";

        $ret["code"] = 1;

        //$this->ajaxReturn($ret);
        JR($ret);
      
    }

    public function ws()
    {
       // return $this->fetch(':ws');
        echo dirname(__DIR__);
    }

    public function userInfo()
    {
        echo "OOO";
    }

    public function navList()
    {
        $ret["code"] = 1;

        //$this->ajaxReturn($ret);
        JR($ret);
    }
}
