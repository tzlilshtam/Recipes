<?php
require_once ('../classes and connect/connect.php');
require ('../header.php');
session_start();
?>



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
            <div class="carousel-caption">
              <h3>Sell $</h3>
              <p>Money Money.</p>
            </div>
          </div>

          <div class="item">
            <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
            <div class="carousel-caption">
              <h3>More Sell $</h3>
              <p>Lorem ipsum...</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <button class="btn btn-success glyphicon glyphicon-plus btn-lg" onClick="window.location.href='http://localhost/recipe-site/recipe pages/insert.php';">
         New Recipe
    </button>
    <div class="container text-center">
      <h3>The Best Recipe Are Here</h3><br>
      <div class="row">
          <?php

            foreach ($InstrumentDB->getAllRecipes() as $recipe){
              $id=$recipe['id'];
          ?>
        <div class="col-sm-4">
          <img src=<?php echo $recipe['picture']?> class="img-responsive" style="height: 250px;width: 100%"  alt="Image">
          <p><?php echo $recipe['name']?> || <button class="btn btn-info glyphicon glyphicon-thumbs-up btn-sm" onclick="<?php echo "window.location.href='http://localhost/recipe-site/recipe pages/like.php?id=$id';"?>"></button> <?php echo $recipe['likes']?></p>
            <div class="well">
                <p ><?php echo $recipe['description']?>.</p>
                <button class="btn btn-danger glyphicon glyphicon-trash" type="button" onclick="<?php echo "window.location.href='http://localhost/recipe-site/recipe pages/delete.php?id=$id';"?>">
                </button>
                <button class='btn btn-primary glyphicon glyphicon-pencil iteminfo blockquote text-center' type="button" onclick="<?php echo "window.location.href='http://localhost/recipe-site/recipe pages/edit.php?id=$id';"?>">
                </button>
            </div>
        </div>
          <?php
            }

          ?>
      </div>
    </div><br>
</body>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>