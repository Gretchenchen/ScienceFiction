<!-- php for singup page to get the username data by Jie Meng -->
<?php
    
    require_once('database.php');

    $db = db_connect();

    


    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])){

        $name = $_POST['username'] ;
        $email = $_POST['email'] ;
        $password = $_POST['password'];

        $sql = "Select * from users WHERE email='$email' AND password ='$password' ";     

        $result = mysqli_query($db, $sql);   

        $num = mysqli_num_rows($result); 

        if($num==1){
            include_once("comment.php");
            // echo "$name";

            header("Location: ../Assignment2/index.html");

        }else{
            echo "<div class='form'>
                    <h3>Incorrect Username/password.</h3><br/>
                    <p class='link'>Click here to <a href='signup.php'>Login</a> again.</p>
                    </div>";
        }





    }else{
        $name="Anonymous";
    }

    ?>