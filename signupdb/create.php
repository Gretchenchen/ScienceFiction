<!-- create a new user and insert the information to the users table in database -->

<?php


require_once('database.php');
// include "headerEm.php" ;
$db = db_connect();

$showAlert = false;  

$showError = false;  

$exists=false;

  // Handle form values sent by new.php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  $name = $_POST['username'] ;
  $email = $_POST['email'] ;
  $password = $_POST['password'];
  $cfpassword = $_POST['cfpassword'];

  
  $sql = "Select * from users where email='$email'";     

  $result = mysqli_query($db, $sql);   

  $num = mysqli_num_rows($result); 

  if($num==0){

    if(($password==$cfpassword) && $exists == false){

      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (username, email, password) VALUES ('$name','$email','$password')";
      $result = mysqli_query($db, $sql);

      // if($result){
        $showAlert = true; 
      // }

    }else{
      $showError = "Passwords do not match each other, please try again";
    }

  }else{
    $exists=true;
  }


  
  if($showAlert) { 

    echo  '<div class="alert-success" > 
             <strong style="color: red;" >Success!</strong> 
              Your account is now created and you can login.  
              <button name ="signup"> <a href="signup.php"> sign up </a> </button>

               
          </div>';  
            //redirect to show page
    // header("Location: signup.php"); 

  }

  if($showError) { 

    echo  ' <div class="alert-fail" > 
             <strong>Error!</strong> '. $showError.'
              
          </div> ';   

  }

  if($exists) { 

    echo  ' <div class="alert-fail" > 
             <strong style="color: red;">email address has alread been used!</strong> 
              
          </div> ';  
          

  }else {
    
    //  header("Location:  signup.php");
}


} 

?>