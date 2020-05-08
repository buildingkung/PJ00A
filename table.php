<?php
session_start();
if (isset($_SESSION['id_login']) != "user") {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>table</title>
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
    .container {
        position: relative;
        width: 600px;
        height: 400px;
        top: 50px;
    }

    .text-block {
        position: absolute;
        bottom: 0px;
        right: 0px;
        background-color: black;
        color: white;
        padding-left: 0px;
        padding-right: 0px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        overflow: auto;
        width: 90%;
    }

    .row::after {
        content: "";
        clear: both;
        display: table;
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

    #cssmenu,
        #cssmenu ul,
        #cssmenu ul li,
        #cssmenu ul li a {
            margin: 0;
            padding: 0;
            border: 0;
            list-style: none;
            line-height: 1;
            display: block;
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        #cssmenu:after,
        #cssmenu>ul:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        #cssmenu {
            width: auto;
            border-bottom: 3px solid #47c9af;
            font-family: Raleway, sans-serif;
            line-height: 1;
        }

        #cssmenu ul {
            background: #ffffff;
        }

        #cssmenu>ul>li {
            float: left;
        }

        #cssmenu.align-center>ul {
            font-size: 0;
            text-align: center;
        }

        #cssmenu.align-center>ul>li {
            display: inline-block;
            float: none;
        }

        #cssmenu.align-right>ul>li {
            float: right;
        }

        #cssmenu.align-right>ul>li>a {
            margin-right: 0;
            margin-left: -4px;
        }

        #cssmenu>ul>li>a {
            z-index: 2;
            padding: 18px 25px 12px 25px;
            font-size: 15px;
            font-weight: 400;
            text-decoration: none;
            color: #444444;
            -webkit-transition: all .2s ease;
            -moz-transition: all .2s ease;
            -ms-transition: all .2s ease;
            -o-transition: all .2s ease;
            transition: all .2s ease;
            margin-right: -4px;
        }

        #cssmenu>ul>li.active>a,
        #cssmenu>ul>li:hover>a,
        #cssmenu>ul>li>a:hover {
            color: #ffffff;
        }

        #cssmenu>ul>li>a:after {
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: -1;
            width: 100%;
            height: 120%;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            content: "";
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;
            transition: all .2s ease;
            -webkit-transform: perspective(5px) rotateX(2deg);
            -webkit-transform-origin: bottom;
            -moz-transform: perspective(5px) rotateX(2deg);
            -moz-transform-origin: bottom;
            transform: perspective(5px) rotateX(2deg);
            transform-origin: bottom;
        }

        #cssmenu>ul>li.active>a:after,
        #cssmenu>ul>li:hover>a:after,
        #cssmenu>ul>li>a:hover:after {
            background: #47c9af;
        }
</style>

<script type="text/javascript" src="jquery-1.4.1.min.js"></script>

