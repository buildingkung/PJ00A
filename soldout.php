<?php
session_start();
if (isset($_SESSION['id_login']) != "user") {
    header("Location:login.php");
}
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



?>

<html>

<head>
    <title>sold-out</title>
    <link rel="icon" type="image/png" href="Foodlis/logo.png" />
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style type="text/css">
        body {
            font-family: sans-serif;
            background-color: #eeeeee;
        }

        .file-upload {
            background-color: #ffffff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .file-upload-btn {
            width: 100%;
            margin: 0;
            color: #fff;
            background: #1FB264;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #15824B;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .file-upload-btn:hover {
            background: #1AA059;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }

        .file-upload-content {
            display: none;
            text-align: center;
        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }

        .image-upload-wrap {
            margin-top: 20px;
            border: 4px dashed #1FB264;
            position: relative;
        }

        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #1FB264;
            border: 4px dashed #ffffff;
        }

        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }

        .drag-text {
            text-align: center;
        }

        .drag-text h3 {
            font-weight: 100;
            text-transform: uppercase;
            color: #15824B;
            padding: 60px 0;
        }

        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }

        .myButton {
            background-color: #44c767;
            border-radius: 28px;
            border: 1px solid #18ab29;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Arial;
            font-size: 17px;
            padding: 16px 31px;
            text-decoration: none;
            text-shadow: 0px 1px 0px #2f6627;
        }

        .myButton:hover {
            background-color: #5cbf2a;
        }

        .myButton:active {
            position: relative;
            top: 1px;
        }

        @import url(http://fonts.googleapis.com/css?family=Raleway);

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

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            width: 100px;
            max-width: 100px;
            /* add this */

            overflow: hidden;
        }

        #img_div {
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }

        #img_div:after {
            content: "";
            display: block;
            clear: both;
        }

        img {
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }

        .ta5 {
            border: 2px solid #765942;
            border-radius: 10px;
        }

        .ta3 {
            width: 230px;
            height: 60px;
            border: 2px dashed #D1C7AC;
        }

        .ta1 {


            border: 2px dashed #D1C7AC;
        }
    </style>
</head>

<body>
<div id='cssmenu'>
        <ul>
            <li><a href='table.php'>โต๊ะอาหาร</a></li>
            <li class='active'><a href='soldout.php'>แจ้งของหมด</a></li>
            <div align='right'><a href ="login.php"class="btn btn-danger-sm" >LOGOUT <i class="fa fa-sign-out"></i></a></div>
        </ul>
    </div>
    <div><br><br></div>

    <div><br><br></div>

    <table class="table">
        <thead id="thead" style="background-color: #26a2af">
        <tr>
            <th>ไอดี</th>
            <th>ชื่อเมนู</th>
            <th>ชื่ออังกฤษ</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "config.php";
        include_once "Common.php";
        $common = new Common();
        $records = $common->getAllMenuRecords($connection);
        if ($records->num_rows>0){
            
            while ($record = $records->fetch_object()) {
                $recordId = $record->Id_food;
                $name = $record->name;
                $nameeng = $record->name_eng;
                $imgname = $record->imgname;
                $price = $record->price;
                $type = $record->type;
                $status = $record->status;
                ?>
                <tr>
                    <th><?php echo $recordId;?></th>    
                    <th><?php echo $name;?></th>
                    <th><?php echo $nameeng;?></th>
                    <?php
                     if($status == 1){
                         ?>
                        <td> <a href="soldout-scriptMenu.php?recordId=<?php echo $recordId?> & status=<?php echo $status?>" class="btn btn-danger btn-sm">sold out</a></td>
                    <?php    
                     }
                     else{
                    ?>
                        <td><a href ="instock-scriptMenu.php?recordId=<?php echo $recordId?> & status=<?php echo $status?>" class="btn btn-primary btn-sm">in stock</a> </td>
                    <?php
                     }
                     ?>
                </tr>
                <?php
                
            }
        }
        ?>
        </tbody>
    </table>

    

        

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>
</body>
</html>