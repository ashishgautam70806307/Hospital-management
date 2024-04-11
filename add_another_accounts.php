<!DOCTYPE html>
<html lang="en">
<head>
     
            <?php 
         
                           
             session_start(); 
             include("head.php");

    if(isset($_SESSION['id']) && isset($_SESSION['email']))
   {
             

?>


    <link rel="stylesheet" href="css/bootstrap3.css">
                    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>admin account</title>
    <link rel="stylesheet" href="style.css">
   <link href=" images/logo/url-logo.png" rel="icon">   


     <style>

        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}



body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('banner.jpg');
    background-size: cover;
    background-position: center;
}



.wrapper{
    margin-top: 1px;
    position: relative;
    width: 400px;
    height:490px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
   /* overflow: hidden;*/
}

.wrapper  .from-box{
    width: 100%;
    padding: 40px;
}

.wrapper .from-box.login {
    display: none;
}

.wrapper .icon-close{
    position: absolute;
    top: 0;
    right: 0;
    width: 45px;
    height: 45px;
    background: #162938;
    font-size: 2em;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom-left-radius: 20px;
    cursor: pointer;
    z-index: 1;
    
 
}

.from-box h2{
    font-size: 2em;
    color: #162938;
    text-align:center;
}

.input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #162938;
    margin: 30px 0;
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #162938;
    font-size: 500;
    font-weight: none;
    transition: .5s;
}

.input-box input:focus~label,
.input-box input:valid~label{
    top:-5px;
}

.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #162938;
    font-weight: 600;

}

.input-box .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color: #162938;
    line-height: 57px;
}

.remember-forgot{
    font-size: .9em;
    font-weight: 500;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;
}

.remember-forgot label input {
    accent-color: #162938;
    margin-right: 3px;
}

.remember-forgot a{
    color:#162938;
    text-decoration:none;
}

.remember-forgot a:hover {
    text-decoration: underline;
}

.btn{
    width: 100%;
    height: 45px;
    background:#162938;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500;
}

.login-register p a {
    color: #162938;
    text-decoration: none;
    font-weight: 600;
}

.login-register p a:hover{
    text-decoration:underline;
}


     </style>


</head>
<body>
    

        <div class="wrapper">
       <a href="index.php">  <span class="icon-close"><ion-icon name="close"></ion-icon>  </span> </a>        
        <div class="from-box register">

            

                     


            <h3 class="text-center"> <b>New Login Registration</b></h3>

                  <?php 
                            if(isset($_GET['error_blank'])){
                            echo $_GET['error_blank'];
                            } 
                ?>

                 


            <form action="save_add_another_account.php" method="POST">
                <div class="input-box"> <span class="icon"><ion-icon name="person"> </ion-icon></span>

                     <input type="text" name="username" required=''/>         
                     <label>Admin of Username</label>
                 </div>  
         
            <div class="input-box"><span class="icon"><ion-icon  name="mail"></ion-icon></span>
              <input type="email" name="email"  required="">         
              <label>Email</label>
                 </div>
                 <div class="input-box"><spin class="icon"><ion-icon  name="lock"></ion-icon></spin>
                      <input type="password" name="password" required="">         
                      <label>Password</label>
                  </div>
                  <div class="remember-forgot">  <label><input type="checkbox">this terms agree to user  </label>
                     <a href="index.php">Back Login</a>
                  </div>

                  <input type="submit" name="submit"  value="Login Registered" class="btn btn-primary"/>
                 <div class="login-register">

                       <!--  <p>Don't have an account?<a href="#" class="register-link">Register</a></p> -->
               </div>     


                   
                            <?php
                                    if(@$_SESSION['msg'])
                                    {
                                      echo $_SESSION['msg'];

                                      $_SESSION['msg']='';
                                    }

                                  ?>

                                                                    
            </form>
         </div>  

    </div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


<?php } ?>


</body>
</html>

