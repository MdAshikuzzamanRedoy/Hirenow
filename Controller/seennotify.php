<?php
session_start();
  require_once '../Models/db_connect2.php';
 
$query ="UPDATE `reportbox` SET `status`='read' WHERE `sl`='$_GET[id]'";
  execute($query);
header("Location:../View/Admin/notification.php");




  ?>
