  

<?php include "db_connection.php";?>
<?php session_start();?>
	
  
  
  <?php 

   // 1 . Registration recorded  data delete  query  using .
   

		  
 
		  if(isset($_SESSION['id']) && isset($_SESSION['email']))
		   {
             

				 $d_id= $_GET['id'];

				// echo  $d_id;
			  
			  //  $con= mysqli_connect('localhost','root','', 'hospital');
	
			 $sql="delete from p_registration where id='".$d_id."' ";
		
			 	$result=mysqli_query($con,$sql);

			   $_SESSION['delete']='<div class="alert alert-success"><b> Deleted !! </b>Patient Registrartion succesfully.></div>';
				           
           		header("location:all_users.php");

	}
		else{

			header('location:all_users.php?error= echo "not delete users !! ');

				} 

?>

      



    




