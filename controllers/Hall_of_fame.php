<?php

class hall_of_fame extends Controller{
    
    function __construct()
    {
        
        parent::__construct();
        
        $mysql = new Database;
        
        

    }
    function index($msg=null){
        
         $this->view->render('hall_of_fame/index',$msg);
    }
    
    function hall_of_fame()
    {
        echo "Hall of fame";
    }
        
    
}


?>