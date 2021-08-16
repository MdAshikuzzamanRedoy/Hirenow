<?php
$var;
  require_once '../Models/db_connect2.php';

if(isset($_POST["Updateprofile"]))
  {
    Profileupdate();
  }
  else if(isset($_POST["Updatestatus"]))
  {
    Updatestatus();
  }
  
  
  function Profileupdate()
  {

      session_start();

      if(!empty('$_SESSION["loggedinuser"]')){
        $var=$_SESSION["loggedinuser"];

      }



            $name=$_POST["name"];
            $phone=$_POST["phone"];
            $address=$_POST["address"];

            $npassword=$_POST["npass"];
           
    $query="UPDATE employee SET fullname='$name',phone='$phone',address='$address',password='$npassword' WHERE username='$var'";
    execute($query);

    echo '<script language="javascript">';
    echo 'alert("your profile updated!!!!")';
    echo '</script>';

    header("Location:../View/Employee/Myprofile.php");
}
  



   function Updatestatus()
  {

      session_start();

      if(!empty('$_SESSION["loggedinuser"]')){
        $var=$_SESSION["loggedinuser"];

      }



            

            $npassword=$_POST["npass"];
			
			if($npassword=='Active')
			{
				$status="Inactive";
				}
		else
				{
					$status='Active';
					}
           
    $query="UPDATE employee SET status='$status' WHERE username='$var'";
    execute($query);

    echo '<script language="javascript">';
    echo 'alert("your profile updated!!!!")';
    echo '</script>';

    header("Location:../View/Employee/status.php");
}
  







  ?>