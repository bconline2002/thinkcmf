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


class AuthController extends SmhBaseController
{
   public function tokenLogin()
   {

        


        $ret["code"] = 1;
        $ret["userInfo"]=array();    
        JR($ret);

   }


   public function userLogin()
   {
       $hdrs = getallheaders();
      /// var_dump($hdrs); 

        $ret["code"] = 1;    

        JR($ret);
   }

   public function phoneLogin()
   {

   }
}
