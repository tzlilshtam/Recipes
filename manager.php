<?php
require ('connect.php');
session_start();
echo "
    <link rel=\"stylesheet\" href=\"style.css\">

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

<form method='post' class='form'>
    <h1>ROLE: </h1><br>
    <input type='radio' id='manager' value='MANAGER' name='role' checked='checked'>
    <label for='manager'>SHIFT MANAGER</label><br>
    <input type='radio' id='seller' value='SELLER' name='role'>
    <label for='seller'>SELLER</label><br>      
    <input type='submit' name='submit'> 
</form>";

$id = $_GET["employeeID"];

if(!isset($_SESSION["key"]) || $_SESSION["key"] != '123' ){
    echo "heyhey";
    echo "<script type=\"text/javascript\">
                window.location.href = '404.php';
            </script>
            ";
}
if(isset($_POST['submit'])) {
    $role = $_POST['role'];
    echo "<script type=\"text/javascript\">
                window.location.href = 'https://login-system-by-tzlil.herokuapp.com/welcome.php?employeeID=$id&role=$role';
            </script>
            ";


}



