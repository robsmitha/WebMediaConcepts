<?php include "classes.php" ?>

<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

  <body>

    <!-- Navigation -->
    <?php include "navbar.php" ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/slide-1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>WEB</h3>
              <p>Professional Web Development</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/slide-2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>SEO</h3>
              <p>We Help You Get Found On Google</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/slide-3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>SHOP</h3>
              <p>24/7 Ecommerce Support</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Web Media Concepts Demo Site</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"><i class="icon-speedometer"></i> Professional Web Development</h4>
            <div class="card-body">
              <p class="card-text">
                  A website serves as an online identitiy for a business. Our modern and professional web development standards ensure your website will scale flawlessly across all screen types and sizes.
              </p>

            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">See Our Projects</a>
            </div>
          </div>
        </div>
          <div class="col-lg-4 mb-4">
              <div class="card h-100">
                  <h4 class="card-header"><i class="icon-key"></i> We Help You Get Found On Google</h4>
                  <div class="card-body">
                      <p class="card-text">The best way to generate online leads for any business is through organized online marketing strategies. We implement effective SEO techniques that attract more online customers.</p>
                  </div>
                  <div class="card-footer">
                      <a href="#" class="btn btn-primary">Learn More</a>
                  </div>
              </div>
          </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"><i class="icon-graph"></i> 24/7 Ecommerce Support</h4>
            <div class="card-body">
              <p class="card-text">Let's face it, the business of buying and selling has largely been moved online. Let Us handle the day-to-day website maintenance so you can focus on your next big move.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Shop Demo</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
        <br>
      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Application Template Features</h2>
          <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Our market specific search engine optimization (SEO) will produce more online leads for your business. Let us build an online presence to attract your perfect customer.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="contact.php">Contact Now</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <?php include "scripts.php" ?>

  </body>

</html>
