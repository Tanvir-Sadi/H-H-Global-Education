<!doctype html>
<html lang="en">
<?php require 'php/header.php'; ?>

  <!--  Essential META Tags -->

  <meta property="og:title" content="H&H Global Education">
  <meta property="og:description" content="Serving Your Future Through Education">
  <meta property="og:image" content="img\hero.jpg">
  <meta property="og:url" content="https://www.hhglobaledu.co.uk/">
  <meta name="twitter:card" content="summary_large_image">


  <!--  Non-Essential, But Recommended -->

  <meta property="og:site_name" content="H&H Global Education">
  <meta name="twitter:image:alt" content="Serving Your Future Through Education">

  <title>H&H Global Education | Serving Your Future Through Education</title>
</head>


<body>
  <?php require 'php/navbar.php'; ?>

  <!-- hero start -->

  <div class="__register d-none d-md-block  container-fluid py-5">
    <div class="container">
      <div class="row d-sm-block">
        <div class="col-12 col-lg-6 clear-right">
          <div class="jumbotron jumbotron-fluid">
            <div class="my-5 py-5 __roboto-font">
              <h1 class=" text-white __font-700 __text-40px">Register for Counselling</h1>
              <p class="lead text-white">H&H Global is an Education Consultancy firm based in London, The UK. We provide information to prospective students regarding their aspired courses.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- hero end -->

  <!-- Registration-Card starts -->

  <div class="about __color-background-blue py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="text-white me-lg-5">Registration Form</h2>
          <p class="text-white me-lg-5">We can help you choose from thousands of UK courses and hundreds of universities and colleges located all over the UK with our free UK University Application Process.</p>
          <form class="me-lg-5"action="include\register-sub.inc.php" method="post">
            <div class="mb-4">
              <label for="exampleFormControlInput1" class="form-label text-white ">Full Name</label>
              <input class="form-control form-control-lg" name="Fullname" type="text" id="exampleFormControlInput1" placeholder="Name">
            </div>

            <div class="mb-4">
              <label for="exampleFormControlInput2" class="form-label text-white ">Email address</label>
              <input name="Email" type="email" class="form-control form-control-lg" id="exampleFormControlInput2" placeholder="name@example.com">
            </div>

            <div class="mb-4">
              <label for="exampleFormControlInput3" class="form-label text-white ">Contact Number</label>
              <input Name="Contact_Number" type="number" class="form-control form-control-lg" id="exampleFormControlInput3" placeholder="01...">
            </div>

            <label class="form-label text-white ">District</label>
                <select name ="District" class="form-select form-select-lg mb-4" aria-label="Default select example">

                  <option selected>Select District</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Sylhet">Sylhet</option>
                  <option value="Other">Other</option>
                </select>

            <div class="row">
              <div class="col">
                <label class="form-label text-white ">IELTS Score</label>
                <select name="IELTS" class="form-select form-select-lg mb-4" aria-label="Default select example">

                  <option selected>Select Your IELTS Score</option>
                  <option value="Above 6.0">Above 6.0</option>
                  <option value="5.5 to 6.0">5.5 to 6.0</option>
                  <option value="Below 5.0">Below 5.0</option>
                </select>
              </div>
              <div class="col">
                <label class="form-label text-white">Apply for</label>
                <select name="Degree" class="form-select form-select-lg mb-3" aria-label="Default select example">
                  <option selected>Select Preffered Level</option>
                  <option value="International Foundation Year">International Foundation Year</option>
                  <option value="International Year One">International Year One</option>
                  <option value="Pre-Master's Program">Pre-Master's Program</option>
                  <option value="Undergraduate">Undergraduate</option>
                  <option value="Postgraduate">Postgraduate</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div>

            <!-- <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue commodo, donec posuere in. Praesent ante facilisis tellus blandit. Sed mi sagittis libero nulla nec, elit vulputate donec.
              </label>
            </div> -->

            <button type="submit" class="my-3 px-5 btn btn-lg btn-danger">Submit</button>
          </form>


        </div>
        <div class="col-md-4 border-start" >
          <div class="ps-3">
            <h3>Frequently Asked Questions</h3>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start border-0 __color-background-blue">
                <div class="ms-2 me-auto">
                  <div class="fw-bold fs-4 text-danger">How Much are UK tuition Fees for International Students?</div>
                  <span class="text-light">
                    Various sources estimate that the average annual cost of an UK degree for an international student is £12,000 – £15,000 a year – although as we outlined above, some can cost significantly more than that.
                  </span>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start border-0 __color-background-blue">
                <div class="ms-2 me-auto">
                  <div class="fw-bold fs-4 text-danger">UK Living Cost for International Students</div>
                  <span class="text-light">
                    Tuition fees aren't the only cost you'll have to account for when coming to study in the UK – you'll need to budget for living costs as well. In order to get the Tier 4 student visa required to live and study in the UK, you'll need to prove you have enough money to cover your living expenses while here. This equates to outside London £1,015 (£1,265 if you'll be based in London) for each month of study up to nine months. So if your course is nine months or more, you'll need at least £9,135 (£11,385 in London) in your bank account in order to get a visa.
                  </span>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start border-0 __color-background-blue">
                <div class="ms-2 me-auto">
                  <div class="fw-bold fs-4 text-danger">Is There any counselling or Service Charges?</div>
                  <span class="text-light">
                    No. we provide charge free service for all students.
                  </span>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>

    </div>


  </div>
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
