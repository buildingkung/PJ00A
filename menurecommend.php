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

$sql = "SELECT * FROM `recommend`";
$result = $conn->query($sql);



$ran1 = rand(9, 96);
$ran2 = rand(9, 96);
$ran3 = rand(9, 96);
$ran4 = rand(9, 96);
$ran5 = rand(9, 96);

$sql1 = "SELECT * FROM `food` where Id_food = $ran1";
$result1 = $conn->query($sql1);
$row_1 = mysqli_fetch_array($result1);

$sql2 = "SELECT * FROM `food` where Id_food = $ran2";
$result2 = $conn->query($sql2);
$row_2 = mysqli_fetch_array($result2);

$sql3 = "SELECT * FROM `food` where Id_food = $ran3";
$result3 = $conn->query($sql3);
$row_3 = mysqli_fetch_array($result3);

$sql4 = "SELECT * FROM `food` where Id_food = $ran4";
$result4 = $conn->query($sql4);
$row_4 = mysqli_fetch_array($result4);

$sql5 = "SELECT * FROM `food` where Id_food = $ran5";
$result5 = $conn->query($sql5);
$row_5 = mysqli_fetch_array($result5);


?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
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


    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */


    }


    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 5px 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        width: 100%;
    }

    .button2 {
        background-color: #008CBA;
    }

    /* Blue */
    .button3 {
        background-color: #f44336;
    }

    /* Red */
    .button4 {
        background-color: #e7e7e7;
        color: black;
    }

    /* Gray */
    .button5 {
        background-color: #555555;
    }

    /* Black */

    div.c {
        position: absolute;
        right: 0px;
        width: 200px;
        height: 120px;
        border: 3px solid green;
    }

    a {
        color: black;
    }
