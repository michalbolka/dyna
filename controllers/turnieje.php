<?php

class Turnieje extends Controller{
    public $no_render;
    function __construct(){
        $this->no_render=false;
        parent::__construct();
       
        $mysql = new Database;
    }
    function index($msg=null){
        if(!$this->no_render)
        
         $this->view->render('turnieje/index',$msg);
    }
    public function aktualny()
    {
        $query=mysql_query("SELECT id FROM turniej ORDER BY id DESC LIMIT 1;");
        while ($row = mysql_fetch_array($query)) {
            $id_turniej=$row['id'];
            
        }
       $this->msg=$id_turniej;
                
        $this->index($this->msg);
        $this->no_render=true;
    }
    public function archiwum()
    {
        
    }
    
}


?>