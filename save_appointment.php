<?php

  include("db_connection.php");


  if(isset($_POST['submit']))

  {
	$name= $_POST['name'];

	$email= $_POST['email'];

	$mobile= $_POST['mobile'];

	$gender=$_POST['gender'];

	$messege= $_POST['messege'];


   if(	$name==''|| $email==''||	$mobile==''||	$gender==''|| 	$messege=='')

		{
			 header('location:index.php?error=<b style="color:red;"> !! Please Enter fill filds </b>');
            
		}
		  else{

				   $sql="select * from appointment where email='$email'";

				   $result= mysqli_query($con,$sql);
					
				   $count= mysqli_num_rows($result);


				 if($count!=0)

				{
				   header('location: index.php?error= <h5 style="color:blue; text-align:center;"> Email alredy Exit !! Please Fill Other email</h5>');

				}
				  else{

						   $ins_sql="insert into appointment(name,email,mobile,gender,messege) values('{$name}','{$email}','{$mobile}','{$gender}','{$messege}')";
							
                           $result_appoint=mysqli_query($con,$ins_sql);
							
						  header('location:index.php?error= <h4 style="color:green; text-align:center;"> Send messege Succesfully !</h4>');

						}


    			}


			
  }




?>
