<?php
require('connect.php');



if(isset($_GET['id'])){
    $id = $_GET['id'];
    $InstrumentDB->delete($id);
    header("location:http://localhost/recipe-site/main.php");
}
