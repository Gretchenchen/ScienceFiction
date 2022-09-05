<!-- signup page provids username to comment by Jie Mengg  -->
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
  <!--  <script>
        function hideLogin(){
            document.body.style.display:"none";
        }
        document.getElementById('signupBtn').addEventListener('click', hideLogin);
    </script>-->
</head>

<body>
    

<?php session_start();
        include_once("signupdata.php")
 ?>


<main class="form-signin w-100 m-auto">
    <form action="#"  method="post"  onsubmit="validate();">
        <img class="signupImg" src="images/astronut.png" alt="astronut" width="72" height="60">
        <h1>Sign up to our new releases</h1>

        <div class="textfield">
            <input type="text"  name="username" class="form" id="form-top-username" placeholder="username">
            <small>Error Message</small>
            <input type="email" name="email" class="form" id="form-mid-email"  placeholder="email">
            <small>Error Message</small>
            <input type="password" name="password" class="form" id="form-bot-password" placeholder="password">
            <small>Error Message</small>
        </div>

        <button class="signupBtn" type="submit" name="signup">Sign Up!</button>
        <p class="signupCopy">&copy; 2022 IMDB All Rights Reserved</p>
    </form>
</main>
    
</body>

</html>