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

/*$sql = "SELECT * FROM `bill_detail`";
$result = $conn->query($sql);

$d = $_POST['date'];

    วันที่ :
            <select name="date">
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
    else if($s == 2){
        $sql = "SELECT DISTINCT Product_Name, Date, SUM(Quantity) AS Quantity FROM bill_detail where Date LIKE '2020-$m-%' Group by Product_Name Order by Date ASC";
        $result = $conn->query($sql);
    }*/

    $s = " ";
if (isset($_POST['gotop'])) {
    $s = $_POST['static'];
    
    if($s == 1)
    {
        $sql = "SELECT DISTINCT  Product_Name, Date, SUM(Quantity) AS Quantity FROM `bill_detail` Group by Product_Name Order by Quantity  DESC LIMIT 5";
        $result = $conn->query($sql);
    }

    if($s == 2)
    {
        $sql = "SELECT DISTINCT  Product_Name, Date, SUM(Quantity) AS Quantity FROM `bill_detail` Group by Product_Name Order by Quantity  DESC LIMIT 10";
        $result = $conn->query($sql);
    }
}  
else {
    $sql = "SELECT DISTINCT  Product_Name, Date, SUM(Quantity) AS Quantity FROM `bill_detail` Group by Product_Name Order by  Quantity  DESC LIMIT 10";
    $result = $conn->query($sql);
}



$sqltime = "SELECT * FROM `bill_detail`";
$resulttime = $conn->query($sqltime);

$st = ' ';
if (isset($_POST['gotime'])) {
    
    $st = $_POST['statictime'];
    
}  

if (isset($_POST['gomount'])) {
    
    $m = $_POST['month'];
    $y = $_POST['year'];
    
        $sqltime = "SELECT DISTINCT Product_Name, Date,Quantity FROM bill_detail where Date LIKE '$y-$m%' Group by Product_Name Order by Date ASC";
        $resulttime = $conn->query($sqltime);
  
}  


if (isset($_POST['godate'])) {
    $ds = $_POST['startdate'];
    $de = $_POST['enddate'];
    
    if($de == null)
    {
        $sqltime = "SELECT DISTINCT Product_Name, Date, Quantity FROM `bill_detail` where Date LIKE  '$ds%'";
        $resulttime = $conn->query($sqltime);
    }
    else{
        $sqltime = "SELECT DISTINCT Product_Name, Date, Quantity FROM `bill_detail` where Date BETWEEN '$ds%' AND '$de%'";
        $resulttime = $conn->query($sqltime);
    }
  
}  




if(isset($_POST['cal'])){
   
    $per = $_POST['Percent'];

    if ($per == 1) {
        $command = escapeshellcmd('py Apriori1.py');
        $output = shell_exec($command);
        echo $output;
    
        echo '<script>window.location.href="insertpro.php";</script>';
    }

    elseif ($per == 2) {
        $command = escapeshellcmd('py Apriori2.py');
        $output = shell_exec($command);
        echo $output;
    
        echo '<script>window.location.href="insertpro.php";</script>';
    }

    elseif ($per == 3) {
        $command = escapeshellcmd('py Apriori3.py');
        $output = shell_exec($command);
        echo $output;
    
        echo '<script>window.location.href="insertpro.php";</script>';
    }

    elseif ($per == 4) {
        $command = escapeshellcmd('py Apriori4.py');
        $output = shell_exec($command);
        echo $output;
    
        echo '<script>window.location.href="insertpro.php";</script>';
    }
    

}




?>
<html>

