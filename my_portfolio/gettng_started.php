<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gettng Started</title>
      <!--pages link-->
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="About.php">
    <link rel="stylesheet" href="portfolio.php">
    <link rel="stylesheet" href="services.php">
    <link rel="stylesheet" href="contact.php">
       <link rel="stylesheet" href="script.js">
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

      <div class="samba">

      <div class="conn text-center">
        <h1>My Services</h1>
     
        <div class="row row-cols-1 row-cols-md-3 g-2 mt-5">
          <div class="col">
            <div class="cards h-100 w-75">
              <img src="pic/ww.png" class="card-img-top" />
              
              <div class="card-body">
                <h5 class="card-title">Web Design</h5>
                <p class="line1">
                  Highly performant and user friendly websites, inherently seo-optimized.
                </p>
              </div>
            
            </div>
          </div>
          <div class="col">
            <div class="cards h-100 w-75 ">
              <img src="pic/ui.png" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">UI/UX Design</h5>
                <p class="line1">Aim to create a positive user experience that encourages customers to stick with a brand or product.</p>
              </div>
             
            </div>
          </div>
          <div class="col">
            <div class="cards h-100 w-75">
              <img src="pic/wd.png" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">App Design</h5>
                <p class="line1">
                  Bespoke and user facing cross-platform mobile and web apps.
                </p>
              </div>
              
            </div>
          </div>

          <div class="col">
            <div class="cards h-100 w-75">
              <img src="pic/stt-removebg-preview.png" class="card-img-top" />
              
              <div class="card-body">
                <h5 class="card-title">Software Testing</h5>
                <p class="line1">
                  Highly performant and user friendly websites, inherently seo-optimized.
                </p>
              </div>
            
            </div>
          </div>

          <div class="col">
            <div class="cards h-100 w-75 ">
              <img src="pic/wf.png" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">Managing software workflow</h5>
                <p class="line1">Aim to create a positive user experience that encourages customers to stick with a brand or product.</p>
              </div>
             
            </div>
          </div>

          <div class="col">
            <div class="cards h-100 w-75">
              <img src="pic/uid-removebg-preview.png" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">Software solution</h5>
                <p class="line1">
                  Bespoke and user facing cross-platform mobile and web apps.
                </p>
              </div>
              
            </div>
          </div>

          
        </div>

        

        

    </div>

        
    <div class="container text-center">
        <h1>My Work</h1>
      
        <div class="row row-cols-1 row-cols-md-3 g-2 mt-5 ">
         
          <div class="col">
            <div class="cards h-100 w-75 ">
             
              <img src="pic/bu.jpg" class="card-img-top" />
              <div class="card-body">
               
                <h5 class="card-title">Burger App</h5>
                <p class="line1">
                  Highly performant and user friendly websites, inherently seo-optimized.
                </p>
              </div>
            
            </div>
          </div>
          <div class="col">
            <div class="cards h-100 w-75 ">
              <img src="pic/orexy.PNG" class="card-img-top" />
           
              <div class="card-body">
                <h5 class="card-title">Consultancy App</h5>
                <p class="line1">Aim to create a positive user experience that encourages customers to stick with a brand or product.</p>
              </div>
             
            </div>
          </div>
          <div class="col">
            <div class="cards h-100 w-75  hover-zoom">
              <img src="pic/sc.jpg" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">School App</h5>
                <p class="line1">
                  Bespoke and user facing cross-platform mobile and web apps.
                </p>
              </div>
              
            </div>
          </div>
        </div>

    </div>

    <div class="container1 d-flex align-items-center justify-content-center flex-wrap">
      <div class="box">
          <div class="body">
              <div class="imgContainer">
                  <img src="pic/sc.jpg" alt="">
              </div>
              <div class="content d-flex flex-column align-items-center justify-content-center">
                  <div>
                      <h3 class="text-white fs-5">School App</h3>
                      <p class="fs-6 text-white">Bespoke and user facing cross-platform mobile and web apps.</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="box">
          <div class="body">
              <div class="imgContainer">
                  <img src="pic/sc.jpg" alt="">
              </div>
              <div class="content d-flex flex-column align-items-center justify-content-center">
                  <div>
                      <h3 class="text-white fs-5">School App</h3>
                      <p class="fs-6 text-white">Bespoke and user facing cross-platform mobile and web apps</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="box">
          <div class="body">
              <div class="imgContainer">
                  <img src="pic/sc.jpg" alt="">
              </div>
              <div class="content d-flex flex-column align-items-center justify-content-center">
                  <div>
                      <h3 class="text-white fs-5">School App</h3>
                      <p class="fs-6 text-white">Bespoke and user facing cross-platform mobile and web apps</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
     
  
    </div>
  
</div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        
      </script>

</body>
</html>