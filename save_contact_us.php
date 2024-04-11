<?php

  include("db_connection.php"); 

  if(isset($_POST['submit']))

  {
	$name= $_POST['name'];

	$mobile= $_POST['mobile'];

	$subject= $_POST['subject'];

	$messege= $_POST['messege'];


   if(	$name==''||	$mobile==''||	$subject==''|| 	$messege=='')

		{
			 header('location:contactus.php?error=<b style="color:red;"> !! Please Enter fill all filds(box)  </b>');
            
		}
		  else{

				   $sql="insert into contact_us(name,mobile,subject,messege) values('{$name}','{$mobile}','{$subject}','{$messege}')";
					
                   $result= mysqli_query($con,$sql);
					
				  header('location:contactus.php?error= <h4 style="color:green; text-align:center;"> Send messege Succesfully !</h4>');

					


    			}

				 
  }

			  else{
						echo "<h5>No inserted any data</h5>"   ;

					}
			


?>
