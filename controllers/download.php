<?php

class Download extends Controller{
    
    function __construct()
    {
        
        parent::__construct();
        
        $mysql = new Database;
        
      

    }
    function index($msg=null){
        
         $this->view->render('download/index',$msg);
    }
    
    function download()
    {
      
    }
    
    function regulamin()
    {
      
    }
        
    
}


?>