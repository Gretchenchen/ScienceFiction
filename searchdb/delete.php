<!-- delete data from database by jie Meng -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" media="all" href="staff.css" />
</head>

<body>

<?php

      require_once('database.php');

      $db = db_connect();

      if(!isset($_GET['id'])) {
        header("Location:  search.php");
      }
      $id = $_GET['id'];

      if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $sql = "DELETE FROM space WHERE id ='$id'";
          if($result_set = mysqli_query($db, $sql)){
           
            header("Location: search.php");
            echo "<script> alert('Item has been removed!'); </script>";
          }
        

      } 
      else 
      {
        $sql = "SELECT * FROM space WHERE id= '$id' ";
          
        $result_set = mysqli_query($db, $sql);
          
        $result = mysqli_fetch_assoc($result_set);

          
      }

?>

<?php $page_title = 'Delete Page'; ?>


    <div id="content">

        <a class="back-link" href="search.php">&laquo; Back to List</a>

        <div class="page delete">
            <h1>Delete Page</h1>
            <p>Are you sure you want to delete this item?</p>
            <p class="item"><?php echo "id ". $result['id']; ?></p>

            <form form action="<?php echo 'delete.php?id=' . $result['id']; ?>" method="post">
                <div id="operations">
                    <input type="submit" name="commit" value="Delete users" />
                </div>
            </form>
        </div>
        <?php include 'footerEm.php'; ?>
    </div>
   
      
  </body>
</html>