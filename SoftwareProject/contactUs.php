<!DOCTYPE html>
<html>
    <head>
        <title>Contact US</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script type="text/javascript" src="js/index.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://malsup.github.com/jquery.cycle.all.js"></script>
    </head>

    <nav class="navColor">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" >Mobile Shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="getlaptops.php" >Laptops</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Smartphones<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="getproductsSamsung.php">Samsung</a></li>
                        <li><a href="getproductsApple.php">Apple</a></li>
                        <li><a href="getproductsHuawei.php">Huawei</a></li>
                    </ul>
                </li>
                <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <body onload="slideshow()">
        <div id="container">
            <div style="text-align:center">
                <br>
                <form action="mailto:Malcolm.Cuschieri.a101065@mcast.edu.mt?subject=Contact Form" method="post" enctype="text/plain">        
                    <label>Name</label>
                    <br>
                    <input name="name" placeholder="Type Here">
                    <br>
                    <label>Surname</label>
                    <br>
                    <input name="surname" placeholder="Type Here">
                    <br>
                    <label>E-mail</label>
                    <br>
                    <input name="email" type="text" placeholder="Type Here">
                    <br>
                    <label>Comment</label>
                    <br>
                    <textarea name="comment" placeholder="Type Here"></textarea>
                    <br>
                    <input id="submit" name="submit" type="submit" value="Submit">
                    <input id="reset" name="reset" type="reset" value="Reset">
                </form>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9009.399632251449!2d14.426253820051796!3d35.90695283536013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smt!4v1558435477125!5m2!1sen!2smt" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

    </body>

    <footer>
        <p id="footer">&copy; Copyright Malcolm Cuschieri</p>
    </footer>
</html>