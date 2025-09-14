
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking App Navbar</title>
    <style>
        .navbar {
            background-color: #2c3e50;
            padding: 10px 0; width: 100%;
        }
        .navbox {
            display: flex;
            align-items: center;
        }
        .navitem {
            margin: 0 20px;
            padding: 10px;
        }
        .navitem:hover {
            background-color: #1e456bff;
            border-radius: 4px;
        }
        .navbox .navitem:nth-child(6):hover {
            background-color: red;
            border-radius: 6px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }
        
        .a1 {
            margin-left: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbox">
            <div class="navitem"><a href="main.php">Home</a></div>
            <div class="navitem"><a href="opacc.php">Open Account</a></div>
            <div class="navitem"><a href="balvie.php">View Balance</a></div>
            <div class="navitem"><a href="transfer.php">Transfer</a></div>
            <div class="navitem"><a href="statement.php">Statement</a></div>
            <div class="navitem a1"><a href="logout.php">Logout</a></div>
        </div>
    </nav>




</body>
</html>