<!DOCTYPE html>
<html>
    <head>
        <title>Getting book information</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="jumbotron text-center">
            <h4 class="display-4">Add a book here!</h4>
            <p>Please fill in the below form...</p>
        </div>

        <div class="container">            
            <form method="post" action="addbooks.php" enctype="multipart/form-data"> 
                <div class="form-group">
                    <label for="publisher">Publisher</label>
                    <input class="form-control" type="text" name="publisher" required>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input class="form-control" type="text" name="author" required>
                </div>
                <div class="form-group">
                    <label for="bookname">Book Name</label>
                    <input class="form-control" type="text" name="bookname" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input class="form-control" type="text" name="price" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input class="form-control" type="text" name="category" required>
                </div>
                <div class="mt-3 custom-file">
                    <input type="file" class="custom-file-input" name="img" id="img">
                    <label for="img" class="custom-file-label w-50">Choose file...</label>
                </div>
                <div class="form-group row justify-content-between">
                    <input type="submit" class="btn btn-success" name="success" />
                    <a class="btn btn-secondary" href="getbooks.php">Back</a>
                    <input type="reset" class="btn btn-danger" />
                </div>
            </form>

            <?php
            if (isset($_POST['success'])) {
                require ('connect.php');  //1. Connecting to the database

                if (mysqli_connect_errno()) {  //connection error
                    echo "<div class='row'><div class = 'alert alert-danger'>An error has occured during the connection</div></div>";
                    exit;
                }
                else 
                {
                    //populate the variables
                    $publisher = $_POST['publisher'];  
                    $author = $_POST['author'];  
                    $bookname = $_POST['bookname'];  
                    $price = $_POST['price'];
                    $category = $_POST['category'];
                    $tmpfile = $_FILES['img']['tmp_name'];  //physical file
                    $filename = 'img/'.$_FILES['img']['name'];

                    if(move_uploaded_file($tmpfile, $filename)) {


                        //prepare the query
                        $query = "INSERT INTO tbl_books (author, title, price, publisher, category, img) VALUES ('$author', '$bookname', '$price', '$publisher', '$category', '$filename')";

                        //run query
                        $result = mysqli_query($conn, $query);

                    }

                    //show that the data has been inserted!
                    echo "<div class='alert alert-success'>".mysqli_affected_rows($conn)." rows inserted!</div>";
                }
            }
            ?>            
        </div>
    </body>

    <script>
        $('#img').on('change', function() {        
            var filename = $(this).val().replace('C:\\fakepath\\','');
            $(this).next('.custom-file-label').html(filename);
        });
    </script>
</html>