<?php
$var;
  require_once '../Models/db_connect2.php';

if(isset($_POST["hire"]))
  {
    hirenow();
  }
 else if(isset($_POST["insertreport"]))
  {
    insertreport();
  }
  else if(isset($_POST["insertreportem"]))
  {
    insertreportem();
  }
  else if(isset($_POST["rating"]))
  {
    rate();
  }
  
  function hirenow()
  {

      session_start();

      if(!empty('$_SESSION["loggedinuser"]')){
        $var=$_SESSION["loggedinuser"];

      }



            $name=$_POST["pname"];
            $phone=$_POST["ophone"];
            $address=$_POST["oaddress"];

            $package=$_POST["ocpass"];
           
    $query="INSERT INTO `hirereq`(`name`, `username`, `phone`, `address`, `package`,`status`, `payment`) VALUES ('$name','$var','$phone','$address','$package','pending','none')";
    execute($query);

   

    header("Location:../View/user/catagory.php");
}
  

function insertreport()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $aname=$_POST["sub"];
  $aemail=$_POST["msg"];


  $query="INSERT INTO reportbox(sender,receiver,subject,message,usertype,status) VALUES ('$var','Admin','$aname','$aemail','User','Unread')";


  execute($query);
header("Location:../View/user/report.php");

}

  

function rate()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $ename=$_POST["ename"];
  $date=$_POST["date"];
  $work=$_POST["work"];
   $review=$_POST["review"];
    $rate=$_POST["star"];
	$sl=$_POST["sl"];


  $query="INSERT INTO `rate`(`employeeid`, `userid`, `work`, `date`, `rate`) VALUES ('$ename','$var','$work','$review','$rate')";
$query2="UPDATE `hirereq` SET `status`='done',`payment`='done' WHERE `sl`='$sl';";

  execute($query);
   execute($query2);
header("Location:../View/user/ongoingservices.php");

}


function insertreportem()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $aname=$_POST["sub"];
  $aemail=$_POST["msg"];


  $query="INSERT INTO reportbox(sender,receiver,subject,message,usertype,status) VALUES ('$var','Admin','$aname','$aemail','Employee','Unread')";


  execute($query);
header("Location:../View/Employee/report.php");

}



  ?>