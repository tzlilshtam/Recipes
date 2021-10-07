<?php
require('connect.php');
require ('header.php');

if(isset($_GET['id'])) {
    foreach ($InstrumentDB->edit1($_GET['id']) as $recipe){
        $name = $recipe['name'];
        $picture = $recipe['picture'];
        $description = $recipe['description'];
        $likes = $recipe['likes'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<form method="post">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="inputEmail3" value="<?php echo $name?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">URL Picture</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="picture"  id="inputPassword3" value="<?php echo $picture?>" >
        </div>
    </div>
    <div class="form-group row">
        <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <input type="text" maxlength="50" class="form-control" name="description"  id="inputDescription" value="<?php echo $description?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $picture = $_POST['picture'];
    $description = $_POST['description'];
    echo $name;
    $InstrumentDB->edit2($_GET['id'],$name, $picture, $description);
     header("location:http://localhost/recipe-site/main.php");
}

}