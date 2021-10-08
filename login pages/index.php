<?php
include_once ('../classes and connect/connect.php');
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
<form class="form" name="form" id="enter" method="POST">
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

    $sql = "SELECT * FROM recipe_user WHERE userName=$username AND password=$password";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loggedIn'] = true;






    }
    else {
       echo  '<script>alert("User Does Not Exist in the system ")</script>';;
    }

    $conn->close();
}


?>
</body>

