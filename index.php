<?php
session_start();
//use an autoloader
require 'libs/Bootstrap.php';
require 'libs/Validate.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Model.php';
require 'config/paths.php';
require 'config/database.php';

$app = new Bootstrap();

