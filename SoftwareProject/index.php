<!DOCTYPE html>
<html>
    <head>
        <title>Smartphone Shop</title>
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
            <div id="slideshow"> 
                <img src="img/samsungBanner.JPG"> 
                <img src="img/iphoneBanner.png" > 
                <img src="img/huaweiBanner.jpg" > 
            </div> 
            
            <div id="lap-banner">
                <img src="img/web-banner-laptops-.jpg" width="1520px" height="250px"> 
            </div>

        </div>

    </body>

    <footer>
        <p id="footer">&copy; Copyright Malcolm Cuschieri</p>
    </footer>
</html>