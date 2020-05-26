<?php

require "functions.php";


$username = $_POST['username'];
$password = $_POST['password'];

$result = addadmin($password,$username);

if($result == "addSuccess"){
    $message = getMessage($result);
    header("location:adminLogin.php?message=$message");
}else{
    $message = getMessage($result);
    header("location:add.php?message=$message");
}

?>