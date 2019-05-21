<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="container">
            <div class="card mt-5 w-50 mx-auto shadow">
                <form method="post" action="login.php"> 
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Please enter username here..." required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Please enter password here..." required>
                    </div>                    
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    
    <?php 
        if (isset($_POST['submit'])) {
            $conn = mysqli_connect('localhost', 'root', '', 'shop', '3306');
            $uname = trim(mysqli_real_escape_string($conn, $_POST['username']));
            $pws = sha1(trim(mysqli_real_escape_string($conn, $_POST['password'])));
            $query = "SELECT userId, username FROM tbl_users WHERE username = '$uname' AND password = '$pws'";
            $result = mysqli_query($conn, $query) or die("Error in query". mysqli_error($conn));
            $row = mysqli_fetch_row($result);
            $counter = $row[0];
            
            if ($counter > 0) {
                $_SESSION ['userId'] = sha1($row[0]);
                $_SESSION ['username'] = $row[1];
                echo '<br>';
                echo "<p class='alert alert-success'>Hello <b>$_SESSION[username]</b>! <a href='index.php' class='btn btn-primary'>Click here</a> to access the shop's page.</p>";
            }
            else {
                echo "<p class='alert alert-danger'>You do not have access</p>";
            }
        }
    ?>
    
</html>