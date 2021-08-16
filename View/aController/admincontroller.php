<?php
$var;
  require_once '../../Models/db_connect2.php';

if(isset($_POST["hire"]))
  {
   
  }
 
function services()
  {
   

   

    $query="SELECT * FROM service";
    $product=get($query);
    return $product;


  }





  ?>