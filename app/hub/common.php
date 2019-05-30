<?php

    function requireFunc($fn)
    {
       
        $commonPath=__DIR__."/utils/";
        $funcPath = $commonPath.$fn;
        require_once($funcPath);
    }

?>