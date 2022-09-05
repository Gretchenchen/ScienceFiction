<!-- search page to show the search results by jie meng -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- add icon -->
    <link rel="icon" href="images/robot.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="searchPage.css">
    <script src="search.js" type="text/javascript" defer></script>
    <title>Science Fiction Search Field</title>
</head>

<body>
    <h1 class="searchhead">Science Fiction Search Field</h1>

    <div class="col-md-6 well" class="searchbody">

        <div class="col-md-4">
            <form method="POST" action="search.php">
                <div class="custom-select">
                    <select name="category_select" id="category_select" onchange="newcategory(this)">
                        <option value="select">select a category</option>
                        <option value="Movies">Movies</option>
                        <option value="TV Series">TV Series</option>
                        <option value="Animations">Animations</option>
                    </select>
                    <input type="text" name="category" id="category11" class="form-control" value="" placeholder="Category" required />
                </div>
                <br>
                <div class="custom-select">
                  
                    <select name="type_select" id="type_select" onchange="newtype(this)">
                        <option value="type_select">select a type</option>
                        <option value="Space Exploration">Space Exploration</option>
                        <option value="Advanced Technology">Advanced Technology</option>
                        <option value="Time Travel">Time Travel</option>
                        <option value="Parallel Universes">Parallel Universes</option>
                        <option value="Alien Lifefroms">Alien Lifefroms</option>
                        <option value="Coming Soon">Coming Soon</option>
                    </select>
                    <input type="text" name="type" id="type" class="form-control" placeholder="Type" required />
                </div>
                <br>
                <div>
                    <button class="searchBtn" name="search">Search</button>
                    <input type="text" class="form-control" id="resultnumber" value="0" />
                    <!-- <label for="resultnumber">results been found</label> -->
                </div>
            </form>
        </div>

        <br />
        <?php include 'search_result.php'?>
        <?php include 'JSON.php'?>

    </div>


</body>



</html>