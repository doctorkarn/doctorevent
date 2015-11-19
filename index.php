<?php include("header.php"); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/c1.jpg" height="100%" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Find your next experience.</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/c2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Find your next experience.</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/c3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Find your next experience.</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fourth-slide" src="images/c4.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Find your next experience.</h1>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <div class="input-group">
            <input type="text" class="form-control input-lg" placeholder="Search for Events">
            <span class="input-group-btn">
              <button class="btn btn-success btn-lg" type="button">Search</button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-8 -->
        <div class="col-lg-2"></div>
      </div><!-- /.row -->
      <br/>

      <!-- Three columns of text below the carousel -->
      <?php
        function randomColor() {
          $str = "0123456789abcdef";
          $code = "";
          for ($i=0; $i < 6; $i++) { 
            $ran = mt_rand(0,15);
            $code .= substr($str, $ran, 1);
          }
          return $code;
        }
      ?>

      <?php for ($k=0; $k<=2; $k++) : ?>
      <div class="row">
        <?php for ($i=1; $i<=3; $i++) : ?>
        <div class="col-lg-4">
          <img src="http://placehold.it/300x150/<?php echo randomColor(); ?>" />
          <h2>Event Name <?php echo $k*3+$i; ?></h2>
          <p>23 Apr 2015, 10:00 PM</p>
          <p>Event Type</p>
          <p>Event Location</p>
          <p><a class="btn btn-default" href="view.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <?php endfor ?>
      </div><!-- /.row -->
      <?php endfor ?>

    </div><!-- /.container -->

<?php include("footer.php"); ?>