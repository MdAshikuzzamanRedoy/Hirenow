
<?php

include('header/header.php');

require_once ('../../Controller/userinfo.php');
$info=userdetails();
$package="$_GET[service]";
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
<form class="box" action="../../Controller/usercontroler.php"onsubmit="return validation()" method="post">

      <div id="error_message"></div>
      <h1>Finalize service</h1>
      <input type="text"id="uname" name="ouname" value="<?php echo $_SESSION["loggedinuser"];?>" placeholder="Username" /readonly>
      <input type="text"id="user" name="pname" value="<?php echo $info["fullname"] ?>" placeholder="Full Name" /readonly>
      <input type="text"id="mobileNumber" name="ophone" value="<?php echo $info["phone"] ?>" placeholder="Mobile No">
     
      <input type="text"id="emails" name="oaddress" value="<?php echo $info["address"] ?>"placeholder="Address" />
      <input type="text" id="pass" name="ocpass" value="<?php echo $package ?>"placeholder="package" /readonly>
	 
      <input type="submit" name="hire" value="Hire Now" />
    </form>


	</div>
	</section>
  </body>
</html>
<script type="text/javascript">


		function validation(){

			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;
      
        	
            	
				
			
			


              error_message.style.padding = "10px";



			











			if(mobileNumber == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the Mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('error_message').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=11){
				document.getElementById('error_message').innerHTML =" **Mobile NO must be 11 digits only";
				return false;
			}


if(emails == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Address field";
        return false;
      }

      if((emails.length <= 2) || (emails.length > 30)) {
        document.getElementById('error_message').innerHTML =" ** Address lenght must be between 2 and 30";
        return false;
      }

			



     
		




      



      
      alert("Successfully! Hired");
      return true;
		}

	</script>










</body>
</html>
