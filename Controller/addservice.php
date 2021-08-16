<?php
$var;
  require_once '../Models/db_connect2.php';

if(isset($_POST["addservice"]))
  {
    addservice();
  }


  function addservice()
{

  $heading=$_POST["heading"];
  $pack1=$_POST["p1"];
  $pack2=$_POST["p2"];
  
  $pack3=$_POST["p3"];
 

 //file upload 1
        $target_dir="../storage/product_image/";
        $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["pic1"]["tmp_name"], $target_file);
    //echo $target_file;

//file upload 2
        $target_dir2="../storage/product_image/";
        $target_file2 = $target_dir2 . basename($_FILES["pic2"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["pic2"]["tmp_name"], $target_file2);
    //echo $target_file2;
	
	//file upload 3
        $target_dir3="../storage/product_image/";
        $target_file3 = $target_dir3 . basename($_FILES["pic3"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["pic3"]["tmp_name"], $target_file3);
    //echo $target_file3;
	
  $query="INSERT INTO `service`(`heading`, `pac1`, `pac2`, `pac3`, `pic1`, `pic2`, `pic3`) VALUES ('$heading','$pack1','$pack2','$pack3','$target_file','$target_file2','$target_file3')";
//echo $query;
execute($query);
 header("Location:../View/Admin/addservice.php");


}




  ?>
