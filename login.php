<html>
	   <head>

		<?php 
		 session_start();
		include "header.php";
		
		?>	  



			 	<link rel="stylesheet" href="css/bootstrap3.css">
					
					<link rel="stylesheet" href="css/bootstrap3_icon.css">

					 <link rel="stylesheet" href="css/style.css">

					  <link rel="stylesheet" href="css/media_query.css.css">



  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


			<title>registration</title>
		      
	 <style>    

				 .control_form{
							height:435px !important;
								}

					.input{
							 margin-top:20px;

							}

					.button
						  {
							 width:100%;

						}

				  .mt-60{
							  margin-top:60px;             
							}

				   a:hover{
							 text-decoration:none;
							}


				   .mt-30{
							  margin-top:34px !important;                               
							}

			</style>

		</head>


		<body>
									  <br><br>
					  <section registration-top>     
							<div class="container">
							  <div class="row justify-content-end">
							    <div class="col-sm-12">
							  	   
									  <div class="col-sm-12 col-md-3 col-lg-3"> 
									   </div>
                                                                  
					    <div class="col-sm-12 col-md-6 col-lg-6">
 												
							<form action="save_login.php" method="post" class="form-control control_form">
                                                                       
								  <div class="name_reg"><h2>Admin Login</h2></div>

												 <?php
													  
													if(@$_SESSION['msg'])
													{echo $_SESSION['msg'];		
													   $_SESSION['msg']='';
													}				

													if(@$_SESSION['msg_Incorrect']){
													  echo $_SESSION['msg_Incorrect'];
													  $_SESSION['msg_Incorrect']='';
													}
													?>



										 <div class="form-group mt-60"> 									 
										    <input type="email" name="email" class="form-control input"   placeholder="Enter email" required="">

											 <input type="password" name="password" class="form-control input"  placeholder="Enter Password" required="">
										   	<input type="checkbox" name="check" class=" mt-30  input" > keep me to data
										  </div>
 										
									 		 <input type="submit" value="Sign Up" name="submit" class="btn btn-primary button">

											<p class="text-center input">Need an account? log in</p>
																						
										   <p class="text-center"><a href="#" target="blank">create another account</a></p>

									</form> 									 
									</div>  

									  <div class="col-sm-12 col-md-3 col-lg-3"> 
									   </div>   

					           </div>                            					 

							</div>   
						</div>                  

		</body>

	</html>

