<?php
include_once ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<form class="form" name="form" id="enter" method="POST">
    <label  id="labelID" >ID:</label><br>
    <input type="text" id="id" name="EmployeeID" placeholder="ID..">
    <label for="id" id="firstRole"></label>
    <input type="hidden" id="seller" name="secRole" ">
    <label for="secRole" id="labelSecRole"></label>
    <input type="submit" id="login" name="login" value="Login">
    <span id="welcome"></span>
</form>

<?php

if(isset($_POST['EmployeeID'])){
    $employeeID = $_POST['EmployeeID'];

    //$stmt = $conn->prepare("SELECT * FROM employee WHERE EmployeeID=$employeeID");

    //$stmt->bind_param('i', $employeeID);

   // $stmt->execute();
    //$user = $stmt->fetch();
    $sql = "SELECT * FROM employee WHERE EmployeeID=$employeeID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "SELECT ShiftManager FROM employee WHERE EmployeeID=$employeeID";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc(); // array of all the rows that are true of the query
        $isManager = $row["ShiftManager"]; // because it is id there is only one result
        if($isManager == "manager") {
            /*
         echo " <script>

                       document.form.EmployeeID.type = \"radio\";
                       document.form.EmployeeID.name = \"role\";
                       document.form.EmployeeID.id = \"manager\";
                       document.getElementById(\"labelID\").innerHTML = \"ROLE:\";
                       document.getElementById(\"firstRole\").innerHTML = \"MANAGER\";
                       document.form.secRole.type = \"radio\";
                       document.form.secRole.name = \"role\";
                       document.getElementById(\"labelSecRole\").innerHTML = \"SELLER\";
                       document.form.login.value = \"Submit\";
                  </script></form> ";
           if(isset($_POST['role'])){

               $role = $_POST['role'];
               echo "role  $role"  ;
           }
       }
       else{
           ?>
            <script>
                document.getElementById("welcome").innerHTML = "WELCOME!";
                document.form.login.value = "Logout";
           </script>
       <?php

       }
        */

        echo $isManager;
        }



    } else {
       echo  '<script>alert("Employee Does Not Exist in the system ")</script>';;
    }

    $conn->close();
}


?>
</body>

