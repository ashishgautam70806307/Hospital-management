<html>
	   <head>

			  <?php
					session_start(); 
					include("head.php"); 
					include("header.php"); 

					?>
                      
						<link rel="stylesheet" href="css/bootstrap3.css">
					
					<link rel="stylesheet" href="css/bootstrap3_icon.css">

					 <link rel="stylesheet" href="css/style.css">

					  <link rel="stylesheet" href="css/media_query.css.css">




				 <title>Registration form</title>
			 
		
			 <style>

				 
				   .registration-control{       line-height: 37px;
											    background-color: white;
											    border-radius: 7px solid;
											    border: outset;
											    border-radius: 10px;
												padding: 0px 0px 39px 0px;
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

						  
		 <form action="save_registration.php" method="POST" enctype="multipart/form-data" class="registration-control" >

						   <div class="form-row">
							   <div class="patient font-math">

								  <h3 class="text-center color-w"><i class="fa fa-bed" style="font-size:24px; "></i>  Patient Admit Form  Unix Hospital</h3>

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
									?>                                          								   
								


				  		<div class="form-row mt-40 font-16">

						    <div class="form-group col- xs-12 col-sm-6 col-md-6 col-lg-6 ">

						      <label>Patient Name</label>
						      <input type="text" name="pname" class="form-control" placeholder=" Enter patient name"  required=""/> 

							  <label>Aadhar No</label>
						      <input type="text" name="aadhar"class="form-control"  placeholder="Enter Aadhar" maxlength="12" minlength="12" required=""/>								
																											 
						  </div>
						
							   <div class="form-group col- xs-12 col-sm-6 col-md-6 col-lg-6 ">

							        <label>Father</label>
						      		<input type="text" name="father" class="form-control"  placeholder="Enter father"  required=""/>								

								  <label>Email</label>
							      <input type="email" name="email" class="form-control"  placeholder="Enter Email"  required=""/>
												
									<?php    			
										if(isset($_GET['error1'])){
			                           echo $_GET['error1'];
										} 			?>
                                          
							    </div>    
						</div>
                       							  
			<div class="form-row font-16">

				    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-5 ">

				       <label>DOB</label>
				       <input type="date" name="dob" class="form-control">
				    </div>

				    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">

					      <label>Choose Gender</label>
					      <select class="form-control" name="gender"  required=""/>
					        <option selected>Choose...</option>
					        <option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
					      </select> 
				    </div>

																	    
				    <div class="form-group col-xs-12 col-sm-12 col-md-2 col-lg-3">

				      <label>Mobile</label>
				      <input type="tel" name="mobile"  placeholder="Enter Mobile"  class="form-control "  maxlength="10" minlength="10" required="">
				    </div> 



					<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

				      <label>Photo</label>
				      <input type="file" name="image" class="form-control" placeholder="choose file"  accept=".png,.jpeg,.jpg"  required=""/>   

				    </div> 


					<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

				      <label>Address</label>
				      <input type="text" name="address" class="form-control" placeholder=" Enter Address"  required=""/>   

				    </div> 	     


				  <div class="form-group">
				    <div class="form-check ml-20 ">
				      <input type="checkbox" name="check"class="form-check-input "  >
				      <label> Check this all right </label>
				    </div>
				  </div>
                          
			  <button type="submit" name="submit"class=" ml-20 btn btn-primary">Registrater Now </button>


						<?php

						



						?>







			</form>  


		 </div>
	   </div>

    </div>
</section>
</body>


<?php

	include "footer.php";
?>


</html>




