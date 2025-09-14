<?php
include 'navbar.php';
session_start();
if(isset($_POST['opnac'])){
    $con=mysqli_connect('localhost','root','','bank_manage');
    $acc_number=$_POST['acc_number'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $father_name=$_POST['father_name'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $aadhaar=$_POST['aadhaar'];
    $pan=$_POST['pan'];
    $balance=$_POST['balance'];

$_SESSION['acc_number']  = $acc_number;
    $_SESSION['name']        = $name;
    $_SESSION['gender']      = $gender;
    $_SESSION['father_name'] = $father_name;
    $_SESSION['dob']         = $dob;
    $_SESSION['address']     = $address;
    $_SESSION['aadhaar']     = $aadhaar;
    $_SESSION['pan']         = $pan;
    $_SESSION['balance']     = $balance;


    $q="insert into account_info values('$acc_number','$name','$gender','$dob','$aadhaar','$pan','$balance')";
    mysqli_query($con,$q);
    echo "<script>alert('Account created successfully')</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Open Account</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 40px auto;
            background: #f8f8f8;
        }
        td, th {
            padding: 10px;
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
        input[type="text"], input[type="date"], input[type="number"] {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
        }
        select {
            width: 100%;
            padding: 6px;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <th colspan="2">Open Account</th>
            </tr>
            <tr>
                <td>Account Number</td>
                <td><input type="text" class="acc_number" name="acc_number" required></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" class="name" name="name" required></td>
            </tr>
            <tr>
                <td>Father Name</td>
                <td><input type="text" class="father_name" name="father_name" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select class="gender" name="gender" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input type="date" class="dob" name="dob" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" class="address" name="address" required></td>
            </tr>
            <tr>
                <td>Aadhaar Card</td>
                <td><input type="text" class="aadhaar" name="aadhaar" required></td>
            </tr>
            <tr>
                <td>PAN Number</td>
                <td><input type="text" class="pan" name="pan" required></td>
            </tr>
            <tr>
                <td>Account Balance</td>
                <td><input type="number" class="balance" name="balance" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit" class="opnac" name="opnac">Open Account</button>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>
<?php
include "footrer.php";

?>