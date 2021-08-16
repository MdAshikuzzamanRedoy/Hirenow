<?php
require_once ('../aController/admincontroller.php');
$products=services();
?>

<!DOCTYPE html>
<html lang="en">
<title>Services</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{
	margin-bottom:-6px;
margin-top:16px;

cursor:pointer}
.w3-col.m6, .w3-half {
    width: 100%;
}
.w3-red, .w3-hover-red:hover {
   
background-color: #000000!important;}
.w3-padding-64 {
	padding-top: 13px!important;
    padding-bottom: 24px!important;
    
}
</style>

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b><a href="userpanel.php">HireNow</a></b></h3>
  </div>

  <div class="w3-bar-block">


<?php
                foreach($products as $product)
                {
              ?>
    
      <ul>
        <li><a href="#<?php echo $product["heading"];?>"onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><?php echo $product["heading"];?></a></li>
      

      </ul>
	   <?php
				}
              ?>
    </nav>






  </div>




<?php
                foreach($products as $product)
                {
              ?>

<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div id="<?php echo $product["heading"];?>" class="w3-container" style="margin-top:80px" >

    <h1 class="w3-xxxlarge w3-text-red"><b><?php echo $product["heading"];?></b></h1>
    <div class="w3-half">
      <img src="<?php echo $product["pic1"];?>" style="width:100%"  alt="Concrete meets bricks">
<p><a href="Finalizeservice.php?service=<?php echo $product["pac1"];?>"><?php echo $product["pac1"];?></a><p>

      <img src="<?php echo $product["pic2"];?>" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
<p><a href="Finalizeservice.php?service=<?php echo $product["pac2"];?>"><?php echo $product["pac2"];?></a></p>

      <img src="<?php echo $product["pic3"];?>" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
<p><a href="Finalizeservice.php?service=<?php echo $product["pac3"];?>"><?php echo $product["pac3"];?></a></p>
    </div>
  </div>

</div>
 <?php
				}
              ?>





</body>
</html>
