<!DOCTYPE html>
<html lang="en">

<?php
header('Content-Type: text/html; charset=utf-8');
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'proj_f';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("SET character_set_results=utf8");
$conn->query("SET character_set_client=utf8");
$conn->query("SET character_set_connection=utf8");

$sql = "SELECT * FROM `pro` 
WHERE Enddate >= CURDATE()";
$result = $conn->query($sql);


?>

<head>
    <title>Menu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Foodlis/logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- title of site -->
    <title>Furniture</title>

    <!-- For favicon png -->


    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="animsition">
    <style>
        .dropdown {
            position: cover;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(105, 105, 105, 0.9);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown1 {
            position: cover;
            display: inline-block;
        }

        .dropdown1-content {
            display: none;
            position: absolute;
            background-color: rgba(105, 105, 105, 0);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown1:hover .dropdown1-content {
            display: block;
        }
    </style>

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="wrap-menu-header gradient1 trans-0-4">
            <div class="container h-full">
                <div class="wrap_header trans-0-3">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="Foodlis/logo.png" alt="IMG-LOGO" data-logofixed="Foodlis/logo.png">
                        </a>
                    </div>

                    <!-- Menu -->
                    <div class="wrap_menu p-l-45 p-l-0-xl">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="index.html" style="color:rgb(255, 255, 255);font-size:17px;">Home</a>
                                </li>

                                <li class="dropdown">
                                    <span style="color:rgb(255, 255, 255);font-size:17px;">MENU</span>
                                    <ul class="dropdown-content">
                                        <li><a href="promotion.php" style="color:rgb(255, 255, 255);font-size:17px;">PROMOTION</a></li>
                                        <li><a href="populamenu.php" style="color:rgb(255, 255, 255);font-size:17px;">เมนูยอดฮิต</a></li>
                                        <li><a href="menurecommend.php" style="color:rgb(255, 255, 255);font-size:17px;">เมนูแนะนำ</a></li>
                                        <li><a href="menuall.php" style="color:rgb(255, 255, 255);font-size:17px;">เมนูทั้งหมด</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="contact.html" style="color:rgb(255, 255, 255);font-size:17px;">Contact</a>
                                </li>


                            </ul>
                        </nav>
                    </div>

                    <!-- Social -->
                    <div class="social flex-w flex-l-m p-r-20">
                        <!-- <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>-->
                        <a href="https://www.facebook.com/TheNeverEndingSummer" target="_blank"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

        <!-- - -->
        <ul class="menu-sidebar p-t-95 p-b-70">
            <li class="t-center m-b-13">
                <a href="index.html" class="txt19" style="font-size:17px;">Home</a>
            </li>
            <li class="t-center m-b-13">
                <a href="contact.html" class="txt19" style="font-size:17px;"> Contact</a>
            </li>
            <li class="t-center m-b-13">
                <div class="dropdown1">
                    <span style="font-size:17px;">MENU</span>
                    <div class="dropdown1-content">
                        <a href="promotion.php" style="font-size:17px;">PROMOTION</a> <br>
                        <a href="populamenu.php" style="font-size:17px;">เมนูยอดฮิต</a><br>
                        <a href="menurecommend.php" style="font-size:17px;">เมนูแนะนำ</a><br>
                        <a href="menuall.php" style="font-size:17px;">เมนูทั้งหมด</a><br>

                    </div>

                </div>
            </li>
        </ul>
        </div>
    </aside>



    <!-- Title Page -->
    <section>

        <img src="Foodlis/BG3.jpg" style="width:100%;height:auto;">

    </section>

    <!-- Lunch -->



    <!-- Dinner -->

    <section class="section-intro">

        <div class="content-intro bg-white p-t-77 p-b-133">
            <div class="container">
                <div class="row">



                    <?php
                    while ($row = mysqli_fetch_array($result)) 
                    {

                        echo " <div class='col-md-4 p-t-30'>
                        <!-- Block1 -->
                        <div class='blo1'> 
                        <div class='wrap-pic-blo1 bo-rad-10 hov-img-zoom'>";
                        echo "<a href='" . $row['link'] . "' target='_blank'><img src='Foodlis/" . $row['img'] . "' alt='IMG-INTRO'></a>";
                        echo "</div>";

                        echo "<div class='wrap-text-blo1 p-t-35'>";
                        echo  " <a href='" . $row['link'] . "' target='_blank'>";
                        echo "<h4 class='txt5 color0-hov trans-0-4 m-b-13'> " . $row['name'] . "</h4> </a>";

                        echo "<p class='m-b-20'>
                        " . $row['text'] . "
                              </p>
                                </div>
                                </div>
                                </div>";
                    }
                    ?>

                </div>
            </div>
        </div>

    </section>









    <!-- Intro -->


    <!-- Sign up 
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				Specials Sign up
			</span>

			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
			</div>

			<!-- Button3 
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				Sign-up
			</button>
		</form>
	</div> -->





    <!-- Footer -->
    <footer class="bg1">
        <div class="container p-t-40 p-b-70">
            <div class="row">
                <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                        Contact Us
                    </h4>

                    <ul class="m-b-70">
                        <li class="txt14 m-b-14">
                            <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i> 41/5 ถนน เจริญนคร แขวง คลองสาน เขตคลองสาน <br>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;กรุงเทพมหานคร 10600
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i> 02-8610953<br>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;02-8612128
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>info@theneverendingsummer.com

                        </li>
                    </ul>

                    <!-- - -->
                    <h4 class="txt13 m-b-32">
                        Opening Times
                    </h4>

                    <ul>
                        <li class="txt14">
                            11.00 AM – 11:00 PM
                        </li>

                        <li class="txt14">
                            Every Day
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-4 p-t-50"></div>

                <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                        Latest facebook
                    </h4>

                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </span>
                        <a href="#" class="txt15">

                        </a>

                        <p class="txt14 m-b-18">
                            Tasty vegan food with Stir fried tofu with cashew nuts
                            <a href="https://www.facebook.com/TheNeverEndingSummer/" class="txt15" target="_blank">
                                https://www.facebook.com/TheNeverEndingSummer/
                            </a>
                        </p>

                        <span class="txt16">

                        </span>
                    </div>

                    <div>
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </span>
                        <a href="#" class="txt15">

                        </a>

                        <p class="txt14 m-b-18">
                            Vegetarian food chinese style with Stir fried rice noddle vegetarian yangshuo
                            <a href="https://www.facebook.com/TheNeverEndingSummer/" class="txt15" target="_blank">
                                https://www.facebook.com/TheNeverEndingSummer/
                            </a>
                        </p>

                        <span class="txt16">

                        </span>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <div class="end-footer bg2">
            <div class="container">
                <div class="flex-sb-m flex-w p-t-22 p-b-22">
                    <div class="social flex-w flex-l-m p-r-20">
                        <!-- <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>-->

                        <a href="https://www.facebook.com/TheNeverEndingSummer" target="_blank"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                        <!-- <a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>-->
                    </div>

                   
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>




    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
    <script type="text/javascript">
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--owl.carousel.js-->
    <script src="assets/js/owl.carousel.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>

</body>

</html>