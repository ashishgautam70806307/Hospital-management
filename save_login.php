  <?php include "db_connection.php";?>
    
	<?php 
		  
		session_start();

	
		if(isset($_POST['submit']))
		{
	
	
		$email=$_POST['email'];
		$password=$_POST['password'];
	
				if($email ==''|| $password =='')
				{
			             
                $_SESSION['msg']='<div class="alert alert-danger"><strong>Sorry!!</strong> Can not  Empty Fields </div>';				      	
				header('location:login.php');				

		}

	   else{   

				$sql= "select * from login where email='$email' ";

		     	$result= mysqli_query($con,$sql);

				if(mysqli_num_rows($result)==0)
					{          
							  $_SESSION['msg']='<div class="alert alert-danger"><strong>Sorry !!</strong> This user no Exit </div>';	
						       header('location:login.php');				
  					}
					 else{

							  $row= mysqli_fetch_assoc($result);
							
								 //print_r($row);
					              //exit; 
								if($email===$row['email'] && $password=== $row['password'])
								{
									//echo "login success!!";
								
								  $_SESSION['id']= $row['id'];
								  $_SESSION['email'] = $row['email'];

								header('location:admin/index.php');										

								}
								   else{
										  
				   	    			 	$_SESSION['msg_Incorrect']='<div class="alert alert-danger font-16"><strong>Sorry !!</strong> Incorrect Your !!  login </div>';	
						    
									 	header('location:login.php');
										}
					}   
 
					}
								

          	}else{
						header('location:login.php');

					}
			?>


			



		</body>
	<html>


