<?php
include "navbar.php";
if (isset($_POST["transfer"])){
    $ac_num = $_POST["acc_number"]; 
    $d_amt = $_POST["t_amount"]; 
    $con = mysqli_connect("localhost","root","","bank_manage");
    $current_balance="";
    $ac_num_safe = mysqli_real_escape_string($con, $ac_num);
    $sl = "SELECT st_amt FROM account_info WHERE acc_num='$ac_num_safe'";
    $rs = mysqli_query($con, $sl);
    if ($rs && mysqli_num_rows($rs) > 0) {
        $row = mysqli_fetch_assoc($rs);
        $current_balance = $row['st_amt']; 
    }
    if($current_balance>=$d_amt){
        $new_bal= $current_balance - $d_amt;
        $us = "UPDATE account_info SET st_amt=$new_bal WHERE acc_num='$ac_num_safe'";
        mysqli_query($con, $us);
        echo"<script>
        alert('Money transfer sucessfully');
        </script>";
    }
    else{
        echo"not enought balance";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transfer</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 60px auto;
            background: #f8f8f8;
        }
        td, th {
            padding: 12px;
            border: 1px solid #ccc;
        }
        th {
            background: #2c3e50;
            color: #fff;
        }
        .form-btn {
            padding: 8px 20px;
            background: #2c3e50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-btn:hover {
            background: #010911;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <th colspan="2">Transfer</th>
            </tr>
            <tr>
                <td>Account Number</td>
                <td><input type="text" class="acc_number" name="acc_number" required></td>
            </tr>
            <tr>
                <td>Beneficiary Number</td>
                <td><input type="text" class="beneficiary_number" name="beneficiary_number" required></td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><input type="number" class="amount" name="t_amount" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit" class="transfer" name="transfer">Transfer</button>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>
<?php
include "footrer.php";

?>