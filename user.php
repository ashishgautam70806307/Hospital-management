<!DOCTYPE html>
<html lang="en">
  <head>


	        
	<?php 
					session_start();


		  if(isset($_SESSION['id']) && isset($_SESSION['email']))
		   {
	
		 include "db_connection.php";
     include_once("head.php");
		 include_once("header.php");
     
	?>


	     <link rel="stylesheet" href="css/user_profile.css"/>
	   <link rel="stylesheet" href="css/fontawesom4.css"/>  
     
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href=" images/logo/url-logo.png" rel="icon">   

    <title>user </title>
	  <style>
			.radius-6{
					   border-radius:8px;

					}

			 .ml-40{

					 margin-left:70px;
				}
			  .float-l{

					   float-left;
				}

			 .follow-btn{
						      margin-top: 94px;
						      padding-top: 50px;
						     text-align: center;

						}
		   .justify{
					 text-align:justify;

					}


				.card1 {
						    padding-top: 17px;
						    height: 69px;
						    background: #ffecd3c7;
						    margin-top: 16px;
						}


				  #links {
    display: flex;
    line-height: 20px;
    letter-spacing: 15px;
    position: relative;
    left: 99px;
    /* background: aliceblue; */
    position: absolute;
    left: 183px;
}









	 </style>
  </head>

  <body>



		
			<?php      
					  		 
						 if(isset($_SESSION['id']) && isset($_SESSION['email']))

		  					 {
								  
								   $sql="select * from login where email='".$_SESSION['email']."' ";
							
								   $result=mysqli_query($con , $sql);
								   
								if(mysqli_num_rows($result)>0)
									 {
							     
							while($row= mysqli_fetch_assoc($result)){
							 
				?>




      <section class="user-page mt-40" >
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class="color-r font-w"><i class="fas fa-user-md"></i> Admin</span><span class="color-blu">-Member</span></h1>

          <div class="row placeholders">
        
		<h4 class="tp "><?php  //echo $unix; ?> !! Admin own Profile </h4> 

											<?php 
												if(@$_SESSION['delete_admin'])
												{
													echo $_SESSION['delete_admin'];

												// OR	unset($_SESSION['delete_admin']); OR

												$_SESSION['delete_admin']='';


												}


										?>





<!-- ****************             start form of User profile   ******************************* -->

<div class="row mt-20">
                                 
          <div class="row gutters-sm radius-6">
            <div class="col-md-6 mb-3  ">
              <div class="card">
                <div class="card-body1 ">
                  <div class="d-flex flex-column align-items-center text-center  Circle mt-20">
                   
						<a href="uploade_image/admin_logo/dmin_pic.png" target="_blank" >

      				    <img src="../uploade_image/admin_pic.png" alt="pic" class="patien-img" style="border-radius: 103px;" width="120" height="120">
        				</a>  									
									

					<div class="mt-20 text-center ">  
					   <div classs="row"> 
								<div class="col-xs-4 col-sm-4 col-md-4 col-md-4 col-lg-4">
		
									    <h5> User Name :  </h5>
				   
				             <h5> Email :    </h5>
				   
									   <h5> Password :   </h5>
		
								</div>

								<div class="col-xs-8 col-sm-8 col-md-8 col-md-4 col-lg-8 ">
										<h6 class="color-r justify">	 <?php echo $row['username'];?>	</h6>
										<h6 class="color-r justify">	 <?php echo $row['email'];?>	</h6>
										<h6 class="color-r justify">	 <?php echo $row['password'];?>	</h6>
									
							   	</div>     

						</div>
					</div>

					<div class=" row follow-btn">							
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
                 
						 
						   <?php  	 } }

							 } else{
									 echo "<h4> !! Sorry </h4>";

								}

							   ?>

			
      </div>
    </div>


<?php


  if($_SESSION['email']==="unix123@gmail.com"){




                      $sql=" SELECT * FROM  login";
                      
                   $result=mysqli_query($con , $sql);
                   
                if(mysqli_num_rows($result)>0)
                   {
     ?>              	



<div class="  table text-center  mt-20">

          <table   cellspacing="5px" cellpadding="10px" width="100%" class=" font-16 table table-hover   table-responsive">

            <thead>
              <tr>
                <th> Id</th>
                <th>email</th>
                <th>Password</th>
                <th>Delete</th>

            </tr>
               
            </thead>
                <tbody>      
                    <tr>  

                  <?php         
                   
              while($row= mysqli_fetch_assoc($result))
                {     
            ?>

                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['password'];?></td>


                      <td> <a href="delete_admin.php?id= <?php echo ($row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm(' !! Do you really want to delete Admin recored  ?');"
                    data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i>

               </a></td>
                    </tr>
                 </tbody>

              <?php
							 } 
							 ?>   
                 
            </table> 
            </div>       


					   <?php

			 } 
}
else{

				echo "<i class='fa fa-user-secret fa-2x'></i><p> Another Duplicate Admin Login Here</p>";




}


}

	?>




  </body>
</html>

