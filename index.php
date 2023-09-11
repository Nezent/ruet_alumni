<?php 
  session_start();
  include_once 'admin/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>RUET Alumni</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--


-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>RUET</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#services">Departments</a></li>
                      <li class="scroll-to-section"><a href="#courses">Alumni</a></li>
                      <li class="scroll-to-section"><a href="#events">Events</a></li>
                      <?php if(!isset($_SESSION['alumni'])): ?>
                      <li class="scroll-to-section"><a href="login.php">Login</a></li>
                      <?php endif; ?>
                      <?php if(isset($_SESSION['alumni'])): 
                        $email = $_SESSION['alumni'];
                        ?>
                      <li class="scroll-to-section"><a href="account.php?email=<?php echo $email ?>">Account</a></li>
                      <?php endif; ?>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">RUET Alumni</span>
                <h2>Heaven's Light is Our Guide</h2>
                <p>Rajshahi University of Engineering and Technology (RUET) is a prestigious public engineering university in Bangladesh. Located in Rajshahi, it offers undergraduate and postgraduate programs in various engineering and architectural disciplines. RUET is renowned for its academic excellence, research contributions, and commitment to producing skilled engineers and architects.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Register Now</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> Join Us!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">RUET Alumni</span>
                <h2>Connecting RUET Alumni:Where Past Meets Future</h2>
               <!--<p>Rajshahi University of Engineering and Technology (RUET) alumni comprise a diverse group of professionals, engineers, and leaders who have graduated from this renowned institution in Bangladesh. They have made significant contributions to various fields, including technology, academia, and industry, showcasing the university's commitment to producing accomplished graduates.</p>
                      -->
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Register Now</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> Join Us!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">RUET Alumni</span>
                <h2>RUET Graduates Unite: Forging a Legacy of Success</h2>
                <p>RUET alumni form a vibrant community of accomplished individuals, spanning various professions and industries. They collaborate, mentor, and contribute to RUET's growth, embodying excellence and leadership.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Register Now</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> Join Us!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Departments</h6>
            <h2>Departments</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="main-content">
              <h4>ECE</h4>
              <p class="text-truncate">Electrical & Computer Engineering</p>
              <div class="main-button">
                <a href="https://www.ece.ruet.ac.bd/">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="main-content">
              <h4>CSE</h4>
              <p class="text-truncate">Computer Science Engineering</p>
              <div class="main-button">
                <a href="https://www.cse.ruet.ac.bd/">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="main-content">
              <h4>EEE</h4>
              <p class="text-truncate">Electrical & Electronics Engineering</p>
              <div class="main-button">
                <a href="https://www.eee.ruet.ac.bd/">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="main-content">
              <h4>IPE</h4>
              <p class="text-truncate">Industrial and Production Engineering</p>
              <div class="main-button">
                <a href="https://www.ipe.ruet.ac.bd/">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="main-content">
              <h4>MSE</h4>
              <p class="text-truncate">Material and Science Engineering</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="main-content">
              <h4>CE</h4>
              <p class="text-truncate">Civil Engineering</p>
              <div class="main-button">
                <a href="https://www.ce.ruet.ac.bd/">Read More</a>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="main-content">
              <h4>ARCH</h4>
              <p class="text-truncate">ARCHITECTURE</p>
              <div class="main-button">
                <a href="https://www.arch.ruet.ac.bd/">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="main-content">
              <h4>GCE</h4>
              <p class="text-truncate">Glass and Ceramic Engineering</p>
              <div class="main-button">
                <a href="https://www.gce.ruet.ac.bd/">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="main-content">
              <h4>ETE</h4>
              <p class="text-truncate">Electrical & Telecommunication Engineering</p>
              <div class="main-button">
                <a href="https://www.ete.ruet.ac.bd/">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Where shall we begin?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Registering on RUET's alumni website connects you with fellow graduates, provides access to exclusive resources, job opportunities, and helps you stay connected to your alma mater for networking and professional growth.

              </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How do we work together?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                RUET alumni collaborate through events, mentorship, and knowledge sharing. They support each other's careers, contribute to the university's development, and foster a sense of community and lifelong learning.
              </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why RUET is the best?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                RUET excels due to its exceptional faculty, rigorous academic programs, research contributions, and strong alumni network, all fostering excellence in engineering and architecture education and innovation.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Do we get the best support?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Ruet alumni can provide support in various ways, including mentorship, job referrals, career advice, networking opportunities, and contributions to the university's development and projects.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>What make RUET ALUMNI BEST</h2>
            <p>RUET alumni are among the best because of their top-tier education, dedication, and commitment to excellence. They leverage their knowledge and experience to make a significant impact in various fields.</p>
            <div class="main-button">
              <a href="https://www.reosabd.org/">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Alumni</h6>
            <h2>Alumni</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".CSE">CSE</a>
        </li>
        <li>
          <a href="#!" data-filter=".ETE">ETE</a>
        </li>
        <li>
          <a href="#!" data-filter=".ECE">ECE</a>
        </li>
      </ul>
      <div class="row event_box">
        <?php
          $fpath = 'admin/assets/uploads/';
          $alumni = $conn->query("SELECT * FROM alumni WHERE status=1");
          while($row = $alumni->fetch_assoc()):
        ?>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 <?php echo $row['department'] ?>">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="<?php echo $fpath.'/'.$row['image'] ?>" alt=""></a>
              <span class="category"><?php echo $row['department'] ?></span>
              <span class="price"><h6><?php echo $row['series'] ?></h6></span>
            </div>
            <div class="down-content">
              <span class="author"><?php echo $row['name'] ?></span>
              <h4><?php echo $row['company_name'] ?></h4>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="1050" data-speed="1000"></h2>
                   <p class="count-text ">Happy Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                  <p class="count-text ">Events Hours</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                  <p class="count-text ">Employed Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="<?php echo $conn->query("SELECT * FROM alumni")->num_rows; ?>" data-speed="1000"></h2>
                  <p class="count-text ">Alumni</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“"Attending the RUET reunion was a nostalgic whirlwind. Seeing old friends, reminiscing about our engineering days, and sharing life journeys in just one evening filled my heart with warmth and gratitude."</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Full Stack Master</span>
                <h4>Engr. Tanzila Zaman</h4>
              </div>
            </div>
            <div class="item">
              <p>“"The RUET reunion brought cherished memories back to life. Reconnecting with fellow alumni, swapping stories, and celebrating our shared journey was a heartwarming experience that left me feeling deeply connected."”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">UI Expert</span>
                <h4>Nokib Sarker</h4>
              </div>
            </div>
            <div class="item">
              <p>“"The RUET reunion brought cherished memories back to life. Reconnecting with fellow alumni, swapping stories, and celebrating our shared journey was a heartwarming experience that left me feeling deeply connected."</p>
              <div class="Web developer">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Digital Animator</span>
                <h4>Shaon Radwan</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>What they say about us?</h2>
            <p> Rajshahi University of Engineering and Technology (RUET) is a renowned institution in Bangladesh, dedicated to providing top-notch engineering and architectural education, cultivating innovation, and producing adept professionals to meet industry demands.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Schedule</h6>
            <h2>Upcoming Events</h2>
          </div>
        </div>
        <?php
          $alumni = $conn->query("SELECT * FROM events");
          while($row = $alumni->fetch_assoc()):
            if($row['catagory'] == 'Electrical'){
              $x = '01';
            }
            else if($row['catagory'] == 'Programming'){
              $x = '02';
            }
            else{         
              $x = '03';
            }
        ?>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/event-<?php echo $x;?>.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category"><?php echo $row['catagory']; ?></span>
                    <h4 class="text-truncate"><?php echo $row['title']; ?></h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6><?php echo $row['date']; ?></h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6><?php echo $row['duration']; ?> Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>৳<?php echo $row['price']; ?></h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Register for the uppcoming events</h2>
            <p>RUET alumni events include reunions, career fairs, workshops, and seminars, fostering networking, knowledge exchange, and support among graduates.</p>
            
          </div>
        </div>
       <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="register.php" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="email" name="email" id="email" placeholder="Your Email..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="department" id="department" placeholder="Your Department..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button" name="register">Register Now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 RUET Alumni Organization. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>