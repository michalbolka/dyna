<?php

class View {

    function __construct() {
        
    }
    public function render($name, $msg=null,$no_include = false)
    {
        $name = Validate::Validate_url($name);
        if ($no_include ==true){
        require 'views/'.$name.'.php';
            
        }
        else{
        
        require 'views/header.php';
        
        require 'views/'.$name.'.php';
        
        require 'views/footer.php';
        }
      }
}