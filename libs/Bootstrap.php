<?php

class Bootstrap{
      function __construct(){
        
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        
        require_once 'Validate.php';
        $url=Validate::Validate_url($url);
       
        
        $url = rtrim($url, '/');
        $url=explode('/',$url);
        
        if (empty($url[0]))
        {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }
        $file = 'controllers/'.$url[0].'.php';
        
        if (file_exists($file))
        {
        require 'controllers/'.$url[0].'.php';
        }
        else
        {
            require 'controllers/Error.php';
            $controller = new Error;
            $controller->index();
            return false;
        }
            
$controller = new $url[0];
if (isset($url[2]))
{
    if (method_exists($controller,$url[1]))
    {$controller->{$url[1]}($url[2]);
    
    
    }
    else
    require 'controllers/Error.php';
}

elseif (isset($url[1]))
{
    if (method_exists($controller,$url[1]))
    {$controller->{$url[1]}();  
    }
    else
     require 'controllers/Error.php';
}
      $controller->index();  
    }
    
}


?>