<script type="text/javascript">
    setInterval(function() {
        $(function() {
            // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที
            // 1 วินาที่ เท่า 1000
            // คำสั่งที่ต้องการให้ทำงาน ทุก ๆ 3 วินาที
            var getData1 = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                type: "GET",
                url: "getData.php",
                data: "rev=1",
                async: false,
                success: function(getData1) {

                    var table = document.getElementById("tb1");
                    $("#tb1 tr").remove();
                    var plus = 0

                    console.log("Raw_Data --- " + getData1)
                    var string_split = getData1.split(",");
                    console.log("string_split ---- " + string_split)
                    for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                        console.log("----> " + string_split[count_split] + " : " + string_split[count_split].length);
                        var string_split_1 = string_split[count_split].split(':');
                        if (string_split[count_split] != "" && string_split[count_split].length > 1) {
                            var row = table.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3);



                            cell1.innerHTML = string_split_1[0];
                            cell2.innerHTML = "<center>" + string_split_1[2] + "</center>";

                            var total = string_split_1[2] * string_split_1[1]
                            console.log("TOTAL------>" + total)

                            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                            cell4.innerHTML = "<center>" + total + "</center>";
                            let myDivList = document.getElementsByClassName('kadokawa1')



                            var n = parseFloat(string_split_1[1])
                            plus += total
                            myDivList[0].innerHTML = plus
                        }
                    }

                    var header = table.createTHead();
                    var row = header.insertRow(0);
                    row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
                    row.insertCell(1).innerHTML = "<center>จำนวน</center>";
                    row.insertCell(2).innerHTML = "<center>ราคาต่อจาน</center>";
                    row.insertCell(3).innerHTML = "<center>ราคาทั้งหมด</center>";



                }
            }).responseText;



            var getData2 = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                type: "GET",
                url: "getData.php",
                data: "rev=2",
                async: false,
                success: function(getData1) {

                    var table = document.getElementById("tb2");
                    $("#tb2 tr").remove();
                    var plus = 0

                    console.log("Raw_Data --- " + getData1)
                    var string_split = getData1.split(",");
                    console.log("string_split ---- " + string_split)
                    for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                        console.log("----> " + string_split[count_split] + " : " + string_split[count_split].length);
                        var string_split_1 = string_split[count_split].split(':');
                        if (string_split[count_split] != "" && string_split[count_split].length > 1) {
                            var row = table.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3)



                            cell1.innerHTML = string_split_1[0];
                            cell2.innerHTML = "<center>" + string_split_1[2] + "</center>";

                            var total = string_split_1[2] * string_split_1[1]
                            console.log("TOTAL------>" + total)

                            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                            cell4.innerHTML = "<center>" + total + "</center>";
                            let myDivList = document.getElementsByClassName('kadokawa2')



                            var n = parseFloat(string_split_1[1])
                            plus += total
                            myDivList[0].innerHTML = plus
                        }
                    }

                    var header = table.createTHead();
                    var row = header.insertRow(0);
                    row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
                    row.insertCell(1).innerHTML = "<center>จำนวน</center>";
                    row.insertCell(2).innerHTML = "<center>ราคาต่อจาน</center>";
                    row.insertCell(3).innerHTML = "<center>ราคาทั้งหมด</center>";



                }
            }).responseText;


            var getData3 = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                type: "GET",
                url: "getData.php",
                data: "rev=3",
                async: false,
                success: function(getData1) {

                    var table = document.getElementById("tb3");
                    $("#tb3 tr").remove();
                    var plus = 0

                    console.log("Raw_Data --- " + getData1)
                    var string_split = getData1.split(",");
                    console.log("string_split ---- " + string_split)
                    for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                        console.log("----> " + string_split[count_split] + " : " + string_split[count_split].length);
                        var string_split_1 = string_split[count_split].split(':');
                        if (string_split[count_split] != "" && string_split[count_split].length > 1) {
                            var row = table.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3)



                            cell1.innerHTML = string_split_1[0];
                            cell2.innerHTML = "<center>" + string_split_1[2] + "</center>";

                            var total = string_split_1[2] * string_split_1[1]
                            console.log("TOTAL------>" + total)

                            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                            cell4.innerHTML = "<center>" + total + "</center>";
                            let myDivList = document.getElementsByClassName('kadokawa3')



                            var n = parseFloat(string_split_1[1])
                            plus += total
                            myDivList[0].innerHTML = plus
                        }
                    }

                    var header = table.createTHead();
                    var row = header.insertRow(0);
                    row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
                    row.insertCell(1).innerHTML = "<center>จำนวน</center>";
                    row.insertCell(2).innerHTML = "<center>ราคาต่อจาน</center>";
                    row.insertCell(3).innerHTML = "<center>ราคาทั้งหมด</center>";



                }
            }).responseText;

            var getData4 = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                type: "GET",
                url: "getData.php",
                data: "rev=4",
                async: false,
                success: function(getData1) {

                    var table = document.getElementById("tb4");
                    $("#tb4 tr").remove();
                    var plus = 0

                    console.log("Raw_Data --- " + getData1)
                    var string_split = getData1.split(",");
                    console.log("string_split ---- " + string_split)
                    for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                        console.log("----> " + string_split[count_split] + " : " + string_split[count_split].length);
                        var string_split_1 = string_split[count_split].split(':');
                        if (string_split[count_split] != "" && string_split[count_split].length > 1) {
                            var row = table.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3)



                            cell1.innerHTML = string_split_1[0];
                            cell2.innerHTML = "<center>" + string_split_1[2] + "</center>";

                            var total = string_split_1[2] * string_split_1[1]
                            console.log("TOTAL------>" + total)

                            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                            cell4.innerHTML = "<center>" + total + "</center>";
                            let myDivList = document.getElementsByClassName('kadokawa4')



                            var n = parseFloat(string_split_1[1])
                            plus += total
                            myDivList[0].innerHTML = plus
                        }
                    }

                    var header = table.createTHead();
                    var row = header.insertRow(0);
                    row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
                    row.insertCell(1).innerHTML = "<center>จำนวน</center>";
                    row.insertCell(2).innerHTML = "<center>ราคาต่อจาน</center>";
                    row.insertCell(3).innerHTML = "<center>ราคาทั้งหมด</center>";



                }
            }).responseText;

            var getData5 = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                type: "GET",
                url: "getData.php",
                data: "rev=5",
                async: false,
                success: function(getData1) {

                    var table = document.getElementById("tb5");
                    $("#tb5 tr").remove();
                    var plus = 0

                    console.log("Raw_Data --- " + getData1)
                    var string_split = getData1.split(",");
                    console.log("string_split ---- " + string_split)
                    for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                        console.log("----> " + string_split[count_split] + " : " + string_split[count_split].length);
                        var string_split_1 = string_split[count_split].split(':');
                        if (string_split[count_split] != "" && string_split[count_split].length > 1) {
                            var row = table.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3)



                            cell1.innerHTML = string_split_1[0];
                            cell2.innerHTML = "<center>" + string_split_1[2] + "</center>";

                            var total = string_split_1[2] * string_split_1[1]
                            console.log("TOTAL------>" + total)

                            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                            cell4.innerHTML = "<center>" + total + "</center>";
                            let myDivList = document.getElementsByClassName('kadokawa5')



                            var n = parseFloat(string_split_1[1])
                            plus += total
                            myDivList[0].innerHTML = plus
                        }
                    }

                    var header = table.createTHead();
                    var row = header.insertRow(0);
                    row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
                    row.insertCell(1).innerHTML = "<center>จำนวน</center>";
                    row.insertCell(2).innerHTML = "<center>ราคาต่อจาน</center>";
                    row.insertCell(3).innerHTML = "<center>ราคาทั้งหมด</center>";



                }
            }).responseText;

            var getData6 = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                type: "GET",
                url: "getData.php",
                data: "rev=6",
                async: false,
                success: function(getData1) {

                    var table = document.getElementById("tb6");
                    $("#tb6 tr").remove();
                    var plus = 0

                    console.log("Raw_Data --- " + getData1)
                    var string_split = getData1.split(",");
                    console.log("string_split ---- " + string_split)
                    for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                        console.log("----> " + string_split[count_split] + " : " + string_split[count_split].length);
                        var string_split_1 = string_split[count_split].split(':');
                        if (string_split[count_split] != "" && string_split[count_split].length > 1) {
                            var row = table.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3)



                            cell1.innerHTML = string_split_1[0];
                            cell2.innerHTML = "<center>" + string_split_1[2] + "</center>";

                            var total = string_split_1[2] * string_split_1[1]
                            console.log("TOTAL------>" + total)

                            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                            cell4.innerHTML = "<center>" + total + "</center>";
                            let myDivList = document.getElementsByClassName('kadokawa6')



                            var n = parseFloat(string_split_1[1])
                            plus += total
                            myDivList[0].innerHTML = plus
                        }
                    }

                    var header = table.createTHead();
                    var row = header.insertRow(0);
                    row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
                    row.insertCell(1).innerHTML = "<center>จำนวน</center>";
                    row.insertCell(2).innerHTML = "<center>ราคาต่อจาน</center>";
                    row.insertCell(3).innerHTML = "<center>ราคาทั้งหมด</center>";



                }
            }).responseText;

            var getData7 = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                type: "GET",
                url: "getData.php",
                data: "rev=7",
                async: false,
                success: function(getData1) {

                    var table = document.getElementById("tb7");
                    $("#tb7 tr").remove();
                    var plus = 0

                    console.log("Raw_Data --- " + getData1)
                    var string_split = getData1.split(",");
                    console.log("string_split ---- " + string_split)
                    for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                        console.log("----> " + string_split[count_split] + " : " + string_split[count_split].length);
                        var string_split_1 = string_split[count_split].split(':');
                        if (string_split[count_split] != "" && string_split[count_split].length > 1) {
                            var row = table.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3)



                            cell1.innerHTML = string_split_1[0];
                            cell2.innerHTML = "<center>" + string_split_1[2] + "</center>";

                            var total = string_split_1[2] * string_split_1[1]
                            console.log("TOTAL------>" + total)

                            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                            cell4.innerHTML = "<center>" + total + "</center>";
                            let myDivList = document.getElementsByClassName('kadokawa7')



                            var n = parseFloat(string_split_1[1])
                            plus += total
                            myDivList[0].innerHTML = plus
                        }
                    }

                    var header = table.createTHead();
                    var row = header.insertRow(0);
                    row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
                    row.insertCell(1).innerHTML = "<center>จำนวน</center>";
                    row.insertCell(2).innerHTML = "<center>ราคาต่อจาน</center>";
                    row.insertCell(3).innerHTML = "<center>ราคาทั้งหมด</center>";



                }
            }).responseText;

            var getData8 = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                type: "GET",
                url: "getData.php",
                data: "rev=8",
                async: false,
                success: function(getData1) {

                    var table = document.getElementById("tb8");
                    $("#tb8 tr").remove();
                    var plus = 0

                    console.log("Raw_Data --- " + getData1)
                    var string_split = getData1.split(",");
                    console.log("string_split ---- " + string_split)
                    for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                        console.log("----> " + string_split[count_split] + " : " + string_split[count_split].length);
                        var string_split_1 = string_split[count_split].split(':');
                        if (string_split[count_split] != "" && string_split[count_split].length > 1) {
                            var row = table.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3)



                            cell1.innerHTML = string_split_1[0];
                            cell2.innerHTML = "<center>" + string_split_1[2] + "</center>";

                            var total = string_split_1[2] * string_split_1[1]
                            console.log("TOTAL------>" + total)

                            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                            cell4.innerHTML = "<center>" + total + "</center>";
                            let myDivList = document.getElementsByClassName('kadokawa8')



                            var n = parseFloat(string_split_1[1])
                            plus += total
                            myDivList[0].innerHTML = plus
                        }
                    }

                    var header = table.createTHead();
                    var row = header.insertRow(0);
                    row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
                    row.insertCell(1).innerHTML = "<center>จำนวน</center>";
                    row.insertCell(2).innerHTML = "<center>ราคาต่อจาน</center>";
                    row.insertCell(3).innerHTML = "<center>ราคาทั้งหมด</center>";



                }
            }).responseText;

            var getData9 = $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                type: "GET",
                url: "getData.php",
                data: "rev=9",
                async: false,
                success: function(getData1) {

                    var table = document.getElementById("tb9");
                    $("#tb9 tr").remove();
                    var plus = 0

                    console.log("Raw_Data --- " + getData1)
                    var string_split = getData1.split(",");
                    console.log("string_split ---- " + string_split)
                    for (var count_split = string_split.length - 1; count_split > 0; count_split--) {
                        console.log("----> " + string_split[count_split] + " : " + string_split[count_split].length);
                        var string_split_1 = string_split[count_split].split(':');
                        if (string_split[count_split] != "" && string_split[count_split].length > 1) {
                            var row = table.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            var cell4 = row.insertCell(3)



                            cell1.innerHTML = string_split_1[0];
                            cell2.innerHTML = "<center>" + string_split_1[2] + "</center>";

                            var total = string_split_1[2] * string_split_1[1]
                            console.log("TOTAL------>" + total)

                            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";
                            cell4.innerHTML = "<center>" + total + "</center>";
                            let myDivList = document.getElementsByClassName('kadokawa9')



                            var n = parseFloat(string_split_1[1])
                            plus += total
                            myDivList[0].innerHTML = plus
                        }
                    }

                    var header = table.createTHead();
                    var row = header.insertRow(0);
                    row.insertCell(0).innerHTML = "<center>รายการอาหาร</center>";
                    row.insertCell(1).innerHTML = "<center>จำนวน</center>";
                    row.insertCell(2).innerHTML = "<center>ราคาต่อจาน</center>";
                    row.insertCell(3).innerHTML = "<center>ราคาทั้งหมด</center>";



                }
            }).responseText;



        });
    }, 1000);
