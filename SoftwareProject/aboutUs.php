<!DOCTYPE html>
<html>
    <head>
        <title>About US</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/topbtn.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://malsup.github.com/jquery.cycle.all.js"></script>
    </head>

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
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <body>
        <div id="container">
            <div id="about" style="margin-left: 10px">
                
                <h1>About Us</h1>
                
                <script>
                    /*FAQ Slider*/
                    $(document).ready(function(){
                        $('li.q').click(function(){
                            $(this).next().slideToggle()
                            ('li.a').slideUp()
                        });
                    });			
                </script>

                <p>Maltech is located in Mosta. We offer clients with laptops and smartphones below are the brands that we offer:</p>

                <img src="img/samsung-apple-huawei.png" id="brands" class="img-rounded">
                
                <br>
                <br>
                
                <h3>FAQ</h3>
                <br/>
                
                <ul class="faq">
                    <li class="q">Do you offer delivery?
                    </li>
                    <p class="a">Yes it is free of charge</p>

                    <li class="q"> How can I pay for my order?
                    </li>
                    <p class="a">Through online banking like paypal</p>

                    <li class="q"> Do I need to register and set up an account to shop?
                    </li>
                    <p class="a">Yes so we can know where to deliver the product</p>
                </ul>

                <button onclick="topFunction()" id="topBtn" title="Go to top">Back To Top</button>
            </div>
        </div>

    </body>

    <footer>
        <p id="footer">&copy; Copyright Malcolm Cuschieri</p>
    </footer>
</html>