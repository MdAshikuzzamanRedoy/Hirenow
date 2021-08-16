<?php
$var;
  require_once '../Models/db_connect2.php';

if(isset($_POST["adminsignup"]))
  {
   adminsignup();
  }
 else if(isset($_POST["modaratorsignup"]))
  {
   modaratorsignup();
  }
  else if(isset($_POST["usersignup"]))
  {
   usersignup();
  }
 else if(isset($_POST["send"]))
  {
   insertMessage();
  }
 
 else if(isset($_POST["employeesignup"]))
  {
   employeesignup();
  }
 

function adminsignup()
{

  $username=$_POST["ouname"];
  $pass=$_POST["ocpass"];
  
 
	
  $query="INSERT INTO `admin`(`username`, `password`) VALUES ('$username','$pass')";
//echo $query;
execute($query);
if(file_exists('info.json'))
              {
                   $current_data = file_get_contents('info.json');
                   $array_data = json_decode($current_data, true);
                   $extra = array(
                         'username' =>     $_POST['ouname'],
                        
                         'password' =>     $_POST['ocpass'],
                         
                         
                   );
                   $array_data[] = $extra;
                   $final_data = json_encode($array_data);
                   if(file_put_contents('info.json', $final_data))
                   {
                       echo '<script>alert("Data Added in info.json file")</script>';
                   }
              }
              else
              {
                   $error = 'JSON File not exits';
              }
 header("Location:../View/Admin/signupadmin.php");


}

function modaratorsignup()
{

  $username=$_POST["ouname"];
  $pass=$_POST["ocpass"];
  
  $name=$_POST["pname"];
  $address=$_POST["address"];
  
  $phone=$_POST["ophone"];
  $email=$_POST["oaddress"];
  
 
	
  $query="INSERT INTO `modarator`(`username`, `email`, `phone`, `password`, `Name`, `Address`) VALUES ('$username','$email','$phone','$pass','$name','$address')";
//echo $query;
execute($query);
if(file_exists('info.json'))
              {
                   $current_data = file_get_contents('info.json');
                   $array_data = json_decode($current_data, true);
                   $extra = array(
                         'username' =>     $_POST['ouname'],
                         'email' =>     $_POST['oaddress'],
                         'Name'   =>     $_POST['pname'],
                         'password' =>     $_POST['ocpass'],
                         'Address' =>     $_POST['address'],
                         'phone'    =>     $_POST["ophone"],
                         
                   );
                   $array_data[] = $extra;
                   $final_data = json_encode($array_data);
                   if(file_put_contents('info.json', $final_data))
                   {
                       echo '<script>alert("Data Added in info.json file")</script>';
                   }
              }
              else
              {
                   $error = 'JSON File not exits';
              }
 header("Location:../View/Admin/addmodarator.php");


}

function usersignup()
{

  $username=$_POST["ouname"];
  $pass=$_POST["ocpass"];
  
  $name=$_POST["pname"];
  $address=$_POST["address"];
  
  $phone=$_POST["ophone"];
  $email=$_POST["oaddress"];
  
 
	
  $query="INSERT INTO `user`(`username`, `email`, `phone`, `password`, `fullname`, `Address`) VALUES ('$username','$email','$phone','$pass','$name','$address')";
//echo $query;
execute($query);
 if(file_exists('info.json'))
              {
                   $current_data = file_get_contents('info.json');
                   $array_data = json_decode($current_data, true);
                   $extra = array(
                         'username' =>     $_POST['ouname'],
                         'email' =>     $_POST['oaddress'],
                         'Name'   =>     $_POST['pname'],
                         'password' =>     $_POST['ocpass'],
                         'Address' =>     $_POST['address'],
                         'phone'    =>     $_POST["ophone"],
                         
                   );
                   $array_data[] = $extra;
                   $final_data = json_encode($array_data);
                   if(file_put_contents('info.json', $final_data))
                   {
                       echo '<script>alert("Data Added in info.json file")</script>';
                   }
              }
              else
              {
                   $error = 'JSON File not exits';
              }
 header("Location:../View/Signupemployee.php");

}


function employeesignup()
{

  $username=$_POST["ouname"];
  $pass=$_POST["ocpass"];
   $nid=$_POST["nid"];
   $spe=$_POST["spec"];
  $name=$_POST["pname"];
  $address=$_POST["address"];
  
  $phone=$_POST["ophone"];
  $email=$_POST["oaddress"];
  
 
	
  $query="INSERT INTO `employee`(`username`, `email`, `phone`, `password`, `Name`, `Address`,nid,speciality,status) VALUES ('$username','$email','$phone','$pass','$name','$address','$nid','$spe','Active')";
//echo $query;
execute($query);
 if(file_exists('info.json'))
              {
                   $current_data = file_get_contents('info.json');
                   $array_data = json_decode($current_data, true);
                   $extra = array(
                         'username' =>     $_POST['ouname'],
                         'email' =>     $_POST['oaddress'],
                         'Name'   =>     $_POST['pname'],
                         'password' =>     $_POST['ocpass'],
                         'Address' =>     $_POST['address'],
                         'phone'    =>     $_POST["ophone"],
                          'nid'     =>     $_POST["nid"]
                   );
                   $array_data[] = $extra;
                   $final_data = json_encode($array_data);
                   if(file_put_contents('info.json', $final_data))
                   {
                       echo '<script>alert("Data Added in info.json file")</script>';
                   }
              }
              else
              {
                   $error = 'JSON File not exits';
              }
     
 header("Location:../View/Signupemployee.php");

}

function insertMessage()
{

 $aemail=$_POST["massage"];

  $query="INSERT INTO `chatbox`(`Sender`, `Receiver`, `Message`) VALUES ('Admin','Modarator','$aemail')";

  execute($query);
 
  header("Location:../View/Admin/massagebox.php");
}


  ?>