<!DOCTYPE html>
<html lang="en">
<?php
require "db.php";
?>
<?php
require "header.php";
?>
<?php
require "navigation.php";
?>
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
  <div class="container d-flex align-items-center flex-column">
    <!-- Masthead Avatar Image-->
    <img class="masthead-avatar mb-5" src="assets/img/book.png" alt="" />
    <!-- Masthead Heading-->
    <h1 class="masthead-heading text-uppercase mb-0">Book Share</h1>
    <!-- Icon Divider-->
    <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- Masthead Subheading-->
    <p class="masthead-subheading font-weight-light mb-0">
      A WebSite To Exchange Books
    </p>
  </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
  <div class="container">
    <!-- Portfolio Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
      Book Sample
    </h2>
    <!-- Icon Divider-->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- Portfolio Grid Items-->
    <div class="row">
      <!-- Portfolio Item 1-->
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="assets/img/books/book1.jpg" alt="" />
        </div>
      </div>
      <!-- Portfolio Item 2-->
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="assets/img/books/book2.jpg" alt="" />
        </div>
      </div>
      <!-- Portfolio Item 3-->
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="assets/img/books/book3.jpg" alt="" />
        </div>
      </div>
      <!-- Portfolio Item 4-->
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="assets/img/books/book4.jpg" alt="" />
        </div>
      </div>
      <!-- Portfolio Item 5-->
      <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="assets/img/books/book5.jpg" alt="" />
        </div>
      </div>
      <!-- Portfolio Item 6-->
      <div class="col-md-6 col-lg-4">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="assets/img/books/book6.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
  <div class="container">
    <!-- About Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-white">
      Rent Books
    </h2>
    <!-- Icon Divider-->
    <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- About Section Content-->
    <div class="row">
      <div class="col-lg-4 ml-auto">
        <p class="lead">
          Book Share is a website to Exchange books
          between two willing individuals. User has to share one book in good
          condition to get one book in exchange.
        </p>
      </div>
      <div class="col-lg-4 mr-auto">
        <p class="lead">
          We ensure that the book recieved is in good condition and the book
          being sent is in good condition too. But if not then the user can
          return the book back and we will handle the rest.We are a non profit
          organisation.
        </p>
      </div>
    </div>
    <!-- About Section Button-->
    <div class="text-center mt-4">
      <a class="btn btn-xl btn-outline-light" href="#">
        Share book
      </a>
    </div>
  </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
  <div class="container">
    <!-- Contact Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
      Contact US
    </h2>
    <!-- Icon Divider-->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- Contact Section Form-->
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Name</label>
              <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Email Address</label>
              <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Phone Number</label>
              <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br />
          <div id="success"></div>
          <div class="form-group">
            <button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">
              Send
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Footer-->
<footer class="footer text-center">
  <div class="container">
    <div class="row">
      <!-- Footer Location-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Location</h4>
        <p class="lead mb-0">
          2215 DLF
          <br />
          Gurugram, Haryana
        </p>
      </div>
      <!-- Footer Social Icons-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Around the Web</h4>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
      </div>
      <!-- Footer About Text-->
      <div class="col-lg-4">
        <h4 class="text-uppercase mb-4">About BookShare</h4>
        <p class="lead mb-0">
          BookShare is a free to use website made by Mavneet Kaur.

        </p>
      </div>
    </div>
  </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
  <div class="container"><small>Copyright © BookShare</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
  <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fas fa-times"></i></span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title-->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">
                The Street
              </h2>
              <!-- Icon Divider-->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image-->
              <img class="img-fluid rounded mb-5" src="assets/img/books/book1.jpg" alt="" />
              <!-- Portfolio Modal - Text-->
              <p class="mb-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Mollitia neque assumenda ipsam nihil, molestias magnam,
                recusandae quos quis inventore quisquam velit asperiores,
                vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                Nam.
              </p>
              <button class="btn btn-primary" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fas fa-times"></i></span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title-->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">
                The Dreaming Arts
              </h2>
              <!-- Icon Divider-->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image-->
              <img class="img-fluid rounded mb-5" src="assets/img/books/book2.jpg" alt="" />
              <!-- Portfolio Modal - Text-->
              <p class="mb-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Mollitia neque assumenda ipsam nihil, molestias magnam,
                recusandae quos quis inventore quisquam velit asperiores,
                vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                Nam.
              </p>
              <button class="btn btn-primary" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fas fa-times"></i></span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title-->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">
                Hamlet
              </h2>
              <!-- Icon Divider-->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image-->
              <img class="img-fluid rounded mb-5" src="assets/img/books/book3.jpg" alt="" />
              <!-- Portfolio Modal - Text-->
              <p class="mb-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Mollitia neque assumenda ipsam nihil, molestias magnam,
                recusandae quos quis inventore quisquam velit asperiores,
                vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                Nam.
              </p>
              <button class="btn btn-primary" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fas fa-times"></i></span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title-->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">
                Breath
              </h2>
              <!-- Icon Divider-->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image-->
              <img class="img-fluid rounded mb-5" src="assets/img/books/book4.jpg" alt="" />
              <!-- Portfolio Modal - Text-->
              <p class="mb-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Mollitia neque assumenda ipsam nihil, molestias magnam,
                recusandae quos quis inventore quisquam velit asperiores,
                vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                Nam.
              </p>
              <button class="btn btn-primary" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fas fa-times"></i></span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title-->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">
                The Book Thief
              </h2>
              <!-- Icon Divider-->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image-->
              <img class="img-fluid rounded mb-5" src="assets/img/books/book5.jpg" alt="" />
              <!-- Portfolio Modal - Text-->
              <p class="mb-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Mollitia neque assumenda ipsam nihil, molestias magnam,
                recusandae quos quis inventore quisquam velit asperiores,
                vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                Nam.
              </p>
              <button class="btn btn-primary" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fas fa-times"></i></span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title-->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">
                Harry Potter
              </h2>
              <!-- Icon Divider-->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image-->
              <img class="img-fluid rounded mb-5" src="assets/img/books/book6.jpg" alt="" />
              <!-- Portfolio Modal - Text-->
              <p class="mb-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Mollitia neque assumenda ipsam nihil, molestias magnam,
                recusandae quos quis inventore quisquam velit asperiores,
                vitae? Reprehenderit soluta, eos quod consequuntur itaque.
                Nam.
              </p>
              <button class="btn btn-primary" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>