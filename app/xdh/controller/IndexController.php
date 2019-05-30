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

namespace app\demo\controller;
use think\facade\Config;


class IndexController extends DemoBaseController
{
    public function index()
    {
       // return $this->fetch(':index');
       
       requireFunc("function.php");

       demo_test();

       
       echo Config::get("TEST");
    }

    public function ws()
    {
       // return $this->fetch(':ws');
        echo dirname(__DIR__);
    }
}
