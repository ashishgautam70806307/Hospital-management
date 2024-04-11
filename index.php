 
	<html>
	   <head>

			  <?php
					include("head.php"); 
					 include("header.php"); 
					
			?> 

		<link rel="stylesheet" href="css/bootstrap3.css">
		
		<link rel="stylesheet" href="css/bootstrap3_icon.css">

		 <link rel="stylesheet" href="css/style.css">

		  <link rel="stylesheet" href="css/media_query.css.css">

		 <title>Hospital</title>  			 
		
	</head>

<body>

	   <!-- start Banner section home page or index page -->

		<section class="banner mt-m-20 " id="loder-gif">
			   <div class="container"> 
					<div  class="row">
					 <div class="col-sm-12"> 
						      <div class="col-sm-12 col-md-6 col-lg-6">

								  <h3 class="color-r mt-40"><i class="fas fa-map-marker-alt"></i> India noida sector 63  </h3>
						 
								  <h1 class="color-b mt-40"><span class="welcom">|</span> <span class="welcom-H"> <i class="fa fa-hospital-o" aria-hidden="true"></i>  <link href=" image/url-logo.png" rel="icon">    Welcome to Unix Hospital</span>  </h1>
						 
								
								  <div class="drowp-down-banner">
									   
									   <ul>
											<li><i class="fa fa-angle-double-right"></i> Best services provide  </li>
											<li><i class="fa fa-angle-double-right"></i> Best recored in opration Thoracoscopy  </li>
											<li><i class="fa fa-angle-double-right"></i> Bronchoscopy</li>
											<li><i class="fa fa-angle-double-right"></i> Emergency Room dail toll free: 23423  </li>


												<div class=" pt-20 loginlinks font-w-n "> 											 	 
											 	  <a href="login.php">Know more</a>
											  </div> 
																    

									    </ul>

								  </div>


							  </div>
						      
					  </div> 

			   </div>  

		 </section>
                   
	 <!-- end Banner section home page or index page -->

                        
	 <!-- start about us section home page or index page -->


			 <section class="about-us mt-40">
			   <div class="container"> 
					<div  class="row">
					 <div class="col-sm-12"> 

								   
							   <div class=" about-text col-sm-12 col-md-7 col-lg-7 text-justify">  
								 
								   <h2 class="color-r font-bold "><span class="welcom">|</span> <span class="welcom-H"> The <span class="color-r"> Unix Hospital </span>  Noida Sector 63</span>   </h2>
										 
										<p><span class="welcom-H color-red"> The building trusted website online sector </p>
										<p>	<i class="fas fa-map-marker-alt"></i> noida sector 63 </span></p>

									<p class="mt-20 ">
										Requirements. Unix Hospital appeared in 2015, and in 2016, the organization was framed into a legitimate company. 
										In any case, it effectively began filling in as a completely incorporated drug organization in 2014.

									</p>


										<p class="mt-20 ">
										requirements. Seamus Pharma appeared in 2015, and in 2016, the organization was framed into a legitimate company. 
										In any case, it effectively began filling in as a completely incorporated drug organization in 2014.

									</p>
								

										
							   </div>


						      <div class=" about-image-main col-sm-12 col-md-5 col-lg-5"> 
									   <div class="about-image mt-30">
										 <img src="image/unix.jpg" alt="no logo">
							</div>      </div>
						      
					  </div> 

			   </div>  

		 </section>

                    
	 <!-- end about us section home page or index page -->
                                    

	 	 <!--*************************         start appoinment   section home page or index page  *********************     -->
            

<section class="appoinment "id= "appoinment">
<div class="container"> 
	<div  class="row">
	 <div class="col-sm-12 mt-40">
		 
	            <div class="appoinment-text col-sm-12 col-md-5 col-lg-5"> 
				   
					     <h2 class="color-r ml-20"><span class="welcom">|</span> <span class="welcom-H"> APPOINTMENT  <span class="color-r"> <i class="fa fa-address-book-o"></i> BOOKING</span></span>  </h2>


						  	<p class="ml-20 mt-20 ">
								Requirements. Unix Hospital appeared in 2015, and in 2016, the organization was framed into a legitimate company. 
								In any case, it effectively began filling in as a completely incorporated drug organization in 2014.

							</p>

								<p class="ml-20 mt-20 ">
								The organization was framed into a legitimate company. 
								In any case, it effectively began filling in as a completely incorporated drug organization in 2014.

							</p>


	        	</div>







			   <div class="appoinment-form col-sm-12 col-md-7 col-lg-7 text-justify">  
				                
											
					<form action="save_appointment.php" method="POST" class="form-control control_form mt-20">

						  <div class="name_reg"><h2><i class="fa fa-address-book-o"></i> APPOINTMENT</h2></div>

						 <div class="form-group mt-60"> 	
						
							 <input type="text" name="name" class="form-control input"  placeholder="Enter Name" required="">

						    <input type="email" name="email"class="form-control input"   placeholder="Enter Email" required="">

							 <input type="text" name="mobile" class="form-control input"  placeholder="Enter Mobile" maxlength="10" minlenght="10" required=""/>

						     <select name="gender" class="form-control input">
								<option value="">choose gender</option>
								<option value="male">male </option>
								 <option value="female">female</option>
								 <option value="other">other</option>


							 </select>


						  <textarea type="text" name="messege" class="form-control input" rows="3" placeholder="Messege" required=""></textarea>
							
						  </div>
								


						  <input type="submit" value="Sand" name="submit" class=" mt-20 btn btn-primary button" />

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

