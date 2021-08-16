

<?php
session_start();
// Create connection
$conn = mysqli_connect("localhost", "root", "", "hirenow");

  $var=$_SESSION["loggedinuser"];
$sql = "SELECT * FROM hirereq WHERE date LIKE '%".$_POST['name']."%' AND status='done'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		
                 echo "	<tr>
		          <td>".$row['sl']."</td>
		          <td>".$row['name']."</td>
		          <td>".$row['username']."</td>
		          <td>".$row['phone']."</td>
				  <td>".$row['address']."</td>
				   <td>".$row['package']."</td>
				  <td>".$row['date']."</td>
		       
				   
		        </tr>";
                  }
             
	}

else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>
