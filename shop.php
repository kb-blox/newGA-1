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

                        <div class='navigation3 col-sm-10'>
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
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-3 colfärg1'>
                        <div id="sorting-list">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <h3 class="">FILTER</h3>
                                <div class="panel ">
                                    <div class="panel-heading" role="tab" id="headingKATAGORI">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseKATAGORI" aria-expanded="false" aria-controls="collapseKATAGORI">
                                                KATAGORI
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseKATAGORI" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingKATAGORI">
                                        <div class="panel-body">
                                            <div class="btn-group katagoricss" data-toggle="buttons">
                                                <label class="btn ">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" > <p>JACKOR</p>
                                                </label>
                                                <label class="btn ">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">  <p>TRÖJA</p>
                                                </label>
                                                <label class="btn ">
                                                    <input type="radio" name="options" id="option3" autocomplete="off">  <p>BYXOR</p>
                                                </label>
                                                <label class="btn ">
                                                    <input type="radio" name="options" id="option4" autocomplete="off" > <p> UNDERKLÄDER </p>
                                                </label>
                                                <label class="btn ">
                                                    <input type="radio" name="options" id="option5" autocomplete="off">  <p>BADKLÄDER</p>
                                                </label>
                                                <label class="btn ">
                                                    <input type="radio" name="options" id="option6" autocomplete="off">  <p>HANDSKAR</p>
                                                </label>
                                                <label class="btn ">
                                                    <input type="radio" name="options" id="option7" autocomplete="off" > <p> SKJORTOR</p>
                                                </label>
                                                <label class="btn ">
                                                    <input type="radio" name="options" id="option8" autocomplete="off"> <p> KEPSAR</p>
                                                </label>
                                                <label class="btn ">
                                                    <input type="radio" name="options" id="option9" autocomplete="off"> <p> T-SHIRTS</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel ">
                                    <div class="panel-heading" role="tab" id="headingMARKE">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseMARKE" aria-expanded="false" aria-controls="collapseMARKE">
                                                MÄRKE
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseMARKE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMARKE">
                                        <div class="panel-body">
                                            <div class="checkbox markecss">
                                                <input id="check1" type="checkbox" name="check" value="check1">
                                                <label for="check1">Microsoft</label>
                                                <input id="check2" type="checkbox" name="check" value="check2">
                                                <label for="check2">Apple</label>
                                                <input id="check3" type="checkbox" name="check" value="check3">
                                                <label for="check3">DELL</label>
                                                <input id="check4" type="checkbox" name="check" value="check4">
                                                <label for="check4">HP</label>
                                                <input id="check5" type="checkbox" name="check" value="check5">
                                                <label for="check5">Checkbox No. 1</label>
                                                <input id="check6" type="checkbox" name="check" value="check6">
                                                <label for="check6">Checkbox No. 2</label>
                                                <input id="check7" type="checkbox" name="check" value="check7">
                                                <label for="check7">Checkbox No. 1</label>
                                                <input id="check8" type="checkbox" name="check" value="check8">
                                                <label for="check8">Checkbox No. 2</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingFARG">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFARG" aria-expanded="false" aria-controls="collapseFARG">
                                                FÄRG
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFARG" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFARG">
                                        <div class="panel-body">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingPRIS">
                                        <h4 class="panel-title">
                                            <a class="collapsed " data-toggle="collapse" data-parent="#accordion" href="#collapsePRIS" aria-expanded="false" aria-controls="collapsePRIS">
                                                PRIS
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsePRIS" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPRIS">
                                        <div class="panel-body">
                                            <div class="checkbox markecss">
                                                <input id="check9" type="checkbox" name="check" value="check9">
                                                <label for="check9">0-100</label>
                                                <input id="check10" type="checkbox" name="check" value="check10">
                                                <label for="check10">100-200</label>
                                                <input id="check11" type="checkbox" name="check" value="check11">
                                                <label for="check11">200-300</label>
                                                <input id="check12" type="checkbox" name="check" value="check12">
                                                <label for="check12">300-400</label>
                                                <input id="check13" type="checkbox" name="check" value="check13">
                                                <label for="check13">400-500</label>
                                                <input id="check14" type="checkbox" name="check" value="check14">
                                                <label for="check14">500-600</label>
                                                <input id="check15" type="checkbox" name="check" value="check15">
                                                <label for="check15">600-700</label>
                                                <input id="check16" type="checkbox" name="check" value="check16">
                                                <label for="check16">700-</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingSTORLEK">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSTORLEK" aria-expanded="false" aria-controls="collapseSTORLEK">
                                                STORLEK
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSTORLEK" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSTORLEK">
                                        <div class="panel-body">



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class='col-sm-9 top-shop'>
                        <?php
                        include './showProducts.php';
                        ?>
                        <div class="col-sm-12 "> 
                            <ul class="pagination pilarna">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">7</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
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