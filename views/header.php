<html>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="<?php echo URL ?>public/css/default.css" />
      
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <script type= "text/javascript" src='<?php echo URL ?>public/js/jquery.js'></SCRIPT> 
        <script type="text/javascript" src='<?php echo URL ?>public/js/menu.js' ></script>

        <SCRIPT LANGUAGE="JavaScript">
function selecturl(s) {
   var gourl = s.options[s.selectedIndex].value;   window.top.location.href = gourl;
}
</SCRIPT>

    </head>
    <body>
        <div id="container">
        
        <div id='header'>
            <div id="logo">
                <img src="<?php echo URL?>public/images/logo.png" height="180" width="480"/>
            </div>
            </br>
            
            <div id="top-menu-wrap">
            <div id="top-menu">
                <div>
                    <ul class="menu">
                         <li> <a href="<?php echo URL; ?>index"><img src="<?php echo URL?>public/images/menu/buttons/main.png" /></a></li>
                        <li><a href="<?php echo URL; ?>turnieje/aktualny"><img src="<?php echo URL?>public/images/menu/buttons/turnieje.png" /></a>
                            <ul>
                                <li><a href="<?php echo URL; ?>turnieje/aktualny"><img src="<?php echo URL?>public/images/menu/buttons/aktualny.png" /></a></li>
                                <li><a href="<?php echo URL; ?>turnieje/archiwum/1"> <img src="<?php echo URL?>public/images/menu/buttons/archiwum.png" /></a></li>
                                                                 
                                    </ul>
                        </li>
                        <li> <a href="<?php echo URL; ?>Wyniki"><img src="<?php echo URL?>public/images/menu/buttons/wyniki.png" /></a></li>
                        
                       
                        <li><a href="<?php echo URL; ?>gracze/aktualni"><img src="<?php echo URL?>public/images/menu/buttons/gracze.png" /></a>
                            <ul>
                                <li><a href="<?php echo URL; ?>gracze/aktualni"><img src="<?php echo URL?>public/images/menu/buttons/aktualni.png" /></a></li>
                                <li><a href="<?php echo URL; ?>gracze/archiwum"> <img src="<?php echo URL?>public/images/menu/buttons/archiwum.png" /></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo URL; ?>hall_of_fame"><img src="<?php echo URL?>public/images/menu/buttons/hall_of_fame.png" /></a></li>
                        <li> <a href="<?php echo URL; ?>download"><img src="<?php echo URL?>public/images/menu/buttons/download.png" /></a></li>
                        <li> <a href="<?php echo URL; ?>download/regulamin"><img src="<?php echo URL?>public/images/menu/buttons/regulamin.png" /></a></li>
                      <?php if(!isset($_SESSION['zalogowany'])){ ?>  <li><a href="<?php echo URL; ?>login\zaloguj"><img src="<?php echo URL?>public/images/menu/buttons/zaloguj.png" /></a></li>
                      <?php } else ?> <li><a href="<?php echo URL; ?>login/wyloguj"><img src="<?php echo URL?>public/images/menu/buttons/wyloguj.png" /></a></li>
                    </ul>
                </div>
            </div>
        </div>

            
        </div>
        <div id='content'>
           
    