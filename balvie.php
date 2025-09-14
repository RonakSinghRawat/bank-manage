<?php
include 'navbar.php';
if (isset($_POST["balance"])){
    $ac_num = $_POST["acc_number"];
        $con=mysqli_connect("localhost","root","","bank_manage");
        $sl="select st_amt from account_info where acc_num=$ac_num";
        $rs = mysqli_query($con,$sl);
        $t = mysqli_num_rows($rs);
        if($t!=0)
        {
            $r = mysqli_fetch_array($rs);
        }

}   
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Balance</title>
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
        input[type="text"] {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <th colspan="2">View Balance</th>
            </tr>
            <tr>
                <td>Account Number</td>
                <td><input type="text" class="acc_number" name="acc_number" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit" class="balance" name="balance">Submit</button>
                </td>
            </tr>
            <tr>
                <td> Avilable balance </td>
                <td>
                    <input type="text" class="balance" name="balance" disabled value="<?php           if(isset($_POST['balance'])) { echo $r[0];}
 ?>">
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>
<?php
include "footrer.php";

?>