</section>




	  <!--*************************         end appoinment  section home page or index page  *********************     -->










	    <!--*************************         start news & updates   section home page or index page  *********************     -->
																					   

		    <section class="news-updates mt-10">
			   <div class="container"> 
					<div  class="row ">
					 <div class="col-sm-12">
								  <h2 class="color-r ml-20 text-center"> News & Updates <img src="image/news.gif" alf="no gif "> </h2>

							            		

									     

										<div class="news-box col-xs-12 col-sm-6 col-md-3 col-lg-3">
											<div class="free-eye news-hover font-math"> 
												<h3 class="ml-20 p-10"><i class="fa fa-eye"></i> Free Eye	</h3>
												<p class="plr-10">
													
													check the Free eye 70th years old ! plese take appointments.  
												</p>
										      </div>
  				        	    		   </div>







										<div class=" news-box col-xs-12 col-sm-6 col-md-3 col-lg-3">
											<div class="stethoscope news-hover font-math"> 
												<h3 class="ml-20 p-10"><i class="fa fa-stethoscope"></i> Stethoscope	</h3>
												<p class="plr-10">
													
													check the Stethoscope! plese take appointments.  
												</p>
										      </div>
  				        	    		   </div>






										  <div class="news-box col-xs-12 col-sm-6 col-md-3 col-lg-3">
											<div class="ambulance news-hover font-math"> 
												<h3 class="ml-20 p-10"><i class="fa fa-ambulance"></i> Help Us ?	</h3>
												<p class="plr-10">
													
													Help! the dail toll  free No: 1019 for delivery pecent.   
												</p>
										      </div>
  				        	    		   </div>
                                       


									    <div class=" news-box col-xs-12 col-sm-6 col-md-3 col-lg-3"> 

											<div class="heart-Care news-hover font-math"> 
												<h3 class="ml-20 p-10"><i class="fa fa-heartbeat"></i> heart Care	</h3>
												<p class="plr-10">

													   	Help! check Heart beat & treatmets less amount.  
												</p>
										   </div>
  				        	    		</div>
                                            


                               						      
					  </div> 

			   </div>  

		 </section>

         


	  <!--*************************         end news & updates section home page or index page  *********************     -->
                                           

                                          
	                  
	 <!--*************************         start about docter  section home page or index page  *********************     -->
                                        

		   <section class="about-docter mt-40">

				<h2 class="color-r mt-40 text-center"><span class="welcom">|</span> <span class="welcom-H">Docter Messege</span>  </h2>


			   <div class="container"> 
					<div  class="row ">

					 <div class="col-sm-12 box-docter"> 

								  


								 
							            <div class=" about-docter-image col-sm-12 col-md-5 col-lg-5"> 
										   <div class="about-image text-center">
											 <img src="image/docter.png" alt="no logo">
										   </div>      
							        	</div>


													




							   <div class=" about-docter-text col-sm-12 col-md-7 col-lg-7 text-justify">  
								                
									<p class="mt-20 ">

									<span class=" color-r">	|Dr Pratima singh (MBBS, MS ,General physiclogy) </span>is having vast experience in treating complicated respiratory 
										diseases, tuberculosis Interstitial lung diseases pleural diseases and sleep disorders, Doing Diagnostic and therapeutic, 
										Bronchoscopy, Biopsies, Pleurodesis & other pleural interventions and sleep studies. He has also completed "National course on 
										educational science for health professinal" of national teacher's training center, ministry of health govt of India. He was coguide 
										for post 
										graduate research projects related to Interstitial preumonitis & DLCO in COPD.
								</p>


										<p class="mt-20 ">
										the  extensive experience, Dr promod is the most trustworthy and recognized doctor in 
										Pulmonology field. He has established “Unix Hospital in Lucknow” which is the advanced respiratory set-up in Lucknow. Dr parmode Chaubey has
										 a huge experience in handling all types of complicated respiratory ailments along with other chest related procedures with high success rate.
										</p>


									   	<p class="mt-20 ">
									 	 Always Preferred experienced doctor for treatment related to all kinds of chest diseases, lung diseases, and respiratory diseases. Dr Y N 
										Chaubey aims to provide the best of medical treatment and care to all his patients.
								
									</p>




								
										  <p>	<span class="welcom-H color-red  float-right">Dr: Pratima singh</span></p>

										
							   </div>





						      
					  </div> 

			   </div>  

		 </section>

         


	  <!--*************************         end about docter  section home page or index page  *********************     -->


		   <?php

			  include"footer.php";

				?>





</div>




	</body>
	</html>









