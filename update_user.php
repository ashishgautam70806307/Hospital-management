<?php  session_start(); ?>

<?php

include "db_connection.php";

  if(isset($_POST['update']))
  {
  
    $id= $_POST['id'];

  $pname= $_POST['pname']; 
  $father= $_POST['father'];
  $aadhar=$_POST['aadhar'];
   $email= $_POST['email'];     
  $dob= $_POST['dob'];        
  $gender= $_POST['gender'];
  $mobile= $_POST['mobile'];
  $address= $_POST['address'];  
  //exit;
  // uloded image
  
  $imgname=$_FILES['image']['name'];
  $imgtmp=$_FILES['image']['tmp_name'];
    $old_img= $_POST['old_img']; 

//echo $old_img;
//exit(); 
if(@$imgname){

        $uplodepath="../uploade_image/";

          if(!empty($imgname))
           {

        $newfile= rand().$imgname;

          //echo $newfile;
          // exit;

         move_uploaded_file($imgtmp,$uplodepath.$newfile);
        
     } 
                
        else{ 
            $_SESSION['msg'] = '<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>Sorry!</strong> Only JPG, JPEG, PNG files are allowed to upload
            </div>';
          echo "<script>window.location = document.referrer;</script>"; 
            exit;
              header('location:edit_user.php');

        }

}
        else{
                $newfile=$old_img;
              }


               $sql="update p_registration set pname= '$pname',father='$father',aadhar='$aadhar',email='$email',dob='$dob',gender='$gender',mobile='$mobile' ,address='$address',image='$newfile' where id='$id'" ;      

                  $result= mysqli_query($con,$sql);
                  
               
                  $_SESSION['update_p']='<div class="alert alert-success"><strong>Success!!</strong> 
                  Patient Updated Recored successfully.</div>';
                                                          
                           
    
                    header('location:index.php');
                
        }

                     

        else{
            echo "<h5>No inserted any data</h5>"   ;

          }
      


?>

