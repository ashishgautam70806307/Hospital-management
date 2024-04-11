<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>

        body {
            font-family: "Poppins", sans-serif;   
        }


	   .p-0{
				  	padding: 0px;

		}



		.header-bg{
					 	background: linear-gradient(91deg,rgb(157 22 22),rgb(57 33 133));
								  

				}
        .textColor {
            color: #030F27;
        }

        .navbarBgDark {
            background: #030F27;
        }

        .navbar-nav .nav-link.active {
            color: #EDA72F;
        }

        .nav-link:hover {
            color: #EDA72F;
        }

        .nav-link {
            color: #fff;
        }

        .getBtn {
            color: #fff;
        }

        .sideLine {
            border-right: 1px solid #030F27;
        }

        .iconHeight {
            height: 24px;
            width: 24px;
        }

        @media screen and (min-width: 992px) {
            .sideLine {
                border-right: none;
            }

            .iconHeight {
                height: 46px;
                width: 46px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="container-fluid p-0">
            <div class="  header-bg">
               
                <div class="navbarBgDark" data-bs-theme="dark">
                    <nav class="navbar  header-bg navbar-expand-lg justify-content-center justify-content-lg-between p-0">

                        <button class="navbar-toggler m-3 w-100" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          <b> Click Menu</b>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                            <ul class="navbar-nav text-uppercase ps-3">
                                <li class="nav-item">
                                 <a class="nav-link active pe-3" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-lg-3" href="aboutus.php">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-lg-3" href="gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-lg-3" href="contactus.php">Contact us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-lg-3" href="registration.php">Patient</a>
                                </li>

                              <!--  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle px-lg-3" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                        -->
                                
                            </ul>
                            <div class="text-white m-1 p-3">
                                <form class="d-flex">
								        <input class="form-control me-2" type="search" placeholder="Search Items" aria-label="Search">
								        <button class="btn btn-warning" type="submit">Search</button>
								      </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




</body>

</html>