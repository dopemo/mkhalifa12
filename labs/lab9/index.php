<?php
    include 'header.php';
   
   
?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
</style>            
   <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/alex.jpg" alt="Chania" width="200" height="200">
        <div class="carousel-caption">
          <h3>Alex</h3>
          <p>Adopt me! I promise I'll try not to eat you.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/samantha.jpg" alt="Chania" width="200" height="200">
        <div class="carousel-caption">
          <h3>Smantha</h3>
          <p>TI love bamboo and climbing things!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/ted.jpg" alt="Flower" width="200" height="200">
        <div class="carousel-caption">
          <h3>Ted</h3>
          <p>I enjoy laying around and doing nothing all day... just like you in the weekends.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/sally.jpg" alt="Flower" width="200" height="200">
        <div class="carousel-caption">
          <h3>Sally</h3>
          <p>Looking for a loving home. I am most definitely NOT bad luck</p>
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
</div>
<br><br><br><br>
        
<?php
    include 'footer.php';
?>