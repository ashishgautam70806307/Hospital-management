<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<!DOCTYPE html>
<html lang="en">
  <head>

		  <?php session_start();?>
		  
	  <?php
		  if(isset($_SESSION['id']) && isset($_SESSION['email']))
		   {
		?>      	
		<?php include "db_connection.php";?>

		<?php include "head.php"; ?>
		<?php include "header.php";?>  

	   <meta name="viewport" content="width=device-width, initial-scale=1">   
	   <link rel="stylesheet" href="..css/style_admin.css"/>
	   <link rel="stylesheet" href="css/fontawesom4.css"/>  
      <link href=" images/logo/url-logo.png" rel="icon">   

		  <style>
		 

		  </style>

    <title>Contact us </title>
	
  </head>

  <body>

		   <section class="contact-page mt-40" >
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class="color-blu font-w"><i class="fa fa-phone"></i> Conta</span><span class="color-r font-w">cts  Details</span></h1>
			 <div class="row placeholders"> 
		     <div class="row placeholders">              
			<h4 class="tp ">!! Appointment messege </h4>

												   <?php
									if(@$_SESSION['delete'])
									{
									  echo $_SESSION['delete'];

									  $_SESSION['delete']='';
									}

								  ?>
                                             
			 <div class="  table text-center  mt-20">

				  <table   cellspacing="5px" cellpadding="10px" width="100%" class="  table table-hover   table-responsive">

					  <thead>
							<tr>
							  <th>Contact Id</th>
							  <th>Name</th>
							 <th>mobile</th>
							  <th>subject</th>
							  <th>messege</th>
							  <th>Delete</th>

							</tr>
					  </thead>  



						  <?php    
								   $con= mysqli_connect('localhost','root','', 'hospital');
							 
								   $sql="select * from  contact_us ";
							
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
								<td><?php echo $row['mobile'];?></td>
								<td><?php echo $row['subject'];?></td>
								<td><p><?php echo $row['messege'];?> </p></td> 
								
                                	<td> <a href="delete_contactus.php?id= <?php echo ($row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you really want to delete recored  ?');"
							 			data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i>

							              </a>
									 </td>
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

					 <?php
						}
						?>
  </body>
</html>

