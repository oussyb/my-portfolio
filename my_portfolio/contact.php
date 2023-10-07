<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Contact</title>
    <!--pages link-->
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="About.php">
    <link rel="stylesheet" href="portfolio.php">
    <link rel="stylesheet" href="services.php">
    <link rel="stylesheet" href="contact.php">
    <!---css link-->
    <link rel="stylesheet" href="styles.css">

    <!---Box icon-->
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!--remixicon-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

  <!--googlefonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <a href="#" class="logo">My<span>Brand</span></a>
        <ul class="nav">
         <li><a href="index.php">Home</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="portfolio.php">Portfolio</a></li>
         <li><a href="services.php">Services</a></li>
         <li><a href="conatact.php">Contact</a></li>
        </ul> 
        
        <div class="bx bx-menu" id="menu-icon"></div>
    
      </header>

      <div class="famm">
<!--Section: Contact v.2-->
<section class="mb-4 mt-5">

  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
  <!--Section description-->
  <p class="text-center w-responsive m-auto mb-5">Do you have any questions? Please do not hesitate to contact. I will come back to you within
      a matter of hours to help you.</p>

  <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                         <label for="name" class="">Your name</label>
                          <input type="text" id="name" name="name" class="form-control text-dark">
                         
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                        <label for="email" class="">Your email</label>
                          <input type="text" id="email" name="email" class="form-control text-dark">
                          
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                        <label for="subject" class="">Subject</label>
                          <input type="text" id="subject" name="subject" class="form-control text-dark">
                          
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                        <label for="message">Your message</label>
                          <textarea type="text" id="message" name="message" rows="2" class="form-control text-dark md-textarea"></textarea>
                          
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-center text-md-left mt-5">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
      </div>
      <!--Grid column-->

      
  </div>

</section>
<!--Section: Contact v.2-->

</div>


      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

</body>
</html>