<!doctype html>
<html lang="en">
<?php require 'php/header.php'; ?>

<body>
  <?php require 'php/navbar.php'; ?>

  <!-- hero start -->

  <div class="container-fluid">
    <!-- Triangle Image -->
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 600 480" style="enable-background:new 0 0 600 480;" xml:space="preserve" class="triangle-img triangle-img--align-right">
      <g>
        <path class="st0" d="M232.16,108.54,76.5,357.6C43.2,410.88,81.5,480,144.34,480H455.66c62.83,0,101.14-69.12,67.84-122.4L367.84,108.54C336.51,58.41,263.49,58.41,232.16,108.54Z" fill="url(#img1)" />
        <path class="st0" d="M232.16,108.54,76.5,357.6C43.2,410.88,81.5,480,144.34,480H455.66c62.83,0,101.14-69.12,67.84-122.4L367.84,108.54C336.51,58.41,263.49,58.41,232.16,108.54Z" fill="url(#triangle-gradient)" fill-opacity="0.6" />
      </g>
      <defs>
        <pattern id="img1" patternUnits="userSpaceOnUse" width="500" height="500">
          <image xlink:href="img\hero.jpg" x="50" y="70" width="500" height="500"></image>
        </pattern>

        <linearGradient id="triangle-gradient" y2="100%" x2="0" y1="50%" gradientUnits="userSpaceOnUse" >
        <stop offset="0" stop-color="#FA6262"/>
        <stop offset="1" stop-color="#6A798C"/>
        </linearGradient>
      </defs>
    </svg>
      <div class="container align-middle">
        <div class="row d-sm-block">
          <div class="col-12 col-lg-6 clear-right">
            <div class="jumbotron jumbotron-fluid">
              <div class="my-5 py-5 __roboto-font">
                <h1 class=" __color-blue __font-700 __text-40px">Serving Your Future Through Education</h1>
                <p class="lead __color-lightblue">H&H Global is an Education Consultancy firm based in London, The UK. We provide information to prospective students regarding their aspired courses.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <!-- Optin Form -->
            <!-- =================================== -->
            <div class="__form-card p-5">

              <h4>Get 24/7 Free Counsultation with Expert Counsellors</h4>

              <form class="" action="include/emails-sub.inc.php" method="post">
                <div class="row align-items-baseline">
                  <div class="col-12 col-lg-4 my-2">
                    <div class="__form-group">
                      <input type="text" name="name" autocomplete="off" placeholder = " " required>
                      <label for="name" class="__lebel-name">
                        <span class="__content-name">Name</span>
                      </label>
                    </div>
                  </div>

                  <div class="col-12 col-lg-4 mb-5 mb-lg-2">
                    <div class="__form-group">
                      <input type="number" name="number" autocomplete="off" placeholder = " " required>
                      <label for="number" class="__lebel-name">
                        <span class="__content-name">Phone Number</span>
                      </label>
                    </div>
                  </div>

                  <div class="col-12 col-lg-4">
                    <button type="submit" class="btn btn-danger container-fluid p-3">Get FREE Consultation</button>
                  </div>
                </div>
              </form>
              <?php if(isset($_GET['s'])): ?>
              <div class="alert alert-light alert-dismissible fade show my-3" role="alert">
                Thank you for your response. We wil get back to you!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>

      </div>
    </div>

  <!-- hero end -->

  <div class="service">

    <!-- mid text start -->

    <div class="container-fluid mt-5 pt-5">
      <div class="container text-center align-middle my-5">
        <h2>Welcome to <span class="__color-orange">H&H Global Education.</span> Get support from<br>certified counsellors.</h2>
      </div>
    </div>

    <!-- mid text end -->

    <!-- card start -->
    <div class="container justify-content-center">
      <div class="row d-flex justify-content-between">
        <div class="col-lg-4">
          <div class="card my-2 my-lg-5 p-3 m-auto __orange-hover-border">
            <div class="card-body">
              <i class="fas fa-briefcase fa-5x __color-orange mb-3"></i>
              <h6 class="card-title">24/7 FREE Counselling</h6>
              <h6 class="card-text __color-lightblue __font-400">Always find our dedicated counsellors to help you 24/7</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4">

          <div class="card my-2 my-lg-5 p-3 m-auto __orange-hover-border">
            <div class="card-body">
              <i class="fas fa-briefcase fa-5x __color-orange mb-3"></i>
              <h6 class="card-title">Free Assessment</h6>
              <h6 class="card-text __color-lightblue __font-400">Get free assessment to evaluate you and find the perfect institute and courses.</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card my-2 my-lg-5 p-3 m-auto __orange-hover-border">
            <div class="card-body">
              <i class="fas fa-briefcase fa-5x __color-orange mb-3"></i>
              <h6 class="card-title">Visa Services</h6>
              <h6 class="card-text __color-lightblue __font-400">Visa processing services to the selected countries where our affiliated institutes are located.</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card end -->
  </div>

  <!-- hero 2 start -->

  <div class="about container-fluid p-0">
      <div class="position-relative my-5 pb-lg-5">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 600 480" style="enable-background:new 0 0 600 480;" xml:space="preserve" class="triangle-img triangle-img--align-left">
          <g>
            <path class="st0" d="M232.16,108.54,76.5,357.6C43.2,410.88,81.5,480,144.34,480H455.66c62.83,0,101.14-69.12,67.84-122.4L367.84,108.54C336.51,58.41,263.49,58.41,232.16,108.54Z" fill="url(#img2)"></path>
          </g>
          <defs>
            <pattern id="img2" patternUnits="userSpaceOnUse" width="600" height="600">
              <image xlink:href="img\hero02.jpg" width="600" height="600"></image>
            </pattern>
          </defs>
        </svg>
        <div class="container d-flex align-items-center">
          <div class="row d-flex justify-content-end">
            <div class="col-12 col-lg-6">
              <div class="jumbotron jumbotron-fluid">
                <div class="__roboto-font align-middle mt-5">
                  <h1 class=" __color-blue __font-700 __text-40px">Welcome to H&H Global Education.</h1>
                  <p class="lead __color-lightblue">We provide information to prospective students regarding their aspired courses. We also promote Institutes and their classes to prospective students. Our dedicated associates are always ready to help our students as well as our partners, should they have any questions or concerns.</p>
                  <a class="btn btn-lg __color-background-red text-white __font-400 my-4" href="about" role="button">About Us<i class="ms-2 fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- hero 2 end -->

  <!-- Fast Fact Section Start -->
  <?php require 'php/fast-facts.php'; ?>
  <!-- Fast Fact Section Ends -->

  <!-- Testimonials Starts -->
  <div class="testimonial">
    <div class="container my-5 py-5">
      <h2 class="text-center __color-red mb-0">Satisfied Customers</h2>
      <p class="text-center fw-bold mb-3.">Some happy thoughts from our students</p>
      <div class="owl-carousel">

        <div class="testimonial-card m-3 mb-5 m-md-5">
          <div class="card-body p-5">
            <div class="d-inline-flex align-items-center">
              <img src="img\Asset 1.svg" alt="" class="testimonial__img me-3">
              <div class="">
                <h5 class="__card-author">Raihan Masud</h5>
                <h6 class="__card-subtitle mb-0">MSc Pharmaceutical Science, Kingston University, London</h6>
              </div>
            </div>
            <p class="__card-text mt-4">First of all, thanks to Almighty Allah for giving me a chance to study in the UK. As well as H&H Global Education Services guided me in a proper way which leads to me have a visa quickly. Without hesitation, I can say H&H Global education the is best education consultancy firm. Thank you.</p>
          </div>
        </div>

        <div class="testimonial-card m-3 mb-5 m-md-5">
          <div class="card-body p-5">
            <div class="d-inline-flex align-items-center">
              <img src="img\Asset 2.svg" alt="" class="testimonial__img me-3">
              <div class="">
                <h5 class="__card-author">Khushi Adhani</h5>
                <h6 class="__card-subtitle mb-0">Mechanical Engineering, Liverpool John Moores University</h6>
              </div>
            </div>
            <p class="__card-text mt-4">When I'm having any difficulty regarding anything or when I'm stuck over something, he helped me to get out of that situation, or if I have any doubt he was available 24/7 and helped me out that we can do this regarding this and complete your visa procedures weekly and in a very faster way ...</p>
          </div>
        </div>

        <div class="testimonial-card m-3 mb-5 m-md-5">
          <div class="card-body p-5">
            <div class="d-inline-flex align-items-center">
              <img src="img\Asset 3.svg" alt="" class="testimonial__img me-3">
              <div class="">
                <h5 class="__card-author">Dr. Asifuzzaman Rumon</h5>
                <h6 class="__card-subtitle mb-0">MSc Cardiology and Stroke, University of Hertfordshire</h6>
              </div>
            </div>
            <p class="__card-text mt-4">I would like to thank H&H global education for their exceptional support in getting my uncoditional offer letter, making me prepared for my university credibility interview, getting my CAS letter from the university and providing me scholarship. Thank You H&H global education....</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Testimonials Ends -->

  <!-- Testimonial Video Starts -->
  <div class="__testimonial-video">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-sm-12 col-md-4 my-5">
          <h3 class="text-center text-white">Hear More from Our Student</h3>
          <p class="text-center text-white">Dr. Asifuzzaman Rumon completed MSc in Cardiology and Stroke. Here his overall Journey to United Kingdom and how H&H Global Education help him to from beggining to end.</p>

        </div>

        <!-- Photo Grid -->
        <div class="col-sm-11 col-md-7 my-5">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/Q20jQ4AZI5Y?rel=0" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Testimonial Video Ends -->

  <!-- Footer Starts -->
  <?php require 'php/footer.php'; ?>
  <!-- Footer Ends -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/74fd6a799b.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="js\script.js"></script>
</body>

</html>
