<?php

session_start();
$_SESSION["start"]=time();
$_SESSION["expire"]=time()+300;

$_SESSION['username']=_POST
if($_SESSION["start"]>$_SESSION["expire"]){
    session_destroy();
    exit();
}

?>