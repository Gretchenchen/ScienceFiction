<!-- convert database data to json and disply the results by jie meng -->
<?php
    require_once('database.php');
    $db = db_connect();

    $sql = "SELECT * FROM space";
    $result = mysqli_query($db, $sql);
    
    while($row =  mysqli_fetch_array($result) ){

        $phparray = array($row['id'],$row['category'],$row['name'],$row['type'],$row['year']);
        print_r(json_encode($phparray));
        echo "<br/>";

    }

   






?>