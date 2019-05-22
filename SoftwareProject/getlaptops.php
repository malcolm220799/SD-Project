<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Laptops</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="jumbotron text-center">
            <h4 class="display-4">Laptops</h4>
        </div>

        <div class="container">
            <?php
            if (!empty($_SESSION['userId'])) {
                require ('connect.php'); //1. Connecting to the database

                if (mysqli_connect_errno()) {  //connection error
                    echo "<div class='row'><div class = 'alert alert-danger'>An error has occured during the connection</div></div>";
                    exit;
                }
                else
                    echo "<div class='row'><div class = 'alert alert-success'>Connected to the database</div></div>";

                $query = "SELECT productName, price, categoryId, brandId,img FROM tbl_products WHERE categoryId LIKE '1';";
                $result = mysqli_query($conn, $query)
                    or die("Error in query".mysql_error($conn));    //2. Run the query
                echo "<div class='card shadow'>";
                echo "<table class='table table-bordered table-striped table-hover text-primary mb-0'>";

                echo "<thead><tr><th>Product</th><th>Price</th><th>Image</th></tr></thead>";

                while ($row = mysqli_fetch_assoc($result)) {    //3. Create a cursor
                    echo "<tr><td>$row[productName]</td><td>$row[price]</td>";
                    echo "<td><img class='img-thumbnail' src='$row[img]' style='width:75px'></td></tr>";//4. Display the results
                }

                mysqli_close($conn);    //5. Free up any db overhead
                echo "</table>";
                echo "</div>";
            }
            else {
                echo 'You do not have access';
            }
            echo "<br>";
            ?>
            <div class="form-group row justify-content-between">
                <a class="btn btn-primary" href="addproducts.php">Add</a>
                <a class="btn btn-secondary" href="index.php">Back</a>
                <a class="btn btn-danger" href="removeproducts.php">Delete</a>
            </div>
        </div>
    </body>
</html>