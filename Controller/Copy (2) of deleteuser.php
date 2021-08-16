<?php
session_start();
  require_once '../Models/db_connect2.php';
 $var=$_SESSION["loggedinuser"];
$query ="Delete from user where sl='$_GET[id]'";
  execute($query);
header("Location:../View/Admin/userinfo.php");




  ?>
