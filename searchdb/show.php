<!-- display the specifical database result from the searched results by jie meng-->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css" />
</head>

<body>


  <?php

    require_once('database.php');
    
    $db = db_connect();
    //access URL parameter
    $id = $_GET['id'] ;


    $sql = "SELECT * FROM space WHERE id= '$id' ";
        
    $result_set = mysqli_query($db, $sql);
        
    $result = mysqli_fetch_assoc($result_set);

  ?>

    <div id="content">

        <a class="back-link" href="search.php"> Back to List</a>

        <div class="page show">

            <h1> <?php echo $result['name']; ?></h1>

            <div class="attributes">
                <dl>
                    <dt>Category </dt>
                    <dd><?php echo $result['category']; ?></dd>
                </dl>
                <dl>
                    <dt>Type</dt>
                    <dd><?php echo $result['type']; ?></dd>
                </dl>
                <dl>
                    <dt>Name</dt>
                    <dd><?php echo $result['name']; ?></dd>
                </dl>
                <dl>
                    <dt>Year</dt>
                    <dd><?php echo $result['year']; ?></dd>
                </dl> 

            </div>

        </div>

    </div>

    <?php include 'footerEm.php'; ?>
</body>

</html>