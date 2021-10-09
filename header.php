<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header" >
            <img src="../pictures/pot%20icon.png" alt="logo" style="height:12%; width: 100%" class="navbar-brand" ></img>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li c><a href="http://localhost/recipe-site/recipe pages/main.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><h3 id="welcomeUser" style=" position: relative;top: 3px;color: #f2f2f2"></h3></li>
                <li><a href="http://localhost/recipe-site/login pages/index.php" id="login" style="position: relative;top: 11px;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
if($_SESSION['loggedIn']) {
    echo "hehey";
    $username = $_GET['username'];
    echo "
    <script>
    document.getElementById('welcomeUser').innerHTML = 'Welcome $username';
    document.getElementById('login').innerHTML = 'Logout';
    document.getElementById('login').setAttribute('href', '#');
   
    
    
    
    </script> ";

    }
    ?>