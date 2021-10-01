<?php
echo " 
        <link rel=\"stylesheet\" href=\"style.css\">
        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
 
 
        <form class='form' method='post'>
        <h1>WELCOME! </h1>". $_GET['employeeID'].", you are working today as " . $_GET['role'].". 
        <input type='submit' name='logout' value='Logout'>
        </form>";

if(isset($_POST['logout'])){
    echo "<script type=\"text/javascript\">
                window.location.href = 'http://localhost/loginSystem/index.php';
            </script>
            ";
}




;