<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Statement</title>
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
    <form action="#" method="post">
        <table>
            <tr>
                <th colspan="2">Get Statement</th>
            </tr>
            <tr>
                <td>Account Number</td>
                <td><input type="text" class="acc_number" name="acc_number" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit" class="getst">Get Statement</button>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>
<?php
include "footrer.php";

?>