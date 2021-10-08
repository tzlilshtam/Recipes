<?php
session_start();
date_default_timezone_set('Asia/jerusalem');
if($_SESSION['loggedIn']){
    //allow
}
else{
    header('Location: 404.php');
}
echo " 
        <link rel=\"stylesheet\" href=\"style.css\">
        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
 
 
        <form class='form' method='post'>
        <h1>WELCOME! </h1>". $_GET['employeeID'].", you are working today as " . $_GET['role']."<br>Shift started on " . date("H:i:s d/m/Y ") . "   
        <br><br><input type='submit' name='logout' value='Logout'>
        </form>";

if(isset($_POST['logout'])){

    // remove all session variables
     session_unset();

    // destroy the session
     session_destroy();

    echo "<script type=\"text/javascript\">
                window.location.href = 'https://login-system-by-tzlil.herokuapp.com/ ';
            </script>
            ";
}




;