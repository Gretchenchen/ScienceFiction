<!-- realize the search function by searching results according to category and type from the database by jie meng-->
<?php 

    require('database.php');
    
    $db = db_connect();

    if(isset($_POST['search'])){
?>
        <table class="result_table">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Type</th>
                <th>Published year</th>
                <th>&nbsp</th>
  	            <th>&nbsp</th>
                <th>&nbsp</th>
            </tr>
        </table>
    <?php 
        $category = $_POST['category'];
        $type =  $_POST['type'];
        $sql = "SELECT * FROM space WHERE category = '$category' AND type ='$type'";
        
        $result =  mysqli_query($db, $sql);
        $num = mysqli_num_rows($result);

        if ($num > 0){
            while($fetch = mysqli_fetch_assoc($result)){
    ?>
            <script> 
                document.getElementById('resultnumber').value = <?php echo "$num" ?> ; 
            </script>
                 <tr>
                    
                    <td> <?php echo $fetch['id']?> </td>
                    <td> <?php echo $fetch['category']?> </td>
                    <td> <?php echo $fetch['name']?> </td>
                    <td> <?php echo $fetch['type']?>  </td>
                    <td> <?php echo $fetch['year']?> </td>
                    <td><a class="action" href="<?php echo"show.php?id=" . $fetch['id']; ?>">View</a></td>                    
                    <td><a class="action" href="<?php echo "delete.php?id=" . $fetch['id']; ?>">Delete</a></td>
                </tr>
                <br>
                
    <?php
            }
        }
        else{
    ?>
             
            <script> 
                document.getElementById('resultnumber').value = <?php echo ($num) ?> ; 
            </script>
    <?php
        }
    }
    ?>

