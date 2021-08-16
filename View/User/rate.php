
<?php

include('header/header.php');
$employeeid="$_GET[id]";
$date="$_GET[Date]";
$work="$_GET[workname]";
$sl="$_GET[sl]";

?>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);
*{
  margin: 0;
  padding: 0;
  font-family: roboto;
}



.cont{
  width: 93%;
  max-width: 350px;
  text-align: center;
  margin: 5% auto;
  padding: 30px 0;
  background: #111;
  color: #EEE;
  border-radius: 5px;
  border: thin solid #444;
  overflow: hidden;
}

hr{
  margin: 20px;
  border: none;
  border-bottom: thin solid rgba(255,255,255,.1);
}

div.title{
  font-size: 2em;
}

h1 span{
  font-weight: 300;
  color: #Fd4;
}

div.stars{
  width: 270px;
  display: inline-block;
}

input.star{
  display: none;
}

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content:'\f005';
  color: #FD4;
  transition: all .25s;
}


input.star-5:checked ~ label.star:before {
  color:#FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before {
  color: #F62;
}

label.star:hover{
  transform: rotate(-15deg) scale(1.3);
}

label.star:before{
  content:'\f006';
  font-family: FontAwesome;
}

.rev-box{
  overflow: hidden;
  height: 0;
  width: 100%;
  transition: all .25s;
}

textarea.review{
  background: #222;
  border: none;
  width: 100%;
  max-width: 100%;
  height: 100px;
  padding: 10px;
  box-sizing: border-box;
  color: #EEE;
}

label.review{
  display: block;
  transition:opacity .25s;
}



input.star:checked ~ .rev-box{
  height: 125px;
  overflow: visible;
}






</style>
<section>
 <div class="cont">
<div class="title">
  <h1>Rate<span>.Employee</span></h1>
</div>


<div class="cont">
<div class="stars">
<form action="../../Controller/usercontroler.php" method="post"enctype="multipart/form-data">
  <input class="star star-5" id="star-5-2" type="radio"value="5" name="star"/>
  <label class="star star-5" for="star-5-2"></label>
  <input class="star star-4" id="star-4-2" type="radio"value="4" name="star"/>
  <label class="star star-4" for="star-4-2"></label>
  <input class="star star-3" id="star-3-2" type="radio" value="3"name="star"/>
  <label class="star star-3" for="star-3-2"></label>
  <input class="star star-2" id="star-2-2" type="radio" value="2"name="star"/>
  <label class="star star-2" for="star-2-2"></label>
  <input class="star star-1" id="star-1-2" type="radio" value="1"name="star"/>
  <label class="star star-1" for="star-1-2"></label>
  <div class="rev-box">
   <input type="hidden" name="ename"value="<?php echo $employeeid ?>"/>
    <input type="hidden" name="date"value="<?php echo $date ?>"/>
	<input type="hidden" name="sl"value="<?php echo $sl ?>"/>
	 <input type="hidden" name="work"value="<?php echo $work ?>"/>
    <textarea class="review" col="30" name="review"></textarea>
	<button type="submit"  name="rating" value="Rate" style="color:red">Rate</button>
    <label class="review" for="review">Your comment is important to us!!</label>
  </div>
</form>
</div>
</div>


<section>



