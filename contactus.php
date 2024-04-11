<html>
	   <head>       

				    <!--   titel & url pe jo image show ho rhi hai         -->   

			  <link href=" image/url-logo.png" rel="icon">   



			  <?php
					include("head.php"); 
					include("header.php"); 

					?>
					 	<link rel="stylesheet" href="css/bootstrap3.css">
					
					<link rel="stylesheet" href="css/bootstrap3_icon.css">

					 <link rel="stylesheet" href="css/style.css">

					  <link rel="stylesheet" href="css/media_query.css.css">



				 <title>Contact us</title>
			 
		
			 <style>

					   .pt-20{
							    padding-top:20px;
							}

				 .contact{
							 	height:590px;

							}




					.contacts-form{

									height:420px !important;
									background-color:#f5f5f6;

									}
				   

	.contacts-form   h3{
						 background: linear-gradient(91deg,rgb(157 22 22),rgb(57 33 133));
					    border-radius: 9px;
					    padding: 20px 0px;
						color:white;
						text-align:center;
						
					  }


		   .contacts-map{
									height:420px;
									background-color:#f0f8ff3d;
									padding;0px 30px;
								    border-radius: 14px;


						}



			 @media(min-width:320px)
			{
					 .contact{
									   	height:1050px;
										width:100%;
							   }


				  .contact .contact-form{
										  width:100%;
										  height:530px;
										  margin-top:10px;;
										background-color:red;


						}


			.contact .col-xs-12
									 {


										margin-top:30px
								}

		
	  }

                                

		   	 @media(min-width:768px)
			{
					 .contact{
									   	height:1000px;
										width:100%;
							   }


				  .contact .contact-form{
										  width:100%;
										  height:530px;
										  margin-top:10px;;
										background-color:red;


						}


			
	  }


		  
		   	 @media(min-width:992px)
			{
					 .contact{
									   	height:620px;
										width:100%;
							   }


				  .contact .contact-form{
										  width:100%;
										  height:530px;
										  margin-top:10px;;
										background-color:red;


						}


			
	  }
                   			

                                       
			 </style>   

	   </head>

<body>        

  <section class="contact mt-40">   
							 <h2 class=" pt-20 text-center color-r font-bold "><span class="welcom">|</span> <span class="color-r "> Our <span class="welcom-H"> Contact Us </span> </span> </h2>
								       

   <div class="container mt-20"> 
		<div  class="row ">                
		 <div class="col-sm-12"> 

			<div class="contact-forms col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
			  <div class="row">
				  <div class="contacts-form form-control">

					 <form action="save_contact_us.php"  method="POST" >

						   <h3><b>Contact now</b> </h3>

					   <div class=" mt-40">					

						<div class="  col-sm-12 col-md-6 col-lg-6 form-group"> 							
							<input type="text" name="name" class="form-control" placeholder="Enter Name" required="">                                				
						</div>

						<div class=" col-sm-12 col-md-6 col-lg-6 form-group"> 							
							<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile"  maxlength="10" minlength="10" required="">                                				
						</div>



						 <div class=" col-sm-12 col-md-12 col-lg-12 form-group"> 							
							<input type="text" name="subject" class="form-control" placeholder="Enter Subject" required="">                                				
						</div>


						 <div class=" col-sm-12 col-md-12 col-lg-12 form-group"> 							
						<textarea type="text" name="messege"class="form-control" rows="3" placeholder="Messege" required=""></textarea>
						                     				
						</div>

						  <button type="submit" name="submit"  class=" ml-20 btn btn-primary"/> Send <i class="fa fa-send-o"></i></button>

					  	</div>
											<br>

								 <?php   
								
									if(isset($_GET['error']))
									   {
										  echo $_GET['error'];
										}
										     

								?>





					 </form>

				  </div>
			  </div>
			</div>



			 <div class=" contact-maps  col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
			  <div class="row">

						  <div class="contacts-map ">

												  
								               <div class="bfs-location text-center">
								                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.2323439026627!2d82.71010321440028!3d25.762888114840482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39903a203d763cef%3A0x1349c25340f76474!2sUNIX+INSTITUTE!5e0!3m2!1sen!2sin!4v1520415586631" width="360" height="390" frameborder="0" style="border:0" allowfullscreen=""></iframe>
								                        </div> 												   
											   </div>                      
					

						  </div>
			  </div>
			</div>



		 </div>
		</div>
    </div>
</section>
</body>


<?php

	include "footer.php";
?>


</html>




