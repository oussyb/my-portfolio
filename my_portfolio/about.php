<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
       <!--pages link-->
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="About.php">
    <link rel="stylesheet" href="portfolio.php">
    <link rel="stylesheet" href="services.php">
    <link rel="stylesheet" href="contact.php">
       <link rel="stylesheet" href="script.js">
       <!---css link-->
       <link rel="stylesheet" href="styles.css">

       <!--font icons-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
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

      <div class="card border-0 "  >
        <div class="row g-3">
          <div class="col-md-4">
            <img src="mmm.png" class="img-fluid ms-5" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text-center mt-5 fw-bold">About Me</h5>
              <p class="card-text fw-light mt-4 ms-5">I'm a front end developer with three years of experience in web development. I've worked on a variety of projects for clients in the food, business, and healthcare industries. I'm passionate about creating great user experiences and have a strong understanding of usability and accessibility standards.</p>
             
              

              <!----
              <div class="tab-tittle">
                  <p class="tab-link active " onclick="opentab('skills')">Skills</p>
                  <p class="tab-link " onclick="opentab('experience')">Experience</p>
                  <p class="tab-link " onclick="opentab('education')">Education</p>
                  
              </div>
              <div class="tab-content active-tab" id="skills">
                <ul>
                  <li><span class="text-danger">UI/UX</span> <br> Designing web/App interface</li>
                  <li><span class="text-danger">Web Development</span> <br> Web App Development</li>
                  <li><span class="text-danger">App Development</span> <br> builging Android/OIS Apps</li>
                </ul>
              </div>

              <div class="tab-content" id="experience">
                <ul>
                  <li><span class="text-danger">2023 - current</span> <br>Bootstrap 5 frameworks at Tecqil</li>
                  <li><span class="text-danger">2022 - 2023</span> <br>Team lead at OussyTech</li>
                  <li><span class="text-danger">2018 - 2022</span> <br>designer at OussyB graphics</li>
                </ul>
              </div>

              <div class="tab-content" id="education">
                <ul>
                  <li><span class="text-danger">2022</span> <br>BSc Information Systems at UTG</li>
                  <li><span class="text-danger">2020</span> <br>Graphics design training at Digitex</li>
                  <li><span class="text-danger">2018</span> <br>Graphics intern at OussyB</li>
                </ul>
              </div>
              -->

              <div class="accordion w-50 ms-5 mt-5" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header " id="headingOne">
                    <button class="accordion-button text-light bg-info"  data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Skills
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li><span class="text-danger mt-5">Html,css & javascript</span> <br> Designing web/App interface</li>
                        <li><span class="text-danger mt-5">Web Development</span> <br> Web App Development</li>
                        <li><span class="text-danger mt-5">Bootstrap</span> <br> building responsive, mobile-first front-end</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header text-primary" id="headingTwo">
                    <button class="accordion-button text-light bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Experience
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li><span class="text-danger mt-5">2023 - current</span> <br>Bootstrap 5 frameworks at Tecqil</li>
                        <li><span class="text-danger mt-5">2022 - 2023</span> <br>Intern at OussyTech</li>
                        <li><span class="text-danger mt-5">2018 - 2022</span> <br>designer at OussyB graphics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header " >
                    <button class="accordion-button text-light bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Education
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" >
                    <div class="accordion-body ">
                      <ul>
                        <li><span class="text-danger mt-5">2022</span> BSc Information Systems at UTG</li>
                        <li><span class="text-danger mt-5">2020</span> Graphics design training at Digitex</li>
                        <li><span class="text-danger mt-5">2018</span> Graphics intern at OussyB</li>
                      </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>




      <!---testimonial-->
      <section style="color: #000; background-color: rgb(23, 180, 201);">
        <div class="container py-5 mt-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
              <h3 class="fw-bold mb-4">Testimonials</h3>
              <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                WHAT PEOPLE SAY
              </p>
            </div>
          </div>
      
          <div class="row text-center">
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="carde">
                <div class="carde-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="pic/awa.PNG"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h5 class="font-weight-bold">Awa Jassey</h5>
                  <h6 class="font-weight-bold my-3">Nurse at MRC Gambia</h6>
                  <ul class="list-unstyled d-flex justify-content-center">
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star-half-alt fa-sm text-danger"></i>
                    </li>
                  </ul>
                  <p class="mb-2">
                    <i class="fa fa-quote-left pe-2"></i>Ousainou is one of the most helpful and dedicated people I’ve had a chance to come across recently. He is honest about what he wants and expects the other person to be the same. Once he takes up a task, he’ll complete it with full dedication but if his heart isn’t in to something he’ll alert someone before hand instead of dragging on the task in to oblivion.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="carde">
                <div class="carde-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="pic/mass.jpg"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h5 class="font-weight-bold">Massay Bah</h5>
                  <h6 class="font-weight-bold my-3">IT Manager GNPC</h6>
                  <ul class="list-unstyled d-flex justify-content-center">
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                  </ul>
                  <p class="mb-2">
                    <i class="fa fa-quote-left pe-2"></i>Ousainou was wonderful! He was so knowledgeable and very helpful with my project. My project was completed in less than 48 hours from the time I posted the job. I would highly recommend him for any project. He was truly delightful to work with.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-0">
              <div class="carde">
                <div class="carde-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="pic/ndey.PNG"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h5 class="font-weight-bold">Ndey Astou Jaiteh</h5>
                  <h6 class="font-weight-bold my-3">Founder at Tecqil and Web Developer </h6>
                  <ul class="list-unstyled d-flex justify-content-center">
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                    <li>
                      <i class="fa fa-star fa-sm text-danger"></i>
                    </li>
                  </ul>
                  <p class="mb-2">
                    <i class="fa fa-quote-left pe-2"></i>Ousainou is a great person to work with as he is able to manage his own time and continuously contribute to the organization. He is creative and a thought leader in the internet industry.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        
      </script>

</body>
</html>