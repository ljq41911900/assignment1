<?php

require "functions.php";
$type = $_POST['type'];
$te = $_POST['te'];
$typed = $_POST['typed'];
$ted = $_POST['ted'];
if ($type) {
	$result = edit($type,$te);
	if($typed){
      $result1 = delete($typed,$ted);
	};
}else{
    $result1 = delete($typed,$ted);
};




if($result == "addSuccess"|$result1 == "deleteSuccess"){
    $message = getMessage($result);
    header("location:editDesign.php?message=$message");
    
}else{
    $message = getMessage($result);
    header("location:editDesign.php?message=$message");
 
   
}
?>