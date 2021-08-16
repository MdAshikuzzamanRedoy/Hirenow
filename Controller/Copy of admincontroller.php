<?php
$var;
  require_once '../Models/db_connect2.php';

 if(isset($_POST["send"]))
  {
   insertMessage();
  }



function insertMessage()
{

 $aemail=$_POST["massage"];

  $query="INSERT INTO `chatbox`(`Sender`, `Receiver`, `Message`) VALUES ('Modarator','Admin','$aemail')";

  execute($query);
 
  header("Location:../View/Modarator/massagebox.php");
}


  ?>