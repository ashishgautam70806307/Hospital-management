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
	
		<?php include "head.php";?>
		<?php include "header.php";?>


	   <link rel="stylesheet" href="css/style_admin.css"/>
	    <link rel="stylesheet" href="css/fontawesom4.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href=" images/logo/url-logo.png" rel="icon">   

    <title>Dashboard </title>  
	

	   <style>


			  .tp{
					text-align: start;
    				padding-left: 20px;
					font-weight: 600;
    				color: #93147ded;

					}


			 .ankertag{
						      background-color: #330a6721;
							    width: 100%;
							    line-height: 32px;
							    border-radius: 2px;
							    font-weight: 700;
							    font-size: 17px;
					}

			  .ankertag a{
						   font-size:17px;
						   font-weight:bold;
						}



			  .placeholders{
							   background-color:#f5f5f5;
							   height:100px; 							   
							   border-radius:7px;
						}

			 .ankertag:hover{
									 background-color:#0a614724;  									 
							}                                     
			   a:hover{
				   text-decoration:none;

				}



	  </style>

  </head>

  <body>

	   <section class="admin-page mt-40" >
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class="color-r font-w"><i class="fa fa-dashboard"></i>  Dash</span><span class="color-blu">board</span></h1>

			<?php 	// this error successfully registered patient
 
										 	if(isset($_GET['error'])){ 
											  echo $_GET['error'];
											}
			

                
									if(@$_SESSION['add_admin'])
									{
									  echo $_SESSION['add_admin'];

									  $_SESSION['add_admin']='';
									}


									
									if(@$_SESSION['update_p'])
									{
									  echo $_SESSION['update_p'];

									  $_SESSION['update_p']='';
									}






									
?>


         <div class="row ">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">

 				<div class="  placeholders">
          			<h3 class="pt-20 tp" ><i class="fa fa-dashboard"></i> Dashboard</h3>
                	<a href="index.php"> <div class="ankertag mt-20 ">  more info <i class="fa fa-angle-double-right"></i>  </div> </a> 
				 </div> 
            </div>


            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">

 				<div class="  placeholders">
          			<h3 class="pt-20 tp" ><i class="fa fa-user"></i> Admin member Profile</h3>
                	<a href="user.php"> <div class="ankertag mt-20 ">  more info <i class="fa fa-angle-double-right"></i>  </div> </a> 
				 </div> 
            </div>



		  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">

 				<div class="  placeholders">
          			<h3 class="pt-20 tp" ><i class="fa fa-users"></i> All Patient</h3>
                	<a href="all_users.php"> <div class="ankertag mt-20 ">  more info <i class="fa fa-angle-double-right"></i>  </div> </a> 
				 </div> 
            </div>





		  
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">

 				<div class="  placeholders">
          			<h3 class="pt-20 tp" ><i class="fa fa-edit"></i> Edit User</h3>
                	<a href='edit_users.php'> <div class="ankertag mt-20 ">  more info <i class="fa fa-angle-double-right"></i>  </div> </a> 
								
	 </div> 
            </div>


		    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">

 				<div class="  placeholders">
          			<h3 class="pt-20 tp" ><i class="fa fa-phone"></i> Contact us</h3>
                	<a href="contactus.php"> <div class="ankertag mt-20 ">  more info <i class="fa fa-angle-double-right"></i>  </div> </a> 
				 </div> 
            </div>



		   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">

 				<div class="  placeholders">
          			<h3 class="pt-20 tp" ><i class="fa fa-book"></i> Appointment us</h3>
                	<a href="appointment.php"> <div class="ankertag mt-20 ">  more info <i class="fa fa-angle-double-right"></i>  </div> </a> 
				 </div> 
            </div>


			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">

 				<div class="  placeholders">
          			<h3 class="pt-20 tp" ><i class="fa fa-sign-out"></i> Logout</h3>
                	<a href="logout.php"> <div class="ankertag mt-20 ">  more info <i class="fa fa-angle-double-right"></i>  </div> </a> 
				 </div> 
            </div>




					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">

		 				<div class="  placeholders">
		          			<h3 class="pt-20 tp" ><i class="fa fa-user-secret"></i> Add Anothe admin</h3>
		                	<a href="add_another_accounts.php"> <div class="ankertag mt-20 ">  more info <i class="fa fa-angle-double-right"></i>  </div> </a> 
						 </div> 
		      </div>





			</div>
          </div>
	   </section>
       
	

				<?php 
					}

					?>







  </body>
</html>

