<!-- sign up page to check if the user has already registerd by jie meng -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="team16">
    <meta name="date" content="2022-07-10">
    <!-- add icon -->
    <link rel="icon" href="images/robot.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="signupnew.css" rel="stylesheet">
    <!-- form validation script <script defer src="signupNew.js"></script>-->
     
    <title>Signup page</title>
</head>

<body>

    <!-- <?php include "headerEm.php" ?> -->

    <?php
    
    require_once('database.php');

    $db = db_connect();

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = $_POST['username'] ;
        $email = $_POST['email'] ;
        $password = $_POST['password'];

        $sql = "Select * from users WHERE email='$email' AND password ='$password' ";     

        $result = mysqli_query($db, $sql);   

        $num = mysqli_num_rows($result); 

        if($num==1){

            header("Location: ../Assignment2/index.html");

        }else{
            echo "<div class='form'>
                    <h3 style='color:red; text-align: center;'>Incorrect Username/password.</h3>
                    <p class='link' style='color:red; text-align: center;'>Click here to <a href='signup.php'>Login</a> again.</p>
                    </div>";
        }





    }

    ?>
    <br>
    <br>
    <br>


<main class="form-signin w-100 m-auto">
    <form action="signup.php"  method="post"  onsubmit="validate();">
        <h1>Sign up to our new releases</h1>

        <div class="textfield">
            <input type="text"  name="username" class="form" id="form-top-username" placeholder="username">
            <small>Error Message</small>
            <input type="email" name="email" class="form" id="form-mid-email"  placeholder="email">
            <small>Error Message</small>
            <input type="password" name="password" class="form" id="form-bot-password" placeholder="password">
            <small>Error Message</small>
        </div>

        <button class="signupBtn" type="submit">Sign Up!</button>
        <button class="signupBtn" type="submit"> <a class="action" href="new.php" >Create A New User</a> </button>
        <p class="signupCopy">&copy; 2022 IMDB All Rights Reserved</p>
    </form>
</main>
    
</body>

</html>