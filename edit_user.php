<html>
	   <head>
			    <?php session_start();?>
			
	<?php 
		  if(isset($_SESSION['id']) && isset($_SESSION['email']))
		   {

		
			   	 include "db_connection.php";

			   include("head.php");


			 ?>
                      
						<link rel="stylesheet" href="../css/bootstrap3.css">
					
					<link rel="stylesheet" href="../css/bootstrap3_icon.css">

					 <link rel="stylesheet" href="../css/style.css">

					  <link rel="stylesheet" href="../css/media_query.css.css">
					   <link href=" images/logo/url-logo.png" rel="icon">   




				 <title>Registration form</title>
			 
		
			 <style>

				 
				   .registration-control{      
				   								 line-height: 37px;
											    background-color: white;
											    border-radius: 7px solid;
											    border: outset;
											    border-radius: 10px;
											   	padding: 0px 0px 39px 0px;
												height: auto;

											} 

				   .patient{
							  background: linear-gradient(91deg,rgb(157 22 22),rgb(57 33 133));
							  border-radius:9px;
							  padding:10px 0px;						 
								   
						}                      

					.text-area{
								width:100%;
								padding: 15px;

								}
                                       
			 </style>   

	   </head>

<body>        

  <section class="registration mt-40">
   <div class="container"> 
		<div  class="row ">
		 <div class="col-sm-12"> 

				<a href="index.php" class="btn btn-primary"><i class="fa fa-toggle-left" style="font-size:16px"></i> Back</a>


		<div  class=" row registration-control">	
				  
		 <form action="update_user.php" method="POST" enctype="multipart/form-data" >

						   <div class="form-row">
							   <div class="patient font-math">

								  <h3 class="text-center color-w"><i class="fa fa-edit" style="font-size:24px; "></i> Edit  Patient Admit Form  Unix Hospital</h3>

							   </div>
						   </div>


	 <!-- ********         Here showing the error of form of patient  **************** -->

									<?php	 
										if(isset($_GET['error_null'])){
			                            echo $_GET['error_null'];
										} 
							// this error successfully registered patient
 
										 	if(isset($_GET['error'])){ 
											  echo $_GET['error'];
											}

							// this error Aadhar no 
										 if(isset($_GET['error_Aadhar'])){
			                           echo $_GET['error_Aadhar'];
										}


									if(@$_SESSION['msg'])
													{
													  echo $_SESSION['msg'];

													  $_SESSION['msg']='';
													}
							


					 $sql=" SELECT * FROM p_registration where id='".$_GET['id']."'"; 

					 $result= mysqli_query($con,$sql);
           $row=mysqli_fetch_assoc($result) ;
			 		 					 
					?>   


				  		<div class="form-row mt-40 font-16">

						    <div class="form-group col- xs-12 col-sm-6 col-md-6 col-lg-6 ">

							  <input type="hidden" name="id"  value="<?php  echo $row['id'];?>" /> 

						      <label>Patient Name</label>
						      <input type="text" name="pname" value="<?php echo $row['pname'];?>" class="form-control" placeholder=" Enter patient name"  required=""/> 

							  <label>Aadhar No</label>
						      <input type="text" name="aadhar" value="<?php echo $row['aadhar'];?>" class="form-control"  placeholder="Enter Aadhar" maxlength="12" minlength="12" required=""/>								
																											 
						  </div>
						
							   <div class="form-group col- xs-12 col-sm-6 col-md-6 col-lg-6 ">

							        <label>Father</label>
						      		<input type="text" name="father" value="<?php echo $row['father'];?>"  class="form-control"  placeholder="Enter father"  required=""/>								

								  <label>Email</label>
							      <input type="email" name="email" value="<?php echo $row['email'];?>"  class="form-control"  placeholder="Enter Email"  required=""/>
												
									<?php    			
										if(isset($_GET['error1'])){
			                           echo $_GET['error1'];
										} 			?>
                                          
							    </div>    
						</div>
                       							  
			    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-5 ">

				       <label>DOB</label>

					
				       <input type="date" name="dob" value="<?php echo $row['dob'] ;  ?>"  class="form-control">
				    </div>

				    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">

					      <label>Choose Gender</label>
					      <select class="form-control" name="gender"   required=""/>
					        <option selected>Choose...</option>
					        <option value="male" <?php echo $row['gender']=='male' ? 'selected':' ';   ?>>Male</option>
							<option value="female" <?php echo$row['gender']=='female' ? 'selected' :' ';  ?>>Female</option>
							<option value="other" <?php  echo $row['gender']=='other' ? 'selected' : ' '; ?>>Other</option>
					      </select> 
				    </div>

																	    
				    <div class="form-group col-xs-12 col-sm-12 col-md-2 col-lg-3">

				      <label>Mobile</label>
				      <input type="tel" name="mobile" value="<?php echo $row['mobile'];?>"  placeholder="Enter Mobile"  class="form-control "  maxlength="10" minlength="10" required="">
				    </div> 



					<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

				      <label>Old Photo</label>
                       <?php
						   $fol = "../uploade_image/".$row['image'];

              if(file_exists($fol)) {
				           echo '<img src = "'.$fol.'" name="image" alt="photo" height="100px" width = "100px" >';  
                         }
                         else{
                              echo "image not found";
                              }
								   			 
                        ?>   

					<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

						<label>Select new photos</label>
             <input type="hidden" name = "old_img"  value="<?php echo $row['image'];?>" >

             <input type="file" name = "image"   class = "form-control" accept=".png,.jpeg,.jpg">
				    </div> 
					
				</div> 

						
					<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

				      <label>Address</label>
				      <input type="text" name="address" value="<?php echo $row['address'];?>" class="form-control" placeholder=" Enter Address"  required=""/>   

				    </div> 	     


					      
					 	<div class=" mt-40 col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
				     <input type="submit" name="update" value="update Now" class=" ml-20 btn btn-danger" />
					  </div> 	     


			</form>  

</div>	
		 </div>
	   </div>

    </div>
</section>
</body>

			 <?php }

			 		//	}
			 ?>



</html>




