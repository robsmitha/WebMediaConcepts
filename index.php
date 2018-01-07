<?php
    include_once ("classes.php");
$errors = "";
$mailSent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check for empty fields
    if(empty($_POST['name'])      ||
        empty($_POST['email'])     ||
        empty($_POST['phone'])     ||
        empty($_POST['message'])   ||
        !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        $errors = "Please complete all required fields to send an email.";
        return false;
    }
    else{
        $name = strip_tags(htmlspecialchars($_POST['name']));
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $phone = strip_tags(htmlspecialchars($_POST['phone']));
        $message = strip_tags(htmlspecialchars($_POST['message']));

        // Create the email and send the message
        $email_subject = "Website Contact Form:  $name";
        $email_body = "You have received a new message from your website contact form.<br/><br/>"."Here are the details:<br/><br/>Name: $name<br/><br/>Email: $email_address<br/><br/>Phone: $phone<br/><br/>Message:<br/>$message";
        if($name != "" && $email_address != "" && $message != ""){
            $mailSent = true;
            Mailer::sendContactEmail($email_address,$email_subject,$email_body);
        }
        else{
            $mailSent = false;
        }
    }
}
//echo phpinfo();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Media Concepts</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110090520-3"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-110090520-3');
      </script>

      <style>

        .text-shadow-1{
            text-shadow: 1px 1px 1px #000;
        }
        .text-shadow-2{
            text-shadow: 2px 2px 2px #000;
        }
    </style>
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Web Media Concepts</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#services">Services</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto text-white">
        <h1 class="mb-1 text-shadow-2">Web Media Concepts</h1>
        <h3 class="mb-5 text-shadow-1">
          <em>We Build Professional Websites</em>
        </h3>
          <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-3 mt-2">
                  <a class="btn btn-primary btn-xl js-scroll-trigger btn-block" href="#about">Find Out More</a>
              </div>
              <div class="col-sm-3 mt-2">
                  <a class="btn btn-dark btn-xl btn-block" href="home.php">Demo site</a>
              </div>
          </div>


      </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>A website serves as an online identity for a business!</h2>
            <p class="lead mb-5">

            </p>
            <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h3 class="text-secondary mb-0">Services</h3>
          <h2 class="mb-5">What We Offer</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-desktop"></i>
            </span>
                <h4>
                    <strong>Online Branding</strong>
                </h4>
                <p class="text-faded mb-0">A website serves as an online identity for a business. Let us build an online presence to attract your perfect customer.</p>
            </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
            <h4>
              <strong>Responsive</strong>
            </h4>
            <p class="text-faded mb-0">
                Our modern and professional web development standards ensure your website will scale flawlessly across all screen types and sizes.
            </p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-graph"></i>
            </span>
            <h4>
              <strong>Analytics & SEO</strong>
            </h4>
            <p class="text-faded mb-0">
                The best way to generate online leads for any business is through organized online marketing strategies.
            </p>
          </div>
          <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-basket"></i>
            </span>
            <h4>
              <strong>Ecommerce Mangement</strong>
            </h4>
            <p class="text-faded mb-0">
                Let Us handle the day-to-day website maintenance so you can focus on your next big move.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Callout -->
    <section class="callout">
      <div class="container text-center text-white">
        <h2 class="mx-auto mb-5 text-shadow-1"> Check out our
          <em>demo website</em>!</h2>
        <a class="btn btn-primary btn-xl" href="home.php">Demo site</a>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Portfolio</h3>
          <h2 class="mb-5">Recent Projects</h2>
        </div>
        <div class="row no-gutters">
            <?php
            $portfolioItemList = Portfolioitem::loadall();
            if(!empty($portfolioItemList)){
                foreach ($portfolioItemList as $portfolioitem){
                    ?>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="portfolio-item.php?id=<?php echo $portfolioitem->getId() ?>">
                            <span class="caption">
                                <span class="caption-content">
                                  <h2><?php echo $portfolioitem->getName() ?></h2>
                                  <p class="mb-0 d-none"><?php echo $portfolioitem->getDescription() ?></p>
                                </span>
                            </span>
                            <img class="img-fluid" src="<?php echo $portfolioitem->getImageUrl() ?>" alt="">
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="content-section bg-primary text-white">
      <div class="container text-center">
        <h2 class="mb-4">The buttons below are impossible to resist...</h2>
          <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-3 mt-2">
                  <a href="#contact" class="js-scroll-trigger btn btn-xl btn-light mr-4 btn-block">Contact Us!</a>
              </div>
              <div class="col-sm-3 mt-2">
                  <a href="home.php" class="btn btn-xl btn-dark btn-block">Look at Me!</a>
              </div>
          </div>


      </div>
    </section>

    <!-- Map -->
    <section id="contact">
        <div class="container text-center content-section">
            <div class="offset-md-3 col-md-6">
                <h2 class="mb-4">Send us a Message</h2>
                <form name="contactForm" id="contactForm" method="post">
                    <?php if ($errors != ""){
                        echo "<div id=\"failure\"><div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button><strong>" . $errors . "</strong></div></div>";
                    }
                    ?>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                   data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label><small> (optional)</small>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                   data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required
                                      data-validation-required-message="Please enter your message" maxlength="999"
                                      style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>

                    <?php if ($mailSent): ?>
                        <div id="success"><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Your message has been sent. </strong></div></div>
                    <?php endif ?>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
        <!--
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
      -->
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/webmediaconcepts/">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://twitter.com/RobSmitha">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="https://github.com/robsmitha">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
          <p class="text-muted small mb-0">Copyright &copy; Web Media Concepts <?php echo date("Y"); ?></p>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>
