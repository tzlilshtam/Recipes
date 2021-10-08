<?php
require_once ('../classes and connect/connect.php');



if(isset($_GET['id'])){
    $id = $_GET['id'];
    $InstrumentDB->delete($id);
    header("location:http://localhost/recipe-site/recipe pages/main.php");
}
