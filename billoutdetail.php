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


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM `bill_detail` where Id_Bill = $id";
    $result_1 = $conn->query($sql1);
    $row_1 = mysqli_fetch_array($result_1);
    //echo '<script type="text/javascript">';
    //echo "var getData1 = '$row_1[2]';"; // ส่งค่า $data จาก PHP ไปยังตัวแปร data ของ Javascript
    //echo '</script>';

}


?>

<html>

<head>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class='print' style="border: 1px solid #a1a1a1; width: 300px; background: white; padding: 10px; margin: 0 auto; text-align: center;">

                <div class="invoice-title" align="right">
                        <strong>No.<?php echo $row_1[2]  ?></strong>
                    </div>
                    
                    <div class="invoice-title" align="center">
                        <h1>The Never Ending Summer</h1>
                    </div>

                    
                        <table class="table table-condensed" id="tb1">
                            <tr>
                                
                                <th align="left" >Desc.</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th align="right">Amount</th>
                            </tr>

                            <?php
                                $Total = 0;
                                while ($row_1 = mysqli_fetch_array($result_1)) {
                                    $Amount = $row_1['Product_Price'] * $row_1['Quantity'];
                            ?>
                                <tr>
                                    <td><?php echo $row_1['Product_Name'];?></td>
                                    <td><?php echo $row_1['Product_Price'];?></td>
                                    <td><?php echo $row_1['Quantity'];?></td>
                                    <td><?php echo  $Amount;?></td>
                                </tr>
                            <?php
                                $Total = $Total + $Amount;
                                }
                            ?>
                        </table>
                    

                    <div align="right">
                            <?php 
                                $Vat = 0 ;
                                $Vat = $Total * 0.07;
                                $Pay = 0;
                                $Pay = $Total + $Vat;
                            ?>
                        <p>ราคารวม : <?php echo $Total  ?></p>
                        <p>Vat : <?php echo $Vat  ?></p>
                        <p>Pay : <?php echo $Pay  ?></p>
                    </div>

                    <input style="padding:5px;" value="Print Document" type="button" onclick="myFunction()" class="button"></input>
                </div>
                <div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


<script type="text/javascript">
    function myFunction() 
    {
        window.print();
    }

    var table = document.getElementById("tb1");
    var Pay = document.getElementById("Pay");
    var vat = document.getElementById("vat");
    var papa = document.getElementById("papa");
    console.log("Raw_Data --- " + getData1)
    var string_split = getData1.split(",");
    var plus = 0
    var vat7 = 0
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
            cell3.innerHTML = "<center>" + string_split_1[1] + "</center>";

            var total = string_split_1[2] * string_split_1[1]
            console.log("TOTAL------>" + total)
            cell4.innerHTML = "<center>" + total + "</center>";

            var n = parseFloat(string_split_1[1])
            plus += total
        }
    }
    vat7 = plus * 0.07;
    var totalall = 0;
    totalall = plus + vat7;
    papa.innerHTML = "ราคารวม &nbsp;&nbsp;<b>" + plus + "</b>";
    vat.innerHTML = "ภาษีมูลค่าเพิ่ม &nbsp;&nbsp;<b>" + vat7.toFixed(2) + "</b>";
    Pay.innerHTML = "ราคารวมทั้งหมด &nbsp;&nbsp;<b>" + totalall + "</b>";

    var header = table.createTHead();
    var row = header.insertRow(0);

    row.insertCell(0).innerHTML = "<td class='text-center'><strong>Desc.</strong></td>";
    row.insertCell(1).innerHTML = "<td class='text-right'><strong>Qty</strong></td>";
    row.insertCell(2).innerHTML = "<td class='text-right'><strong>ราคา</strong></td>";
    row.insertCell(3).innerHTML = "<td class='text-right'><strong>Amount</strong></td>";
</script>


<style>
    @media print {
        .button {
            display: none;
        }
    }
</style>



</html>