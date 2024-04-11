
<?php 

session_start();
include "db_connection.php";
  
		  if(isset($_SESSION['id']) && isset($_SESSION['email']))
		   {
             
								  
				 $login_id= $_GET['id'];

			 //echo  $login_id;
			 //exit;
		
			 $sql="delete from login where id='".$login_id."' ";
		
			 	$result=mysqli_query($con,$sql);

			   $_SESSION['delete_admin']='<div class="alert alert-success"><b> Deleted !! </b>Admin Registered Deleted Succesfully.</div>';

			 	 header('location:user.php');
		             

		}else{

			header('location:user.php?error= Sorry!! not delete users !! ');

				}
		  




?>
