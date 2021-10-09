<?php
include_once ('../classes and connect/connect.php');
include_once ('../header.php');

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
<form class="form"style = "position:fixed; left:40%; top:300px; name="form" id="enter" method="POST">
    <label  id="labelID" ><b>PLEASE ENTER YOUR USER NAME AND PASSWORD:</b></label><br>
    <input type="text" id="username" name="username"   placeholder="USER NAME.." required><br>
    <input type="password" id="password" name="password"   placeholder="PASSWORD.." required>
    <input type="submit" name="submit" id="login" name="login" value="Login">

</form>

<?php
$_SESSION['loggedIn'] = false;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $InstrumentUserDB->getUser($username, $password);

    if ($result->num_rows > 0) {
        $_SESSION['loggedIn'] = true;
        header("location:http://localhost/recipe-site/recipe pages/main.php?username=$username");






    }
    else {
       echo  '<script>alert("User Does Not Exist in the system ")</script>';;
    }

    $conn->close();
}


?>
</body>

