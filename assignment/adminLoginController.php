<?php

require "functions.php";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$id = adminlogin($username, $password);

//检查变量是数字还是数字字符串
if(is_numeric($id) == 1){
    $_SESSION['id'] = $id;
    header("location:adminIndex.php");
}else{
    $error = getMessage($id);
    header("location:adminLogin.php?message=$error");
}

?>