</style>

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
                        <a href="https://www.facebook.com/TheNeverEndingSummer" target="_blank"><i style="font-size:24px;padding: 10px;" class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>

                        <a data-toggle="modal" data-target="#myModal" href="#"><i style="font-size:24px;padding: 10px;" class="fa fa-cart-plus" aria-hidden="true"></i></a>

                        <button class="btn-show-sidebar m-l-33 trans-0-4" onload="list()"></button>

                        <script>
                            var modal = document.getElementById("myModal");

                            // Get the button that opens the modal
                            var btn = document.getElementById("show_cart");

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks on the button, open the modal
                            btn.onclick = function() {
                                modal.style.display = "block";
                            }

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() {
                                modal.style.display = "none";
                            }

                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
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

        <img src="Foodlis/Recommended.jpg" style="width:100%;height:50%;">

    </section>
    <style>
        label {
            vertical-align: middle
        }

        .qrcode-text {
            padding-right: 1.7em;
            margin-right: 0
        }

        .qrcode-text-btn {
            display: inline-block;
            background: url(//dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg) 50% 50% no-repeat;
            height: 1em;
            width: 1.7em;
            margin-left: -1.7em;
            cursor: pointer
        }

        .qrcode-text-btn>input[type=file] {
            position: absolute;
            overflow: hidden;
            width: 1px;
            height: 1px;
            opacity: 0
        }
    </style>

    <!-- Title Page -->
   

    <!-- Lunch -->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">เมนูที่สั่ง</h4>
                </div>
                <div class="modal-body">
                    <table border="0" style="width:100%;" id="table_food_cart">
                        <tr>
                            <th>
                                <center>รายการอาหาร</center>
                            </th>
                            <th>
                                <center>ราคา</center>
                            </th>
                        </tr>
                    </table>
                    <table border="0" style="width:100%;" id="total">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>

                            <td><span id="ter" class="kadokawa"></span></td>
                        </tr>
                    </table>

                    <table border="0" style="width:100%;" id="total">
                        <tr>
                            <td>QRCODE ชื่อโต๊ะ
                                <input type=text size=16 placeholder="Tracking Code" class=qrcode-text name="tablename" id="tablename" disabled>
                                <label class=qrcode-text-btn>
                                    <input type=file accept="image/*" name="test" capture=environment onclick="return showQRIntro();" onchange="openQRCamera(this);">
                                </label>
                            </td>
                        </tr>
                    </table>

                    <table border="0" style="width:100%;" id="total">
                        <tr>
                            <center>เมนูน่าทาน</center>
                        </tr>
                        <tr>

                            <td><img src='Foodlis/<?php echo $row_1['imgname'] ?>' style="width:100px;"></td>
                            <td><?php echo $row_1['name'] ?> </td>
                            <td><?php echo $row_1['4'] ?></td>
                            <td><button id="<?php echo $row_1['name'] ?> : <?php echo $row_1['4'] ?>  : <?php echo $row_1[0] ?>" class='button' onclick='a(this.id)'>ใส่ตระกร้า <i class='fa fa-shopping-cart'></i></button></td>
                        </tr>

                        <tr>

                            <td><img src='Foodlis/<?php echo $row_2['imgname'] ?>' style="width:100px;"></td>
                            <td><?php echo $row_2['name'] ?> </td>
                            <td><?php echo $row_2['4'] ?></td>
                            <td><button id="<?php echo $row_2['name'] ?> : <?php echo $row_2['4'] ?>  : <?php echo $row_2[0] ?>" class='button' onclick='a(this.id)'>ใส่ตระกร้า <i class='fa fa-shopping-cart'></i></button></td>
                        </tr>

                        <tr>

                            <td><img src='Foodlis/<?php echo $row_3['imgname'] ?>' style="width:100px;"></td>
                            <td><?php echo $row_3['name'] ?> </td>
                            <td><?php echo $row_3['4'] ?></td>
                            <td><button id="<?php echo $row_3['name'] ?> : <?php echo $row_3['4'] ?>  : <?php echo $row_3[0] ?>" class='button' onclick='a(this.id)'>ใส่ตระกร้า <i class='fa fa-shopping-cart'></i></button></td>
                        </tr>

                        <tr>

                            <td><img src='Foodlis/<?php echo $row_4['imgname'] ?>' style="width:100px;"></td>
                            <td><?php echo $row_4['name'] ?> </td>
                            <td><?php echo $row_4['4'] ?></td>
                            <td><button id="<?php echo $row_4['name'] ?> : <?php echo $row_4['4'] ?>  : <?php echo $row_4[0] ?>" class='button' onclick='a(this.id)'>ใส่ตระกร้า <i class='fa fa-shopping-cart'></i></button></td>
                        </tr>

                        <tr>

                            <td><img src='Foodlis/<?php echo $row_5['imgname'] ?>' style="width:100px;"></td>
                            <td><?php echo $row_5['name'] ?> </td>
                            <td><?php echo $row_5['4'] ?></td>
                            <td><button id="<?php echo $row_5['name'] ?> : <?php echo $row_5['4'] ?>  : <?php echo $row_5[0] ?>" class='button' onclick='a(this.id)'>ใส่ตระกร้า <i class='fa fa-shopping-cart'></i></button></td>
                        </tr>



                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="Confirm_Order()">Confirm Order</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <style>
        .box-2 {

            top: 0%;

            right: 2%;

            height: 100%;
            background: rgba(255, 255, 255, 0);

            text-align: center;
            position: fixed;
            float: right;
            width: 150px;
            font-weight: bold;

            overflow: auto;
        }

        .box-3 {

            top: 0%;

            right: 5%;

            height: 100%;
            background: rgba(255, 255, 255, 0);

            text-align: center;

            float: right;
            width: 130px;
            font-weight: bold;


        }

        div.banner {
            margin: 0;
            font-size: 80%
                /*smaller*/
            ;
            font-weight: bold;
            line-height: 1.1;
            text-align: center;
            position: fixed;
            top: 210px;
            left: auto;
            width: 120px;
            right: 1px;
        }



        .banner a,
        .banner em,
        button {
            display: block;
            margin: 0 0.5em;
        }

        .banner a,
        .banner em {
            border-top: 2px groove #900;
        }

        .banner a:first-child {
            border-top: none;
        }

        .banner em {
            color: #CFC;
        }

        .banner a:link {
            text-decoration: none;
            color: white;
        }

        .banner a:visited {
            text-decoration: none;
            color: #CCC;
        }

        .banner a:hover {
            background: black;
            color: white;
        }
    </style>


    <!-- Dinner -->
    <!-- Intro -->

    <section class="section-intro">
        <!--<div class="header-intro parallax100 t-center p-t-135 p-b-158"
                    style="background-image: url(Foodlis/cover4.png);">
                    <span class="tit2 p-l-15 p-r-15">
                        Discover
                    </span>
        
                    <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                        The Never Ending Summer
                    </h3>
                </div>-->

        <div class="content-intro bg-white p-t-77 p-b-133">
            <div class="container">
                <div class="row">

                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<div class='col-md-4 p-t-30'>";
                        echo " <div class='blo1'>";
                        echo "<div class='wrap-pic-blo1 bo-rad-10 hov-img-zoom'>";
                        echo "<img src='Foodlis/" . $row['imgname'] . "' alt='IMG-INTRO' id='" . $row['name'] . ":" . $row['price'] . ":" . $row[0] . "'  onclick='a(this.id)'>";
                        echo "</div>";
                        $ddd = $row['name'] . ":" . $row[4];
                        echo "<button id='" . $row['name'] . ":" . $row['price'] . ":" . $row[0] . "' class='button' onclick='a(this.id)'>ใส่ตระกร้า <i class='fa fa-shopping-cart'></i></button>";
                        echo "<div class='wrap-text-blo1 p-t-35'>";

                        echo "<h4 class='txt5 color0-hov trans-0-4 m-b-13'>" . $row['name'] . "</h4>";


                        echo "<p class='m-b-20'>" . $row[2] . " Baht</p>";

                        echo "</div></div></div>";
                    }
                    ?>











                </div>
            </div>
        </div>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.4.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
    <script>
        console.log("data ----- >" + data)
        if (data == "y") {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 2000
            })
            setInterval(function() {
                window.location.href = "menuall.php";
                localStorage.removeItem("food_list");
                localStorage.removeItem("food_confirm");
            }, 2500);
        }
        if (data == "n") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'

            })
            setInterval(function() {
                window.location.href = "menuall.php";
            }, 2000);


        }

        list();

        function a(id) {

            Swal.fire(
                'ใส่ตะกร้าเรียบร้อย'
            )



            //console.log("FOOD_CONFIRM"+oo)

            var dd = localStorage.getItem("food_list") + "," + id;

            localStorage.setItem("food_list", dd);
            //  console.log("data update lasud -> " + localStorage.getItem("food_list"))

            var string_split = dd.split(',');

            $("#table_food_cart tr").remove();

            var plus = 0
            var confirm = ""
            var table = document.getElementById("table_food_cart");
            for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                console.log("----> " + string_split[count_split]);
                var string_split_1 = string_split[count_split].split(':');
                if (string_split[count_split] != "") {
                    var row = table.insertRow(0);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);

                    cell1.innerHTML = string_split_1[0];
                    cell2.innerHTML = "<center><input type='number'min='0' class='counter' id='myNumber" + string_split_1[2] + "' value='1' style='width:50px;'></center>";
                    cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                    cell4.innerHTML = "<button id='" + string_split_1[2] + "' onclick='re(this.id)'> <i class='fa fa-times' aria-hidden='true'></i></button>";

                    var n = parseFloat(string_split_1[1])
                    plus += n




                    let myDivList = document.getElementsByClassName('kadokawa')
                    myDivList[0].innerHTML = plus
                }
            }


            console.log("All = " + plus)
            var header = table.createTHead();
            var row = header.insertRow(0);
            row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
            row.insertCell(1).innerHTML = "<center>จำนวน</center>";
            row.insertCell(2).innerHTML = "<center>ราคา</center>";







        }








        function re(id) {
            //alert(id);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )


                    var dd = localStorage.getItem("food_list");
                    console.log("id button ----> " + id);
                    console.log("old data ----> " + dd);
                    var String_New_update = ""
                    var string_split = dd.split(',');
                    var count_match = -1;
                    for (var count_split = 0; count_split <= string_split.length - 1; count_split++) {
                        var string_split_1 = string_split[count_split].split(':');
                        var name_food = string_split_1[2]
                        if (id == name_food) {
                            console.log(" Match ----> " + count_split);
                            count_match = count_split;
                        } else {
                            if (string_split[count_split] != "") {
                                if (count_split == string_split.length - 1) {
                                    String_New_update += string_split[count_split]
                                } else {
                                    String_New_update += string_split[count_split]
                                }
                            }
                        }
                    }
                    console.log(" Confirm Match ----> " + count_match);
                    console.log("new data ----> " + String_New_update);
                    localStorage.setItem("food_list", String_New_update)

                    list()


                }
            })
        }






        function list() {
            $("#table_food_cart tr").remove();

            var dd = localStorage.getItem("food_list");
            var string_split = dd.split(',');


            let myDivList = document.getElementsByClassName('kadokawa')
            var plus = 0

            myDivList[0].innerHTML = ""



            var table = document.getElementById("table_food_cart");
            for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                console.log("----> " + string_split[count_split]);
                var string_split_1 = string_split[count_split].split(':');
                if (string_split[count_split] != "") {

                    var row = table.insertRow(0);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);
                    cell1.innerHTML = string_split_1[0];
                    cell2.innerHTML = "<center><input type='number' min='0' class='counter' id='myNumber" + string_split_1[2] + "' value='1' style='width:50px;'></center>";
                    cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                    cell4.innerHTML = "<button id='" + string_split_1[2] + "' onclick='re(this.id)'> <i class='fa fa-times' aria-hidden='true'></i></button>";


                    var n = parseFloat(string_split_1[1])
                    plus += n
                    myDivList[0].innerHTML = plus
                }



            }
            var header = table.createTHead();
            var row = header.insertRow(0);
            row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
            row.insertCell(1).innerHTML = "<center>จำนวน</center>";
            row.insertCell(2).innerHTML = "<center>ราคา</center>";





        }

        function Confirm_Order() {
            var qr = document.getElementById('tablename').value

            var count_all = ""

            var dd = localStorage.getItem("food_list");
            var string_split = dd.split(',');

            console.log("Raw_Data-----" + localStorage.getItem("food_list"))
            var count_all = ""
            var string_add = "";
            for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                console.log("Raw_Data_Split----> " + string_split[count_split]);
                var string_split_1 = string_split[count_split].split(':');

                var count = document.getElementById('myNumber' + string_split_1[2]).value

                count_all += "" + string_split_1[0] + ":" + string_split_1[1] + ":" + count + ","

                console.log("Counter --- >" + count_all)
            }

            window.location.href = "insertdata_menu.php?name= null," + count_all + " && all= " + count_all + "&& qr=" + qr;

            /* for (var count_split = 0; count_split < string_split.length - 1; count_split++) {
               //  console.log("Confirm_Order ----> " + string_split[count_split]);
                 var string_split_1 = string_split[count_split].split(':');

                 var count = document.getElementById('myNumber' + string_split_1[2]).value
                 console.log(count_all)*/
            /*  count_all += count
              if(count_split == string_split.length-1)
              {
               string_add += string_split[count_split]
              }
              else{
               string_add += string_split[count_split] + ","
              }
              */
            // 


            //console.log("Data _ add = " + string_add)











            /*  var qr = document.getElementById('tablename').value
                console.log("----> " + string_split[count_split]);
             
                var dd = localStorage.getItem("food_list");
                var string_split = dd.split(',');
                console.log(dd)
               

                var plus = 0

                var data

                for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                    console.log("----> " + string_split[count_split]);
                    var string_split_1 = string_split[count_split].split(':');
                  
                    if (string_split[count_split] != "") {

                        var n = parseFloat(string_split_1[1])
                        plus += n
                      
                    }

                }

                console.log("TotalAll ------>" + plus);*/




            //    localStorage.removeItem("food_list");
            // $("#table_food_cart tr").remove();
            let myDivList = document.getElementsByClassName('kadokawa')
            myDivList[0].innerHTML = ""
            //  console.log("ทดสอบ " + string_split_1);
        }




        function openQRCamera(node) {
            var reader = new FileReader();
            reader.onload = function() {
                node.value = "";
                qrcode.callback = function(res) {
                    if (res instanceof Error) {
                        alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
                    } else {
                        node.parentNode.previousElementSibling.value = res;
                    }
                };
                qrcode.decode(reader.result);
            };
            reader.readAsDataURL(node.files[0]);
        }
    </script>




    <script>
        function openQRCamera(node) {
            var reader = new FileReader();
            reader.onload = function() {
                node.value = "";
                qrcode.callback = function(res) {
                    if (res instanceof Error) {
                        alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
                    } else {
                        node.parentNode.previousElementSibling.value = res;
                    }
                };
                qrcode.decode(reader.result);
            };
            reader.readAsDataURL(node.files[0]);
        }
    </script>
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js">
    </script>





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

</body>

</html>