<?php
include_once ('connect.php');
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
    <label  id="labelID" ><b>PLEASE ENTER YOUR ID:</b></label><br>
    <input type="text" id="id" name="EmployeeID" size="9"  placeholder="ID.." required>
    <label for="id" id="firstRole"></label>
    <input type="submit" name="submit" id="login" name="login" value="Login">
    <span id="welcome"></span>
</form>

<?php
$_SESSION['loggedIn'] = false;
if(isset($_POST['submit'])){
    $employeeID = $_POST['EmployeeID'];
    $_SESSION['loggedIn'] = true;

    $sql = "SELECT * FROM employee WHERE EmployeeID=$employeeID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "SELECT ShiftManager FROM employee WHERE EmployeeID=$employeeID";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc(); // array of all the rows that are true of the query
        $isManager = $row["ShiftManager"]; // because it is id there is only one result
        if($isManager == "manager") {

         echo "<script type=\"text/javascript\">
             window.location.href = 'https://login-system-by-tzlil.herokuapp.com/manager.php?employeeID=$employeeID';
           </script>
           ";
        }
        else{
            echo "<script type=\"text/javascript\">
                window.location.href = 'https://login-system-by-tzlil.herokuapp.com/welcome.php?employeeID=$employeeID&role=Seller';
            </script>
            ";
        }



    } else {
       echo  '<script>alert("Employee Does Not Exist in the system ")</script>';;
    }

    $conn->close();
}


?>
</body>

