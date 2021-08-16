<?php
$var;
  require_once '../../Models/db_connect2.php';


  



  function userdetails()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM user WHERE username='$var'";
    $product=get($query);
    return $product[0];


  }
   
function userinfo()
  {
   

   

    $query="SELECT * FROM user";
    $product=get($query);
    return $product;


  }
  
  
  function reportinfo()
  {
   

   

    $query="SELECT * FROM reportbox";
    $product=get($query);
    return $product;


  }
 function pendinginfo()
  {
   

   

    $query="SELECT * FROM hirereq where payment='none' and status='ongoing'";
    $product=get($query);
    return $product;


  }
  function requestinfo()
  {
   

   

    $query="SELECT * FROM hirereq where payment='none' and status='pending'";
    $product=get($query);
    return $product;


  }
  
  function history()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM hirereq WHERE username='$var'and status='done'";
    $product=get($query);
    return $product;


  }
  function unread()
  {
   

   

    $query="SELECT * FROM hirereq WHERE admin='unread'";
    $product=get($query);
    return $product;


  }
  function reportunread()
  {
   

   

    $query="SELECT * FROM reportbox WHERE status='unread'";
    $product=get($query);
    return $product;


  }
  function historyem()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM hirereq WHERE employee='$var'and status='done'";
    $product=get($query);
    return $product;


  }
  
  function rate()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM rate WHERE employeeid='$var'";
    $product=get($query);
    return $product;


  }
function allhistory()
  {
   


    $query="SELECT * FROM hirereq WHERE status='done'";
    $product=get($query);
    return $product;


  }
function getreply(){


  $query ="SELECT * from chatbox WHERE `Sender`='Admin' and `Receiver`='Modarator' or  `Sender`='Modarator' and `Receiver`='Admin' order by `Sl` DESC";
  $products = get($query);
  return $products;
}

 function employeeinfo()
  {
   


    $query="SELECT * FROM employee";
    $product=get($query);
    return $product;


  }
   function employeeone()
  {
   if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }


    $query="SELECT * FROM employee where username='$var'";
    $product=get($query);
    return $product[0];


  }
  function employeeinfoactive()
  {
   


    $query="SELECT * FROM employee where status='Active'";
    $product=get($query);
    return $product;


  }
 function ongoingservice()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM hirereq WHERE username='$var'and status='ongoing'";
    $product=get($query);
    return $product;


  }
  
  function employeereq()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM hirereq WHERE employee='$var'and status='ongoing'";
    $product=get($query);
    return $product;


  }
 function modaratordetails()
  {
    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM modarator where username='$var' ";
    $product=get($query);
    return $product[0];


  }
function pendingservice()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM hirereq WHERE username='$var'and status='pending'";
    $product=get($query);
    return $product;


  }
  function modaratorinfo()
  {
   
    $query="SELECT * FROM modarator ";
    $product=get($query);
    return $product;


  }
  ?>