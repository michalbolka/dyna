<?php

class Validate {

    function __construct() {
        
    }

    static function Validate_url($url)
    {
        $url=str_replace("../", "", $url);
        $url=str_replace("%00", "", $url);
        $url=str_replace("%20", "", $url);
        $url=str_replace("[", "", $url);
        $url=str_replace("]", "", $url);
        return $url;
    }
    
    
}