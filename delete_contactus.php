
<?php session_start();?>
	
<?php include "db_connection.php";?>
  

<?php
       
	 // **************** Start  Contact Us  User  Deleted Recoreds ****************************

          



		  if(isset($_SESSION['id']) && isset($_SESSION['email']))
		   {
             

				 $contact_id= $_GET['id'];

			// echo  $contact_id;

			 // exit;

		
			 $sql="delete from contact_us where id='".$contact_id."' ";
		
			 	$result=mysqli_query($con,$sql);

			   $_SESSION['delete']='<div class="alert alert-danger"><b> Deleted !! </b>Contact Us  Registered succesfully.</div>';
				           
           		header("location:contactus.php");

	}
		else{

			header('location:contactus.php?error= echo "not delete users !! ');

				}
		  





?>
