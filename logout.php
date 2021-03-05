<?php
include("config.php");
if(isset($_SESSION['name'])){
unset($_SESSION['name']);
unset($_SESSION['uid']);

$_SESSION['msg']="<div class='alert alert-success' role='alert'> You have been successfully Logged Out. </div>";
echo "<script>window.location.replace('index.php')</script>";
}
else
{
  $_SESSION['msg']="<div class='alert alert-danger' role='alert'>  Login To Continue</div>";
 echo "<script>window.location.replace('index.php')</script>";
}

                           //FOR ADMIN

if(isset($_SESSION['admin']))
{
    
unset($_SESSION['admin']);


$_SESSION['msg']="<div class='alert alert-success' role='alert'> You have been successfully Logged Out. </div>";
echo "<script>window.location.replace('admin.php')</script>";
}
else
{
  $_SESSION['msg']="<div class='alert alert-danger' role='alert'>  Login To Continue</div>";
 echo "<script>window.location.replace('admin.php')</script>";
}
?>
