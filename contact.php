<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
    <head>
        <title>Clothes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/test.css">
        <link type="text/css" rel="stylesheet" href="css/mobil.css">
        <!--<link type="text/css" rel="stylesheet" href="css/navtest.css">-->
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,700">-->
        <link rel="stylesheet" href="css/style.css">

        <meta property="og:title" content="Material Design Off Canvas Menu with HTML5, CSS3, and JavaScript">
        <meta property="og:site_name" content="Call Me Nick">
        <meta property="og:url" content="http://callmenick.com/projects/material-off-canvas-menu">
        <meta property="og:image" content="http://callmenick.com/projects/material-off-canvas-menu/img/material-menu-featured.jpg">

    </head>
    <body>
        <div id="wrapper">
            <div class="jumbotron backgroundheader navbar navbar-default navbar-fixed-top nav-shado">
                <div class="container">
                    <div class=" navbar navbar-static-top navigation">
                        <a class="logo col-sm-2" href="index.php"><h1>LOGO</h1></a>
                        <div class='navigation2 col-sm-10'>
                            <li><a href="index.php">Home</a></li>  
                            <li class="dropdown">

                                <a href="shop.php" class="dropdown-toggle" >Shop<b class="caret"></b></a>                      

                                <ul class="dropdown-menu mega-menu droppdown">

                                    <li class="mega-menu-column ">
                                        <ul>
                                            <li class="nav-header">Kille</li>
                                            <li class="undermen"><a href="#">Hoodie</a></li>
                                            <li class="undermen"><a href="#">T-shirt</a></li>
                                            <li class="undermen"><a href="#">Shirt</a></li>
                                            <li class="undermen"><a href="#">Shorts</a></li>
                                            <li class="undermen"><a href="#">Jeans</a></li>
                                            <li class="undermen"><a href="#">Trousers</a></li>
                                        </ul>
                                    </li>    

                                    <li class="mega-menu-column">
                                        <ul>
                                            <li class="nav-header">Tjej</li>
                                            <li class="undermen"><a href="#">Hoodie</a></li>
                                            <li class="undermen"><a href="#">T-shirt</a></li>
                                            <li class="undermen"><a href="#">Shirt</a></li>
                                            <li class="undermen"><a href="#">Shorts</a></li>
                                            <li class="undermen"><a href="#">Jeans</a></li>
                                            <li class="undermen"><a href="#">Trousers</a></li>
                                        </ul>
                                    </li> 

                                    <li class="mega-menu-column">
                                        <ul>                            
                                            <li class="nav-header">Barn</li>
                                            <li class="undermen"><a href="#">Hoodie</a></li>
                                            <li class="undermen"><a href="#">T-shirt</a></li>
                                            <li class="undermen"><a href="#">Shirt</a></li>
                                            <li class="undermen"><a href="#">Shorts</a></li>
                                            <li class="undermen"><a href="#">Jeans</a></li>
                                            <li class="undermen"><a href="#">Trousers</a></li>
                                        </ul>
                                    </li> 

                                </ul>


                            </li>

                            <li><a href="contact.php">Contact</a></li>
                            <div class="login LS-dropdown">
                                <?php
                                include 'showCart.php';
                                if (isset($_SESSION["user"])) {
                                    if ($_SESSION["user"] != NULL) {
                                        echo "Logged in as " . $_SESSION["user"];
                                        echo "<form method='GET' action='signout.php'>";
                                        echo "<input type='submit' name='action' value='signout'></input>";
                                        echo "</form>";
                                    }
                                } else {
                                    echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Login | Signup<b class='caret'></b></a>";
                                }
                                ?>
                                <div class="dropdown-menu login-menu LS-droppdown">
                                    <div class="row"> 

                                        <div class="col-sm-6 login">
                                            <form method = 'POST' action ='signup.php'>
                                                <h2>Signup</h2>
                                                <h3 class ='user'>Username:</h3>
                                                <input name = 'username' type = 'text' placeholder = 'Username' required>
                                                <h3 class = 'user'>Password:</h3>
                                                <input name = 'password' type = 'password' placeholder = 'Password' required>
                                                <input class = 'send' type ='submit' name = 'action' value = 'Sign Up'>
                                            </form>
                                        </div>

                                        <div class = 'col-sm-6 login'>
                                            <form method = 'POST' action = 'login.php'>
                                                <h2>Login</h2>
                                                <h3 class = 'user'>Username:</h3>
                                                <input name = 'username' type = 'text' placeholder = 'Username' required>
                                                <h3 class = 'user'>Password:</h3>
                                                <input name = 'password' type = 'password' placeholder = 'Password' required>
                                                <input class = 'send' type = 'submit' name = 'action' value = 'login'>
                                            </form>
                                            ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <button id="mm-menu-toggle" class="nav-logo mm-menu-toggle">Toggle Menu</button>
                        <nav id="mm-menu" class="mm-menu">
                            <div class="mm-menu__header">
                                <h2 class="mobil- nav mm-menu__title"><b>Clothes</b></h2>
                            </div>
                            <ul class="mobil- nav  mm-menu__items">
                                <li class="mm-menu__item">
                                    <a class="mm-menu__link" href="index.php">
                                        <span class="mm-menu__link-text"><i class="md md-home"></i> Home</span>
                                    </a>
                                </li>
                                <li class="mm-menu__item">
                                    <a class="mm-menu__link" href="shop.php">
                                        <span class="mm-menu__link-text"><i class="md md-person"></i> Shop</span>
                                    </a>

                                    <ul>
                                        <li class="mm-menu__item undermenu">
                                            <a class="mm-menu__link" href="#">
                                                <span class="mm-menu__link-text"><i class="md md-person"></i> Kille</span>
                                            </a></li>
                                        <li class="mm-menu__item undermenu">
                                            <a class="mm-menu__link" href="#">
                                                <span class="mm-menu__link-text"><i class="md md-person"></i> Tjej</span>
                                            </a></li>
                                        <li class="mm-menu__item undermenu">
                                            <a class="mm-menu__link" href="#">
                                                <span class="mm-menu__link-text"><i class="md md-person"></i> Barn</span>
                                            </a></li>
                                    </ul>

                                </li>
                                <li class="mm-menu__item">
                                    <a class="mm-menu__link" href="contact.php">
                                        <span class="mm-menu__link-text"><i class="md md-settings"></i> Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <script src="js/production/materialMenu.min.js"></script>
                        <script>
                            var menu = new Menu;
                        </script>
                        <script src="js/external/githubIcons.js"></script>
                        <script src="js/external/fusionAd.js"></script>

                        <div class='login-mobil col-sm-10'>
                            <div class="login LS-dropdown">
                                <?php
                                include 'showCart.php';
                                if (isset($_SESSION["user"])) {
                                    if ($_SESSION["user"] != NULL) {
                                        echo "Logged in as " . $_SESSION["user"];
                                        echo "<form method='GET' action='signout.php'>";
                                        echo "<input type='submit' name='action' value='signout'></input>";
                                        echo "</form>";
                                    }
                                } else {
                                    echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Login | Signup<b class='caret'></b></a>";
                                }
                                ?>
                                <div class="col-sm-8 dropdown-menu login-menu LS-droppdown">
                                    <div class="row"> 

                                        <div class="col-sm-6 signup">
                                            <form method = 'POST' action ='signup.php'>
                                                <h2>Signup</h2>
                                                <h3 class ='user'>Username:</h3>
                                                <input name = 'username' type = 'text' placeholder = 'Username' required>
                                                <h3 class = 'user'>Password:</h3>
                                                <input name = 'password' type = 'password' placeholder = 'Password' required>
                                                <input class = 'send' type ='submit' name = 'action' value = 'Sign Up'>
                                            </form>
                                        </div>

                                        <div class = 'col-sm-6 login'>
                                            <form method = 'POST' action = 'login.php'>
                                                <h2>Login</h2>
                                                <h3 class = 'user'>Username:</h3>
                                                <input name = 'username' type = 'text' placeholder = 'Username' required>
                                                <h3 class = 'user'>Password:</h3>
                                                <input name = 'password' type = 'password' placeholder = 'Password' required>
                                                <input class = 'send' type = 'submit' name = 'action' value = 'login'>
                                            </form>
                                            ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container Con">
                <form action="" method="post" class="col-sm-12 dark-matter">
                    <h1><b>Welcome </b>
                        <p>Here can you fill in, if you have a question or whant to refund!</p>
                    </h1>
                    <label>
                        <p>Your Name :</p>
                        <input class="contact" type="text" name="name" placeholder="Your Full Name" />
                    </label>

                    <label>
                        <p>Your Email :</p>
                        <input class="contact" type="email" name="email" placeholder="Your Email Address" />
                    </label>

                    <label>
                        <p>Message :</p>
                        <textarea class="contact" name="message" placeholder="Your message/refund explanation to Us"></textarea>
                    </label> 
                    <label>
                        <p>Refund :</p><select name="selection" >
                            <option value="placeholder">Which article of clothing, you whant to refund</option>
                            <option value="Hoodie">Hoodie</option>
                            <option value="T-shirt">T-shirt</option>
                            <option value="Shirt">Shirt</option>
                            <option value="Shorts">Shorts</option>
                            <option value="Jeans">Jeans</option>
                            <option value="Trousers">Trousers</option>
                       
                    </label>    
                    <label>
                        
                        <input type="button" class="button" value="Send" /> 
                    </label>    
                </form>
            </div>
            <div class="jumbotron backgroundfooter">
                <div class="container">

                    <div class="col-sm-4 footercontent">
                        <h2>© 2014 Clothes Store </h2>
                        <p>By David KB, Viktor RT <br>
                            Albin S, Tony T</p>
                    </div>
                    <div class="col-sm-4 footercontent">
                        <h2>Find us</h2>
                        <p>Adress:</p>
                        <p>City:</p>
                        <p>Phone nr:</p>
                    </div>
                    <div class="col-sm-4 footercontent">
                        <h2>Follow us</h2>
                    </div>

                </div>
            </div>
            <script>
                jQuery(document).ready(function() {
                    $(".dropdown").hover(
                            function() {
                                $('.dropdown-menu', this).fadeIn("fast");
                            },
                            function() {
                                $('.dropdown-menu', this).fadeOut("fast");
                            });
                });
            </script>
        </div>
    </body>
</html>