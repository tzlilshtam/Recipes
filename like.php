<?php
require ('connect.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    foreach ($InstrumentDB->edit1($id) as $recipe){
        $name = $recipe['name'];
        $picture = $recipe['picture'];
        $description = $recipe['description'];
        $likes = $recipe['likes'];
    }

    $InstrumentDB->addLike($id , $likes+1);
    header("location:http://localhost/recipe-site/main.php");
}