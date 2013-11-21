<?php

class Index extends Controller{
    public $no_render;
    
    function __construct(){
        $this->no_render=false;
        parent::__construct();
        $mysql = new Database;
        
             $this->to_dyna_day();
             $this->no_render=true;
    }
    function index($msg=null){
        if(!$this->no_render)
        
         $this->view->render('index/index',$msg);
    }
    function to_dyna_day()
    {
        $query=mysql_query("SELECT data FROM turniej ORDER BY id DESC LIMIT 1;");
        while ($row = mysql_fetch_array($query)) 
        {
           $data=$row['data'];
           $now=date("Y-m-d");
        }
       $time_to=ceil( $time_to=(strtotime($data.' GMT')-strtotime($now.' GMT'))/86400);
       if (($time_to>0) && ($time_to<201))
       
           $this->msg=$time_to;
       
       
       else 
           $this->msg=null;
      
       $this->index($this->msg);
    }
        
}


?>