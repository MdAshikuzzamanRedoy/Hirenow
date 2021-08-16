
<?php


session_start();

setcookie("cook",time()+3600);
include('../../Controller/userval.php');
if (!isLoggedIn()) {

 header('location:../login.php');
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Admin's Dashbord</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="panel.css" />
    <link
    href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
    rel="stylesheet"
  />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <body>
 <header class="header">
      <div class="bgimage">
        <div class="menu">
          <div class="leftmenu">
            <h3><a href="adminpanel.php">Hire Now</a></h3>
          </div>
          <div class="welcome">
            <h1>Admin Dashbord</h1>
            <div class="rightmenu">
              <button id="buttonone" < onclick="window.location.href='../../Controller/logout.php';">
                Logout
              </button>
            </div>
          </div>
        </div>
    </header>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>ID~<?php echo $_SESSION["loggedinuser"];?></header>

    <ul>

       <li><a href="addservice.php">Add Service</a></li>

      <li><a href="userinfo.php">User info</a></li>
      <li><a href="addmodarator.php">Signup Modator</a></li>


		<li><a href="massagebox.php">Modarator Chat</a></li>
        <li><a href="signupadmin.php">Signup Admin</a></li>
		
		<li><a href="allhistory.php">All History</a></li>
		<li><a href="../../Controller/logout.php">Logout</a></li>




    </ul>

</div>
