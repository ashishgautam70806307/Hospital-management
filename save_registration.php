 <?php session_start();?>
<?php include "db_connection.php";?>
    
 	    
<?php
 
  if(isset($_POST['submit']))

  {
	$pname= $_POST['pname']; 
	$father= $_POST['father'];
	$aadhar= $_POST['aadhar'];
	 $email= $_POST['email'];    	
	$dob= $_POST['dob'];
	$gender= $_POST['gender'];
	$mobile= $_POST['mobile'];
	$address= $_POST['address'];    

   // uloded image

	$imgname=$_FILES['image']['name'];
	

	$imgtmp=$_FILES['image']['tmp_name'];

	$uplodepath="uploade_image/";

	  if(!empty($imgname))
	   {

	$newfile= rand().$imgname;


		move_uploaded_file($imgtmp,$uplodepath.$newfile);
				 
	}



   if(	$pname==''||	$father==''|| $aadhar==''|| 	$dob=='' || $email=='' || $gender=='' || $mobile=='' || $address==''){

			 header('location:registration.php?error_null=<h4 style="color:red; text-align:center;"><b> !! Please Enter fill all fields(box)</b>  </h4>');
            
		}

			else{

					$sql="select * from p_registration where email='$email'";
					$sql1="select * from p_registration where aadhar='$aadhar'";

					  $result= mysqli_query($con,$sql);
					  $count= mysqli_num_rows($result);

					  $result1= mysqli_query($con,$sql1);
					  $count1=  mysqli_num_rows($result1);


					//	echo $count1;
					//	echo $count;

					//	 exit;

					if($count!=0)
		             {
						 	 header('location:registration.php?error1=<h5 style="color:red;"><b> Sorry !! Alrady </b>Exit this Email ? plese fill Other Email  </h5>');
		                        						 
						}


					  elseif($count1!=0){

								 header('location:registration.php?error_Aadhar=<h5 style="color:red;"><b> Sorry !! Alrady </b> Exit this Aadhar No ? plese fill Other Aadhar No.  </h5>');
		                        
							}  
		
				  else{                            
						   $sql="insert into p_registration(pname,father,aadhar,email,dob,gender,mobile,address,image) 
		
						values('{$pname}','{$father}','{$aadhar}','{$email}','{$dob}','{$gender}','{$mobile}','{$address}','{$newfile}')";
							                
		
				        $result= mysqli_query($con,$sql);
									
					  header('location:registration.php?error= <h4 style="color:green; text-align:center;"> Send messege Succesfully !</h4>');
				                         
		
		    			}

		}		 
  }

			  else{
						echo "<h5>No inserted any data</h5>"   ;

					}
			


?>
