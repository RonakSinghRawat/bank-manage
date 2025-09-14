<?php
if(isset($_POST['login'])){
    $acc_number=$_POST['acc_number'];
    $password=$_POST['passcode'];
    if($acc_number=='1234567'&& $password=='7023'){
        header('location:main.php');
    }
    else{
        echo "<script>alert('Invalid Account number or Password')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .login-table {
            border-collapse: collapse;
            width: 30%;
            margin: 80px auto;
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
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <table class="login-table">
            <tr>
                <th colspan="2">Login</th>
            </tr>
            <tr>
                <td>Account Number</td>
                <td><input type="text" class="acc_number" name="acc_number" required></td>
            </tr>
            <tr>
                <td>Passcode</td>
                <td><input type="password" class="passcode" name="passcode" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit" class="login" name="login">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>