<?php
require_once("a.php");
require_once("b.php");
require_once("c.php");


use a\b\c\Apple;
use d\e\f\Apple as bApple;
$a_app=new Apple();


$a_app->get_info();


$b_app= new bApple();
$b_app->get_info();

$c_app=new \Apple();

$c_app->get_info();

 ?>