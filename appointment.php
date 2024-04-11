

<!DOCTYPE html>
<html lang="en">
  <head>
			<?php session_start(); ?>

			<?php include "db_connection.php";?>

	 <?php
		if(isset($_SESSION['id']) && isset($_SESSION['email']))
		 { 

		   ?>

		<?php include "head.php";?>
		<?php include "header.php";?>

	 
		

	   <link rel="stylesheet" href="..css/style_admin.css"/>
	    <link rel="stylesheet" href="css/fontawesom4.css"/>


    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href=" images/logo/url-logo.png" rel="icon">   

    <title>user </title>

			 <style>    
			 </style>

	
  </head>

  <body>

		 <section class="appointment-page mt-40" >
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class=" font-w color-blu"><i class="fa fa-book"></i>  Unix Hospital </span><span class="color-r">Appointment</span></h1>
		
		  <div class="row placeholders">
            
			<h4 class="tp ">!! Appointment messege </h4>


								<?php
									if(@$_SESSION['delete'])
									{
									  echo $_SESSION['delete'];

									  $_SESSION['delete']='';
									}      
								  ?>





			 <div class=" table text-center mt-20 font-16">

				  <table   cellspacing="5px" cellpadding="10px" width="100%" class=" table-hover table  table-responsive" >

					  <thead>
							<tr>
							  <th>Appointment Id</th>
							  <th>Name</th>
							  <th>Email</th>
							  <th>mobile</th>
							  <th>gender</th>
							  <th>messege</th>
							  <th>Delete</th>

							</tr>
					  </thead>  



						  <?php    
								  
								   $sql="select * from  appointment ";
							
								   $result=mysqli_query($con , $sql);
								   
									if(mysqli_num_rows($result)>0)
									 {
							     
							  while($row= mysqli_fetch_assoc($result))
							 
							   {
							  ?>

						<tbody>

							 <tr>

						   

								<td><?php echo $row['id'];?></td>
								<td><?php echo $row['name'];?></td> 							
								<td><?php echo $row['email'];?></td> 
								<td><?php echo $row['mobile'];?></td>
								<td><?php echo $row['gender'];?></td>
								<td><p><?php echo $row['messege'];?> </p></td> 


									<td> <a href="delete_appointment.php?id= <?php echo ($row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you really want to delete recored  ?');"
							 			data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i>

							 </a></td>
 
							</tr>

					<?php		
							 }
								}


							  else{
									 echo "Record not found";

								}

							   ?>

						</tbody>

				  </table>
			 </div>
          </div>
		   </div>

          </div>
        </div>
      </div>
    </div>
					  <?php }?>
    
  </body>
</html>

