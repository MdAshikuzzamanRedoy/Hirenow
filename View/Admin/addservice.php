

<?php

include('header/header.php');



?>



<style>

.box {
  width: 328px;
    padding: 19px;
    position: absolute;
    top: 56%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}
.box h1 {
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type="text"],
.box input[type="password"] {
  border: 0;
  background: none;
  display: block;
  margin: 05px auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type="text"]:focus,
.box input[type="password"]:focus {
  width: 280px;
  border-color: yellowgreen;
}
.box input[type="submit"] {
  border: 0;
  background: none;
  display: block;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type="submit"]:hover {
  background: #ff4500;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}

</style>
<section>
<form class="box" action="../aController/addservice.php"onsubmit="return validation()" method="post" enctype ="multipart/form-data">

      <div id="error_message"></div>
      <h1>Add service</h1>
      <input type="text"id="user" name="heading" placeholder="Heading" />
      <input type="text"id="pac1" name="p1" placeholder="Package 1" />
	  <input type="file" id="rono" name="pic1" placeholder="picture 1" />
      <input type="text"id="pac2" name="p2" placeholder="Package 2">
<input type="file"id="rono2" name="pic2" placeholder="picture 2" />
      <input type="text"id="pac3" name="p3" placeholder="Package 3" />
      
	  
	   <input type="file" id="rono3"name="pic3" placeholder="picture 3" />
      <input type="submit" name="addservice" value="Add Service" />
    </form>


	</div>
	</section>


<script type="text/javascript">


		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pac1').value;
			var pass2 = document.getElementById('pac2').value;
			var pass3 = document.getElementById('pac3').value;

			
		
          	var Dob = document.getElementById('rono').value;
			var Dob2 = document.getElementById('rono2').value;
			var Dob3 = document.getElementById('rono3').value;






              error_message.style.padding = "10px";



			if(user == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the heading field";
				return false;
			}
			if((user.length <= 2) || (user.length > 25)) {
				document.getElementById('error_message').innerHTML =" ** heading lenght must be between 2 and 25";
				return false;
			}
			if(!isNaN(user)){
				document.getElementById('error_message').innerHTML =" ** only characters are allowed in heading";
				return false;
			}







			if(pass == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill all the package field";
				return false;
			}


			if(pass2 == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill all the package field";
				return false;
			}


			if(pass3 == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill all the package field";
				return false;
			}







      if(Dob == ""){
        document.getElementById('error_message').innerHTML =" ** Please insert All image";
        return false;
      }

if(Dob2 == ""){
        document.getElementById('error_message').innerHTML =" ** Please insert All image";
        return false;
      }

if(Dob3 == ""){
        document.getElementById('error_message').innerHTML =" ** Please insert All image";
        return false;
      }


      alert("Service Created Successfully!");
      return true;
		}

	</script>
