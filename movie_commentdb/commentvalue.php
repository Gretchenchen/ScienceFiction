<!-- insert comment data to comments table in assignment2 database by Jie Mengg -->
<script>
    let content=document.getElementsByTagName('textarea')[0].value;;
    let date= "time";
    //new Date().toDateString()
    // document.getElementsByTagName('textarea')[0].value='';

</script>


<?php
//    include("signupdata.php");
//    $db = db_connect();
   
  include("signupdata.php");
    $db = db_connect();
    $username=$name;
  
   
   
//    $date_php =   "<script>document.writeln(date);</script>";
   
  
   if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comment']) ){
   
    
    $content_php =$_POST['msg'];
     $sql = "INSERT INTO `comments`( `username`, `comment`) VALUES ('$username','$content_php ')";
    //  echo $sql;
     $result = mysqli_query($db,$sql);
    //  $num = mysqli_num_rows($result);
    //  echo "alert('success')";
    //  echo '<script> alert("Thank you for your purchase!") </script>';

   }




?>

