

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
<form class="box" action="../../Controller/admincontroller.php"onsubmit="return validation()" method="post">

      <div id="error_message"></div>
      <h1>Admin Registration</h1>
      <input type="text"id="uname" name="ouname" placeholder="Admin Id" />
     
      <input type="password" id="pass" name="ocpass" placeholder="Password" />
	 
      <input type="submit" name="adminsignup" value="Sign-Up" />
    </form>


	</div>
	</section>
 

<script type="text/javascript">


		function validation(){

			
			var pass = document.getElementById('pass').value;

      	var uid = document.getElementById('uname').value;
        	
          	
            	
				
			
			


              error_message.style.padding = "10px";



		




			if(pass == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('error_message').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;
			}





      if(uid == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the username field";
        return false;
      }

      if((uid.length <= 2) || (uid.length > 12)) {
        document.getElementById('error_message').innerHTML =" ** username lenght must be between 2 and 12";
        return false;
      }






      
      alert("Admin Account Created Successfully!");
      return true;
		}

	</script>
