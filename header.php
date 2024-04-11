<?php
include("head.php");
 
?>

   <html>
		<head>

			<link rel="stylesheet" href="css/style.css">

				<link rel="stylesheet" href="css/media_query.css">




			<style>     

					 .fa-home{
								color:white;

							}


					  .topbar1{
										 background-color: skyblue;
								}




				  .appint{
							       background-color: #fffe00;
								    color: #e50c0c;
								    padding: 12px 27px 11px 16px;
								    font-size: 20px;
								    font-weight: 700;
								    text-transform: uppercase;
								    border-radius: 2px;
									
							}

					 .appint:hover{
									  background-color: white;
								 color:red;
								 cursor:pointer;
								border-radius:3px;

								}
                      



			</style>




		 </head>                                     	
	<!--
	  <section class="topbar">
		     <div class="container-flued"> 
	        	<div  class="row">
					 <div class="col-sm-12 text-center d-flex">

							    <div class=" head-img col-xs-12 col-sm-7 col-md-4 col-lg-4  mt-10 home-logo"> <img src="image/heart-care-logo-1.png" alt="no logo"/></div> 

							   <div class="head-phone col-xs-12 col-sm-5 col-md-4 col-lg-3 mt-10"><i class="fa fa-phone"></i><span class="textspan"> 32452</span>  <i class="fa fa-3x fa-ambulance"></i>  </div>                                
			                   
							    <div class="head-button col-xs-12 col-sm-12 col-md-4 col-lg-5 mt-10">

											<div class="mt-20 loginlinks">
											 	  <a class="active" href="index.php#appoinment">APPOITMENT NOW</a>
											 	  <a href="login.php">ADMIN LOGIN</a>
											  </div> 

								</div>
							      

			        </div>  
			    </div> 
			 </div> 
		 </section>

	   -->            





		<section class="topbar1">
		     <div class="container"> 
	        	<div  class="row">
					 <div class="col-sm-12 text-center ">

							    <div class="text-center  head-img col-xs-8 col-sm-6 col-md-3 col-lg-6 mt-10 home-logo"> 
											
							<p><b><i class="fa fa-envelope "></i> Unix9001@gmail.com</b></p>
			
							 </div> 

							   <div class="head-phone col-xs-4 col-sm-6 col-md-3 col-lg-3 mt-10"> <p> <i class="fa fa-phone"> </i> <span class="textspan "><b> To : <a href="tel: +91 4533234380" >+91 4533234380</a> </b>  </span></p> </div>                                
			                   
							    <div class="head-button col-xs-12 col-sm-12 col-md-6 col-lg-3 mt-10">

											<div class="loginlinks">  											 	 
											 	  <a href="login.php">ADMIN LOGIN</a>
											  </div> 

								</div>
							      

			        </div>  
			    </div> 
			 </div> 
		 </section>







			<section class="menubar"> 
			   <div class="container-fluid"> 
					<div  class="row">
					 <div class="col-sm-12"> 

												  	
							  
						      <div class="col-sm-10 col-md-10 col-lg-10 navbar ">


							 <!-- start mobile screen device-->

							<!--	  <input type="checkbox" id="check">               
							  
					         <label for="check" class="checkbtn" ><i class="fa fa-bars"> </i> </label> 
							

                            ******* id ki value for 'mr aa gyi        ************ -->


  
									
										 <lu>
											  <a href="registration.php"><li> <i class="fa fa-bed" style="font-size:20px"></i> PATIENT </li></a>											 
											<a href="aboutus.php"><li>ABOUT US</li></a>
											<a href="contactus.php"> <li>CONTACT US </li></a>
											 <a href="gallery.php"><li>GALLERY </li></a>
											<a href="index.php"><li><i class="fa fa-home" style="color:white;"> </i> HOME </li></a>
											

										 </lu>
							 </div>



							     <div class="col-sm-2 col-md-2 col-lg-2 navbarappoinment ">

								   <span class="appint"> <a href="index.php#appoinment">Appointment</a></span>
								 </div>






					  </div> 

			   </div>  

		 </section>







    <section class="mobile-header ">
  
      <?php 
				include("mobile_header.php"); 

		?>
    </section>











	</html>





