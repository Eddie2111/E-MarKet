<?php
session_start();
include_once("../model/dbconnect.php");
include_once("../model/cartMemory.php");

$get_items = $_REQUEST['items'];
//echo $get_items;
if(!isset($_SESSION['email'])){
    //header('Location: ../view/login.php');
}

if(isset($_SESSION['email'])){
    array_push($_SESSION["items"],",",$get_items);

    
    header('Location: ../view/index.php');
}

?>