<head>
    <title>insertpro</title>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="w3.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li class='active'> <a href='insertpro.php'>สถิติ</a></li>
            <li><a href='billout.php'>จัดการบิล</a></li>
            <li><a href='updatepro.php'>จัดการโปรโมชัน</a></li>
            <li><a href='updaterec.php'>จัดการเมนูแนะนำ</a></li>
            <li><a href='updatemenu.php'>จัดการเมนูทั้งหมด</a></li>
            <div align='right'><a href ="login.php"class="btn btn-danger-sm" >LOGOUT <i class="fa fa-sign-out"></i></a></div>
        </ul>

        
    </div>
    <div><br><br></div>
    
    
    <div>
        <form method="POST" action="insertpro.php" enctype="multipart/form-data" >
            
            
            
            <select id="Percent" name="Percent">
                <option value="0">--เลือกเปอร์เซ็น--</option>
                <option value="1">80%</option>
                <option value="2">60%</option>
                <option value="3">40%</option>
                <option value="4">20%</option>
            </select>
            
            <button type='submit' name='cal' class="btn btn-success" >calculate</button>
            
            
            <table class="w3-table-all">
                <thead style="background-color: #26a2af">
                    <tr>
                        <th>รายการแรก</th>
                        <th>รายการที่สอง</th>
                        <th>รายการที่สาม</th>
                        <th>ร้อยละ</th>
                    </tr>
                </thead>
                <tbody style="background-color: #ffffff">
                    <?php
                        $sqlai ="SELECT * FROM ai WHERE Name_A NOT LIKE '%N/A%' AND NOT Name_B='N/A' ORDER BY Percent DESC LIMIT 10";
                        $resultai = $conn->query($sqlai);

                    while ($rowai = mysqli_fetch_array($resultai)) {
                    ?>
                        <tr>
                            <?php
                                $none = "-";
                                $list = $rowai['Name_A'];
                                $first = substr($list, 2 ,strpos($list, ","));
                                $first1 = substr($first,0,-3);
                                $second = substr($list,strpos($list, ","),strpos($list, "]") );
                                $second1 = substr($second,3);
                                $second2 = substr($second1,0,-2);
                            ?>
                            <td><?php echo $first1;?></td>
                            <td><?php echo $second2;?></td>
                            <?php 
                                if ($second2 == $rowai['Name_B']){ 
                             ?>
                                    <td><?php echo $none;?></td>
                            <?php
								}
                                else {
                            ?>
                                    <td><?php echo $rowai['Name_B'];?></td>
                             <?php   
                                }
                            ?>
                            <td><?php echo $rowai['Percent'];?></td>
                        </tr>
                        <?php
                        
                    }
                    ?>
                </tbody>
            </table>
            <br></br>
            <?php
            /*<a href ="the1.php"class="btn btn-primary" align='center'>calculate</a> */
            ?>
        </form>
    </die>
    <div><br><br></div>

    <div class="col-xs-6" >
        <p></P>
        <form method="POST" action="insertpro.php" enctype="multipart/form-data" >
            <select id="static" name="static">
                <option value="0">--เลือกประเภท--</option>
                <option value="1">5 อันดับสูงสุด</option>
                <option value="2">10 อันดับสูงสุด</option>    
            </select>    
            <button type='submit' name='gotop' class="btn btn-success" >Go</button>
            <?php
                if( $s == 1 ){
                    echo "<h2>TOP 5</h2>";
                }
                else{
                    echo "<h2>TOP 10</h2>";
                }
            ?>
            <table id="bill_detail" >
                <thead style="background-color: #26a2af">
                    <tr>
                        <th>Date</th>
                        <th>ชื่อ</th>
                        <th>จำนวน</th>
                    </tr>
                </thead>
                <tbody style="background-color: #ffffff">
                    <?php

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Date'];?></td>
                            <td><?php echo $row['Product_Name'];?></td>
                            <td><?php echo $row['Quantity'];?></td>
                        </tr>
                        <?php
                        
                    }
                    ?>
                </tbody>
            </table>

        </form>
    </div>

    <div class="col-xs-6" >
        <p></P>
        <form method="POST" action="insertpro.php" enctype="multipart/form-data" >
            <select id="statictime" name="statictime">
                <option value="0">--เลือกประเภท--</option>
                <option value="1">รายเดือน</option>
                <option value="2">ช่วงเวลา</option>
            </select>
            <button type='submit' name='gotime' class="btn btn-success" >Go</button>

            <?php
                if( $st == 1 ){
            ?>        
                    เดือน :
                    <select  name="month">
                        <option value="00">--เลือกเดือน--</option>
                        <option value="01">มกราคม</option>
                        <option value="02">กุมภาพันธ์</option>
                        <option value="03">มีนาคม</option>
                        <option value="04">เมษายน</option>
                        <option value="05">พฤษภาคม</option>
                        <option value="06">มิถุนายน</option>
                        <option value="07">กรกฎาคม</option>
                        <option value="08">สิงหาคม</option>
                        <option value="09">กันยายน</option>
                        <option value="10">ตุลาคม</option>
                        <option value="11">พฤศจิกายน</option>
                        <option value="12">ธันวาคม</option>
                    </select>
                    ปี : 
                    <select id="year"  name="year">
                    
                    </select>

                    <button type='submit' name='gomount' class="btn btn-success" >Go</button>
            <?php
                }
                else if ($st == 2){
                ?>
                    
                    <input type="date" name="startdate" >
                    ถึง
                    <input type="date" name="enddate" >
                    <button type="submit" name="godate" class="btn btn-primary">go</button>
                    

              <?php      
                }
            ?>
            
            
       
           
            

            <table id="bill_detail" class="w3-table-all">
                <thead style="background-color: #26a2af">
                    <tr>
                        <th>Date</th>
                        <th>ชื่อ</th>
                        <th>จำนวน</th>
                    </tr>
                </thead>
                <tbody style="background-color: #ffffff">
                    <?php

                    while ($rowt = mysqli_fetch_array($resulttime)) {
                    ?>
                        <tr>
                            <td><?php echo $rowt['Date'];?></td>
                            <td><?php echo $rowt['Product_Name'];?></td>
                            <td><?php echo $rowt['Quantity'];?></td>
                        </tr>
                        <?php
                        
                    }
                    ?>
                </tbody>
            </table>

        </form>
    </div>

    
    

    <div><br><br></div>



    <script type="text/javascript">
        var year = new Date().getFullYear();
        var till = 2000;
        var options = "";
        for(var y=year; y>=till; y--){
        options += "<option>"+ y +"</option>";
        }
        document.getElementById("year").innerHTML = options;
        
    </script>

</body>

</html>