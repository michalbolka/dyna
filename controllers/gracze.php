<?php

class gracze extends Controller{
    
    function __construct()
    {
        
        parent::__construct();
        
        $mysql = new Database;
        
        

    }
    function index($msg=null){
        
         $this->view->render('gracze/index',$msg);
    }
    
    function aktualni()
    {
        
    }
    
    function archiwum()
    {
       
    }
        
    
}


?>