</script>





<body class="animsition">

<div id='cssmenu'>
        <ul>
            <li class='active' ><a href='table.php'>โต๊ะอาหาร</a></li>
            <li ><a href='soldout.php'>แจ้งของหมด</a></li>
            <div align='right'><a href ="login.php"class="btn btn-danger-sm" >LOGOUT <i class="fa fa-sign-out"></i></a></div>
        </ul>
    </div>
    <!-- Gallery -->
    <div class="section-gallery p-t-118 p-b-100">


        <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">

                <img src="img/table1.png" alt="IMG-GALLERY">
                <div class="text-block">
                    <h4>เมนูที่สั่ง</h4>
                    <table border="1" style="width: 100%" id="tb1">

                    </table>
                    <table border="1" style="width: 100%" id="total1">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>
                            <td>
                                <center><span id="ter" class="kadokawa1"></span></center>
                            </td>
                        </tr>
                    </table>
                </div>
                <form method="post" action="table_out.php">
                    <button class='button' name="attila"> ลุกแล้ว<i class='fas fa-ban'></i> </button>
                </form>

                <form method="post" action="bills.php">
                    <button class='button' name="attila"> ออกบิล </button>
                </form>

            </div>




            <!-- - -->
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
                <img src="img/table2.png" alt="IMG-GALLERY">
                <div class="text-block">
                    <h4>เมนูที่สั่ง</h4>
                    <table border="1" style="width: 100%;" id="tb2">

                    </table>
                    <table border="1" style="width: 100%" id="total2">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>
                            <td>
                                <center><span id="ter" class="kadokawa2"></span></center>
                            </td>
                        </tr>
                    </table>
                </div>
                <form method="post" action="table_out.php">
                    <button class='button' name="nero"> ลุกแล้ว<i class='fas fa-ban'></i> </button>
                </form>
                <form method="post" action="bills.php">
                    <button class='button' name="nero"> ออกบิล </button>
                </form>
            </div>

            <!-- - -->
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
                <img src="img/table3.png" alt="IMG-GALLERY">

                <div class="text-block">
                    <h4>เมนูที่สั่ง</h4>
                    <table border="1" style="width: 100%;" id="tb3">

                    </table>
                    <table border="1" style="width: 100%" id="total3">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>
                            <td>
                                <center><span id="ter" class="kadokawa3"></span></center>
                            </td>
                        </tr>
                    </table>
                </div>

                <form method="post" action="table_out.php">
                    <button class='button' name="shiki"> ลุกแล้ว<i class='fas fa-ban'></i> </button>
                </form>
                <form method="post" action="bills.php">
                    <button class='button' name="shiki"> ออกบิล</i> </button>
                </form>
            </div>

            <!-- - -->
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
                <img src="img/table4.png" alt="IMG-GALLERY">

                <div class="text-block">
                    <h4>เมนูที่สั่ง</h4>
                    <table border="1" style="width: 100%;" id="tb4">

                    </table>
                    <table border="1" style="width: 100%" id="total4">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>
                            <td>
                                <center><span id="ter" class="kadokawa4"></span></center>
                            </td>
                        </tr>
                    </table>
                </div>

                <form method="post" action="table_out.php">
                    <button class='button' name="atolfo"> ลุกแล้ว<i class='fas fa-ban'></i> </button>
                </form>
                <form method="post" action="bills.php">
                    <button class='button' name="atolfo"> ออกบิล</i> </button>
                </form>
            </div>

            <!-- - -->
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
                <img src="img/table5.png" alt="IMG-GALLERY">

                <div class="text-block">
                    <h4>เมนูที่สั่ง</h4>
                    <table border="1" style="width: 100%;" id="tb5">

                    </table>
                    <table border="1" style="width: 100%" id="total5">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>
                            <td>
                                <center><span id="ter" class="kadokawa5"></span></center>
                            </td>
                        </tr>
                    </table>
                </div>

                <form method="post" action="table_out.php">
                    <button class='button' name="gundam"> ลุกแล้ว<i class='fas fa-ban'></i> </button>
                </form>
                <form method="post" action="bills.php">
                    <button class='button' name="gundam"> ออกบิล</i> </button>
                </form>
            </div>

            <!-- - -->
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior guests">
                <img src="img/table6.png" alt="IMG-GALLERY">

                <div class="text-block">
                    <h4>เมนูที่สั่ง</h4>
                    <table border="1" style="width: 100%;" id="tb6">

                    </table>
                    <table border="1" style="width: 100%" id="total6">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>
                            <td>
                                <center><span id="ter" class="kadokawa6"></span></center>
                            </td>
                        </tr>
                    </table>
                </div>

                <form method="post" action="table_out.php">
                    <button class='button' name="aoi"> ลุกแล้ว<i class='fas fa-ban'></i> </button>
                </form>
                <form method="post" action="bills.php">
                    <button class='button' name="aoi"> ออกบิล</i> </button>
                </form>
            </div>

            <!-- - -->
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
                <img src="img/table7.png" alt="IMG-GALLERY">

                <div class="text-block">
                    <h4>เมนูที่สั่ง</h4>
                    <table border="1" style="width: 100%;" id="tb7">

                    </table>
                    <table border="1" style="width: 100%" id="total7">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>
                            <td>
                                <center><span id="ter" class="kadokawa7"></span></center>
                            </td>
                        </tr>
                    </table>
                </div>

                <form method="post" action="table_out.php">
                    <button class='button' name="miyabi"> ลุกแล้ว<i class='fas fa-ban'></i> </button>
                </form>
                <form method="post" action="bills.php">
                    <button class='button' name="miyabi"> ออกบิล</i> </button>
                </form>
            </div>

            <!-- - -->
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
                <img src="img/table8.png" alt="IMG-GALLERY">

                <div class="text-block">
                    <h4>เมนูที่สั่ง</h4>
                    <table border="1" style="width: 100%;" id="tb8">

                    </table>
                    <table border="1" style="width: 100%" id="total8">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>
                            <td>
                                <center><span id="ter" class="kadokawa8"></span></center>
                            </td>
                        </tr>
                    </table>
                </div>

                <form method="post" action="table_out.php">
                    <button class='button' name="nadeshigo"> ลุกแล้ว<i class='fas fa-ban'></i> </button>
                </form>
                <form method="post" action="bills.php">
                    <button class='button' name="nadeshigo"> ออกบิล</i> </button>
                </form>
            </div>

            <!-- - -->
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
                <img src="img/table9.png" alt="IMG-GALLERY">

                <div class="text-block">
                    <h4>เมนูที่สั่ง</h4>
                    <table border="1" style="width: 100%;" id="tb9">

                    </table>
                    <table border="1" style="width: 100%" id="total9">
                        <tr>
                            <td>รวมราคาทั้งหมด</td>
                            <td>
                                <center><span id="ter" class="kadokawa9"></span></center>
                            </td>
                        </tr>
                    </table>
                </div>

                <form method="post" action="table_out.php">
                    <button class='button' name="hanego"> ลุกแล้ว<i class='fas fa-ban'></i> </button>
                </form>
                <form method="post" action="bills.php">
                    <button class='button' name="hanego"> ออกบิล</i> </button>
                </form>
            </div>
        </div>


    </div>





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
    <script type="text/javascript" src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>