<?php

    function requireFunc($fn)
    {
       
        $commonPath=__DIR__."/utils/";
        $funcPath = $commonPath.$fn;
        require_once($funcPath);
    }

    function JR($data) {
        header('Content-Type:application/json; charset=utf-8');
        exit(json_encode($data));
   }

?>