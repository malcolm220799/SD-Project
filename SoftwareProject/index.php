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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <div id="google_translate_element"></div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>

    <nav class="navColor">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" >Maltech</a>
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
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a href="https://www.facebook.com/Maltech-439707916762965/?modal=admin_todo_tour" class="fa fa-facebook"></a>
                <a href="https://twitter.com/Maltech4" class="fa fa-twitter"></a>
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <body onload="slideshow()">


        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <div id="slideshow"> 
            <img src="img/iphonebanner.jpg"> 
            <img src="img/huaweiBanner.jpg">
            <img src="img/samsungBanner.jpg"> 
        </div> 

        <div id="lap-banner">
            <br>
            <img src="img/web-banner-laptops-.jpg" width="1520px" height="250px"> 
        </div>
    </body>

    <footer>
        <p id="footer">&copy; Copyright Malcolm Cuschieri</p>
    </footer>
</html>