
<?php include_once("head.php");?>
       
<!DOCTYPE html>
<html lang="en">
  <head>
		  


	    <link rel="stylesheet" href="css/style_admin.css"/>  	   
    	<meta name="viewport" content="width=device-width, initial-scale=1"> 

      <link href=" images/logo/url-logo.png" rel="icon">   

    <title>Dashboard </title>

		   <style>

				
		.hoverT  a:hover{
						    color:#88ff05;	

				}
	
	
 
 .color-admin{
			                background: linear-gradient(197deg,rgb(207 19 19),#0e077a,rgb(17 41 96 / 93%)) !important;
    						height: 52px;
				
			  }

	




				
/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #68dfff;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}

			</style>



	
  </head>

  <body>

    <nav class="navbar color-admin navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header hoverT">
          <a class="navbar-brand  color-w  font-b" href="index.php"><i class="fa fa-dashboard "></i> Go Dashboard </a>
        </div>
       </div>
    </nav>

    <div class="container-fluid header-nav">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"><i class="fas fa-user-graduate"> </i> Unix Hospital Management <span class="sr-only">(current)</span></a></li>
			 <li><a href="../index.php"><i class="fa fa-home"></i> Go Home</a></li>			
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dasboard</a></li>
			 <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
		   <li><a href="all_users.php"> <i class="fa fa-users"></i> All Patient</a></li>
			<li><a href="edit_users.php"> <i class="fa fa-edit"></i> Edit user</a></li> 
	 	
			<li><a href="contactus.php"> <i class="fa fa-phone"></i> Contact us</a></li>
			 	<li><a href="appointment.php"> <i class="fa fa-book"></i> Appointment</a></li>
         
			  <li><a href="user.php"><i class="far fa-user-circle"></i> Admin member</a></li>

         <li><a href="add_another_accounts.php"><i class="fa fa-user-secret"></i> Add Another Account</a></li>
            
		 </ul>
                  
        </div>
      </div>
    </div>

    










  </body>
</html>

