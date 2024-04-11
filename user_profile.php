<!DOCTYPE html>
<html lang="en">
  <head>


	    <?php session_start();?>
	   
	<?php 
		  if(isset($_SESSION['id']) && isset($_SESSION['email']))
		   {

		?>
		 <?php include "db_connection.php";?>
    
	    <?php include_once("head.php");?>
		<?php include_once("header.php");?>
     
	
	     <link rel="stylesheet" href="css/user_profile.css"/>
	   <link rel="stylesheet" href="css/fontawesom4.css"/>  
     
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href=" images/logo/url-logo.png" rel="icon">   

    <title>user </title>
	  <style>
			
.font-13{
  font-size: 13px;
}


      @media(min-width:320px){

        .form-control{
                        height: 560px !important;


        }
      }



      @media(min-width:576px){

        .form-control{
                        height: 560px !important;


        }
      }



      @media(min-width:768px){

        .form-control{
                        height: 650px !important;


        }
      }

 @media(min-width:992px){

        .form-control{
                        height: 670px !important;


        }
      }



@media(min-width:1200px){

        .form-control{
                        height: 470px !important;


        }
      }




	 </style>
  </head>

  <body>

        <section class="user-page mt-40" >
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class="color-r font-w"><i class="fas fa-user-md"></i>  Pati</span><span class="color-blu">ent Profile</span></h1>

          <div class="row placeholders">
        
		<h4 class="tp ">!! Appointment messege </h4>

		      

			<?php    
								   $sql=" SELECT * FROM  p_registration where id=' ".$_GET['id']." ' ";
								 			
								   $result=mysqli_query($con , $sql);
								   
								if(mysqli_num_rows($result)>0)
									 {
							     
									$row= mysqli_fetch_assoc($result)
							 
				?>			 				


<!-- ****************             start form of User profile   ******************************* -->

<div class="container mt-20">
    <div class="main-body">
                                  
          <div class="row gutters-sm ">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body1 ">
                  <div class="d-flex flex-column align-items-center text-center  Circle mt-20">
                   
							 <?php
										 // this query is run to show image in database table.
                                  	if(!empty($row['image'])){  ?>
                                     	<a href="uploade_image/<?php echo $row['image']; ?>" target="_blank" >
                      				    <img src="../uploade_image/<?php echo $row['image']; ?>" alt="pic" class="patien-img" style="border-radius: 103px;" width="120" height="120">
                        				</a>
									
									 <?php }   ?>


					<div class="mt-20 text-center ">
                      <h4> Mr/Mrs : <?php echo $row['pname'];?></h4>
   
						<h6 class="mt-20 text-center" >The Activated on Social media that requet follow this links</h6>

			 
					<div class=" row mt-20">					   
					  <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-info">Message</button>     
                    </div>
				 </div>

    <br>
              <div class="card1 mt-3">   
                <ul class="list-group list-group-flush" id="links">
                         
               <li><a href="https://web.whatsapp.com/"><span class="fa fa-whatsapp fa-2x"></span></a></li>
			    <li><a href="#"><i class="fa fa-facebook fa-2x "></i>  </a></li>
				 <li><a href="#"><i class="fa fa-youtube fa-2x"></i> </a></li>  			  
				 <li><a href="#"><i class="fa fa-twitter fa-2x"></i> </a></li>

                </ul>
              </div>
           
    </div> 
 </div>
 </div>
</div>
           
		<div  class="form-control" >
		<form action="update_user" method="POST">

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">

                  <div class="row">
                    <div class=" mt-16 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                      <h5>Patient Id :<span class="color-r ml-20"><?php echo $row['id'];?></span> </h5>
                    </div>

                

                <div class=" mt-16  col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <h5>Patient Name : <span class="color-r ml-20 font-13"><?php echo $row['pname'];?></span></h5>
                </div>
               </div>
               <hr>   












               <div class="row">
                    <div class=" mt-16 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                      <h5>Father Name :<span class="color-r ml-20 font-13 "><?php echo $row['father'];?></span> </h5>
                    </div>

                  
                <div class=" mt-16  col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <h5>Aadhar Id : <span class="color-r ml-20  font-13"><?php echo $row['aadhar'];?></span></h5>
                </div>
               </div>
               <hr>   


                <div class="row">
                    <div class=" mt-16 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                      <h5>Date of birth :<span class="color-r ml-20 font-13 "><?php echo $row['dob'];?></span> </h5>
                    </div>

                  
                <div class=" mt-16  col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <h5>Aadhar Id : <span class="color-r ml-20  font-13"><?php echo $row['gender'];?></span></h5>
                </div>
               </div>
               <hr>   


             
                <div class="row">
                    <div class=" mt-16 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                      <h5>Mobile No :<span class="color-r ml-20 font-13 "><?php echo $row['mobile'];?></span> </h5>
                    </div>

                  
                <div class=" mt-16  col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <h5>Address : <span class="color-r ml-20  font-13"><?php echo $row['address'];?></span></h5>
                </div>
               </div>
               <hr>   



                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info"   href="edit_user.php?id=<?php echo $row['id']; ?>" >Edit Profile</a>
                    </div><br>
                  </div>
                </div>
              </div>


		  </form>
			</div>
            </div>
          </div>

        </div>
    </div>



						  
						   <?php
							 } else{
									 echo "<h3> !! Sorry </h3>";

								}

							   ?>

			
      </div>
    </div>

			    <?php
							 }

			?>
  </body>
</html>

