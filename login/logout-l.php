<?php
session_start();
if(isset($_POST["logout"])){
    $_SESSION["login"]=false;
    session_destroy;
    header("Location:admin.php");
}
else{
    header("Location:list.php");
}
 
    
?>