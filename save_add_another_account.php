 <?php session_start();?>



<?php

 
     include("db_connection.php"); 

	if(isset($_POST['submit'])){

		$username= $_POST['username']; 
		$email=   $_POST['email'];
       $password=$_POST['password'];
	     
    
	  if($username== '' || $email== '' || $password== '')
	 {
	  header('location:add_another_accounts.php?error_null=<h4 style="color:red; text-align:center;"><b> !! Please Enter fill all fields(box)</b>  </h4>');
                                
	 }	
	  else{
	  
		   $sql= "select * from login where email= '$email'";
		   $result= mysqli_query($con , $sql);
		   $count= mysqli_num_rows($result);

					if($count!=0)
				             {
								 	 header('location:add_another_accounts.php?success=<h5 style="color:red;"><b> !! Alrady Exit this Email ? plese fill Other Email </b> </h5>');	                        						 
							} 				
						else{


						if($username==='unix')
							{

							    $sql="insert into login( username,email,password) values('{$username}','{$email}', '{$password}')";
				
								$result= mysqli_query($con,$sql);
						
							//	header('location:forget_password.php?success= <h4 style="color:green; text-align:center;"> Save Login Recored Succesfully !</h4>');
					         	

						  
				   	      $_SESSION['add_admin']='<div class="alert alert-success"><strong>Success!!</strong> add another Admin member successfully.</div>';
				                                         					
  						
 							header('location:index.php');

 						}else{

							 $_SESSION['msg']='<div class="alert alert-warning"><strong>Sorry !!</strong> Your Admin username Wrong X.</div>';	

							  header('location:add_another_accounts.php');


 						}

  
							} 
		  }
}
		 
else{

		   echo "not enter in if condition";

			}



                   
?>
