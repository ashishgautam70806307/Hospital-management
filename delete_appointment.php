
<?php include "db_connection.php";?>
<?php session_start();?>
	
  

<?php
       
	 // **************** Start  APPOINTMENT User  Deleted Recoreds ****************************

          



		  if(isset($_SESSION['id']) && isset($_SESSION['email']))
		   {
             

				 $Appointment_id= $_GET['id'];

			// echo  $Appointment_id;

			 // exit;

		
			 $sql="delete from appointment where id='".$Appointment_id."' ";
		
			 	$result=mysqli_query($con,$sql);

			   $_SESSION['delete']='<div class="alert alert-danger"><b> Deleted !! </b>Appointment  Registered succesfully.</div>';
				           
           		header("location:appointment.php");

	}
		else{

			header('location:appointment.php?error= echo "not delete users !! ');

				}
		  





?>
