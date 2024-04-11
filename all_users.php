<!DOCTYPE html>
<html lang="en">
  <head>

	
	   <?php session_start();?>
	  
	<?php 
		  if(isset($_SESSION['id']) && isset($_SESSION['email']))
		   {

		?>

		 	<?php include "db_connection.php";?>
     	
		<?php include "head.php";?>
		<?php include "header.php";?>




	     <link rel="stylesheet" href="..css/style_admin.css"/>
	   <link rel="stylesheet" href="css/fontawesom4.css"/>  
     
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href=" images/logo/url-logo.png" rel="icon">   

    <title>user </title>

		 <style>
		   h3{
				background-color:red;
				color: white;
				padding:20px;

				}
			.font-16{     
						font-size: 16px;

						}

		 </style>

  </head>

  <body>

        <section class="user-page mt-40" >
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class="color-r font-w"><i class="fa fa-users"></i> All Pa</span><span class="color-blu">tient</span></h1>

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

				  <table   cellspacing="5px" cellpadding="10px" width="100%" class=" font-16 table table-hover   table-responsive">

					  <thead>
							<tr>
							  <th>Patient Id</th>
							  <th>Patient name</th>
							  <th>Father</th>
							  <th>Aadhar</th>
							  <th>Email</th>
							   <th>DOB</th>
							   <th>Gender</th>
							   <th>Mobile</th>
							   <th>Address</th>
							   <th>Image</th>
							   <th>Show</th>
							   <th>Edit</th>
							   <th>Delete</th> 							  
							</tr>
					  </thead>       
						  <?php    
								 //  $con= mysqli_connect('localhost','root','', 'hospital');
							 
								   $sql="select * from  p_registration ";
							
								   $result=mysqli_query($con , $sql);
								   
									if(mysqli_num_rows($result)>0)
									 {
							     
							  while($row= mysqli_fetch_assoc($result))
							 
							   {
							  ?>     
						<tbody>      
							 <tr>    	   

								<td><?php echo $row['id'];?></td>
								<td><?php echo $row['pname'];?></td>
								<td><?php echo $row['father'];?></td>
								<td><?php echo $row['aadhar'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['dob'];?></td>
								<td><?php echo $row['gender'];?></td>
								<td><?php echo $row['mobile'];?></td>      							
								<td><p><?php echo $row['address'];?></p></td>



								<td>
									<?php 
										 // this query is run to show image in database table.

										if(!empty($row['image'])){  ?>

											<a href="../uploade_image/<?php echo $row['image']; ?>" target="_blank" >
                      							  <img src="../uploade_image/<?php echo $row['image']; ?>" alt="pic" width="80" height="70">
                        					</a>
										   
									 <?php }   ?>
							 </td> 


				<td> <a href="user_profile.php?id= <?php echo ($row['id']); ?>" class="btn btn-primary btn-sm";
			 			data-toggle="tooltip" title="show"><i class="fa fa-eye"></i>
			 </a></td>


	      	<td> <a href="edit_user.php?id= <?php echo ($row['id']); ?>" class="btn btn-info btn-sm";
					 			data-toggle="tooltip" title="edit"><i class="fa fa-edit"></i>
					 </a></td>



								<td> <a href="all_delete.php?id=<?php echo ($row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you really want to delete recored  ?');"
							 			data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i>

							 </a></td>
 
                       						
							</tr>
 
					<?php		
							 }
								}


							  else{
									 echo "<h3 > Sorry !! Record not found</h3>";

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

				  <?php }?>



  </body>
</html>

