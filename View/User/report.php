
<?php

include('header/header.php');


?>

  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Josefin Sans', sans-serif;
  	    font-weight: bold;
  }

  body{

  }

  .wrapper{
    position: absolute;
    top: 54%;
    left: 50%;
    transform: translate(-50%,-50%);
    max-width: 350px;
    width: 100%;
    background: #fff;
    padding: 25px;
    border-radius: 5px;
    box-shadow: 4px 4px 2px rgba(254,236,164,1);
  }

  .wrapper h2{
    text-align: center;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #332902;
  }

  .wrapper .input_field{
    margin-bottom: 10px;
  }

  .wrapper .input_field input[type="text"],
  .wrapper textarea{
    border: 1px solid #e0e0e0;
    width: 100%;
    padding: 10px;
  }

  .wrapper textarea{
    resize: none;
    height: 80px;
  }

  .wrapper .btn input[type="submit"]{
    border: 0px;
    margin-top: 15px;
    padding: 10px;
    text-align: center;
    width: 100%;
    background: #fece0c;
    color: #332902;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: bold;
    border-radius: 25px;
    cursor: pointer;
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
      <div class="main-section">
        <div class="dashbord">
          <div class="icon-section">

            <div class="wrapper">
              <h2>Contact Admin</h2>
              <div id="error_message"></div>
              <form id="myform" onsubmit="return validate();" method="post" action="../../Controller/usercontroler.php" >
                <div class="input_field">
            			<label for="Name">From:</label >
                    <input type="text" placeholder="Sender" value="<?php echo $_SESSION["loggedinuser"];?>" id="bal" readonly >
                </div>
                <div class="input_field">
            			<label for="subject">To:</label>
                    <input type="text" placeholder="Receiver" value="ADMIN" id="null"disabled><br><br>
                </div>
            		<div class="input_field">
            			<label for="subject">Subject:</label>
            				<input type="text" name="sub" placeholder="Subject" id="subject"><br><br>
            		</div>

                <div class="input_field">

                    <textarea placeholder="Message" name="msg" id="message"></textarea>
                </div>
                <div class="btn">
                    <input type="submit" name="insertreport" value="Send">
                </div>
              </form>
            </div>




          </div>
        </div>
      </div>
    </section>









<?php

include('footer/footer.php');



?>

<script>

function validate(){

  var subject = document.getElementById("subject").value;
  var message = document.getElementById("message").value;

  var error_message = document.getElementById("error_message");

  error_message.style.padding = "10px";

  var text;

  if(subject.length < 10){
    text = "Please Write Subject In details";
    error_message.innerHTML = text;
    return false;
  }

  if(message.length <= 20){
    text = "Please Write your problem in details";
    error_message.innerHTML = text;
    return false;
  }
  alert("Report Sent Successfully!");
  return true;
}
</script>
