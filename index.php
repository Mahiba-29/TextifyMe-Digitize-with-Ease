<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>Textifyme</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
      
        /* Loading spinner CSS */
        #loading {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-left-color: #333;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loader-text {
            color: #333;
            margin-top: 10px;
            text-align: center;
        }
    </style>
  </head>
<body>
  
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>TEXTIFYME :</em> DIGITIZE WITH EASE</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li><a href="#section2">Login</a></li>
        <li><a href="#section4">About Us</a>
        
          <!-- <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
            <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
          </ul> -->
        </li>
        
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contact</a></li>
        <!-- <li><a href="https://templatemo.com" class="external">External</a></li> -->
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
           <!-- Drop File to Upload -->
    <div style="position: absolute; top: 50%; left: 50%; width: 400px; height: 400px; margin-top: -200px; margin-left: -200px; border-radius: 2px; box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1); overflow: hidden; background: linear-gradient(to top right, rgb(19, 5, 19) 0%, rgb(243, 174, 89) 100%); color: #333; font-family: 'Open Sans', Helvetica, sans-serif;">
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; height: 260px; border-radius: 3px; box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2); background: #fff; display: flex; align-items: center; justify-content: space-evenly; flex-direction: column;">
          <div style="width: 100%; height: 50px; border-bottom: 1px solid #999; text-align: center;">
              <h1 style="font-size: 16px; font-weight: 300; color: #666;">Drop file to upload</h1>
              <h5 style="font-size: 16px; font-weight: 300; color: #666;">JPG AND PNG ONLY</h5>
              <br>
              <p class="file-name" id="fileName">No file chosen</p>
          </div>
          <br><br>
          <div style="width: 100px; height: 80px; border: 1px dashed #999; border-radius: 3px; text-align: center;">
          <!-- <form enctype="multipart/form-data" method="post" action="/php/file_upload.php">
              <img src="http://100dayscss.com/codepen/upload.svg" style="margin: 25px 2px 2px 2px;" />
              <label for="file" class="file-input-container">
              <input type="file"id="file" name="file" accept=".jpg, .jpeg, .png, .pdf" style="position: relative; top: -62px; left: 0; width: 100%; height: 100%; opacity: 0;"/>  
</form> -->
</form> 
<form id="uploadForm" enctype="multipart/form-data" method="post" action="upload.php">
    <img src="http://100dayscss.com/codepen/upload.svg" style="margin: 25px 2px 2px 2px;" />
    <label for="file" class="file-input-container">
        <input type="file" id="file" name="file" accept=".jpg, .jpeg, .png, .pdf" style="position: relative; top: -62px; left: 0; width: 100%; height: 100%; opacity: 0;"/>  
    </label>

            </div>


          <script>
            document.getElementById('file').addEventListener('change', function() {
              const fileName = this.files[0].name;
              document.getElementById('fileName').innerText = fileName;
              document.getElementById('fileUploadedText').innerText = "File uploaded";
            });

            document.getElementById('uploadForm').addEventListener('submit', function() {
        // Show loading spinner when form is submitted
        document.getElementById('loading').style.display = 'block';
        
        // Continue with the form submission after showing the loading spinner
        return true;
    });
          </script>
           
          <!-- <button style="display: block; width: 140px; height: 40px; background: rgb(16, 5, 16); color: #fff; border-radius: 3px; border: 0; box-shadow: 0 3px 0 0 rgb(122, 112, 117); transition: all 0.3s ease-in-out; font-size: 14px;" type="button" name="uploadbutton">Upload file</button>
      </div> -->
      <p id="fileUploadedText" style="font-size: 20px; font-weight: bold; color: #333; margin-top: 20px; text-transform: uppercase;"></p>

  <!-- Loading spinner -->
  <div id="loading">
    <div class="spinner"></div>
    <div class="loader-text">Loading...</div>
</div>
          </div>
  </div>

  <!-- Buttons -->
  <div style="position: absolute; top:  0%; left: 70%; transform: translate(-7%, 7%); margin-top: 60px;">
      <!-- <a href="Edit1.html"><button style="background-color: rgb(21, 21, 21); color: white; padding: 5px; border: none; border-radius: 2px; margin-right: display: inline-block;">Convert to Digital format</button></a>
      <a href="Edit1.html"><button style="background-color: rgb(19, 19, 19); color: white; padding: 5px; border: none; border-radius: 2px; margin-right: display: inline-block;">Summary</button></a>
      <a href="Edit1.html"> <button style="background-color: rgb(22, 21, 21); color: white; padding: 5px; border: none; border-radius: 2px; display: inline-block;">Translate</button>  -->

      <input type="submit" value="Convert to Digital format">
      <input type="submit" value="Translate text">
      <input type="submit" value="Summarize text">
      
  </div> 
  </form>

      </div>
</section>


  
  <!-- ***** Main Banner Area End ***** -->

  <section class="features">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div style="margin-bottom: 20px;">Instructions here</div>
              <div class="content-show">
               
                <h4><i class="fa fa-book" ></i>Image to Text</h4>
              </div>
              <div class="content-hide">
                <p>Select or drop the files using the 'Upload File' button. It can be a scanned/non-scanned image. Once uploaded the software would take a few seconds to process the file. After getting processed, move forward to the next step.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil" ></i>Edit & Review</h4>
              </div>
              <div class="content-hide">
                <p>Once the document is processed, the software would take you to the review screen. In the review screen, you can see the extracted text at the left panel of your screen. If you find an issue with the extracted data, you can correct and fix it right there.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section3">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-download" ></i>Convert & Download
                </h4>
              </div>
              <div class="content-hide">
                <p>Sit back and watch as TextifyMe swiftly extract the data you need. Download the data in TXT format. No more headache-inducing manual data entry!</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section4">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Register Now</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
         
            <section class="section why-us" data-section="section2">
              <div class="container">
            
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <style>
                            *,
                            *:before,
                            *:after {
                                box-sizing: border-box;
                                margin: 0;
                                padding: 0;
                            }
                    
                            body {
                                font-family: 'Open Sans', Helvetica, Arial, sans-serif;
                                background: #ffffff;
                            }
                    
                            input,
                            button {
                                border: none;
                                outline: none;
                                background: none;
                                font-family: 'Open Sans', Helvetica, Arial, sans-serif;
                            }

                            input[type=submit] {
                              padding: 10px 15px;
                              background: rgb(16, 5, 16);
                              border: 0 none;
                              cursor: pointer;
                              /* margin: 30px 0px 10px 5px; */
                              -webkit-border-radius: 5px;
                              border-radius: 5px;
                              color: white; /* Added color property */
                              font-size: 16px; /* Added font size */
                              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Added box shadow */
                              display: block; /* Added display property */
                              width: 240px; /* Added width */
                              height: 40px; /* Added height */
                              transition: all 0.3s ease-in-out; /* Added transition */
                            }

                            input[type=submit]:hover {
                              background-color: rgb(32, 10, 32); /* Lightened black color on hover */
                            }

                            /* Additional styles for consistency */
                            input[type=submit] {
                              padding: 10px 20px; /* Modified padding */
                              background: rgb(16, 5, 16); /* Added background */
                              border-radius: 3px; /* Added border-radius */
                              border: 0; /* Added border */
                              box-shadow: 0 3px 0 0 rgb(122, 112, 117); /* Added box-shadow */
                              transition: all 0.3s ease-in-out; /* Added transition */
                              font-size: 14px; /* Added font-size */
                              margin: 0 auto; /* Align button in the center */
                            }

                    
                            .tip {
                                font-size: 20px;
                                margin: 40px auto 50px;
                                text-align: center;
                            }
                    
                            .cont {
                                border-radius: 20px;
                                overflow: hidden;
                                position: relative;
                                width: 900px;
                                height: 750px; /* Increased height */
                                margin: 0 auto 100px;
                                background: #9e9b9b;
                                box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.3), 10px 10px 15px rgba(70, 70, 70, 0.15),
                                    inset -10px -10px 15px rgba(255, 255, 255, 0.3), inset 10px 10px 15px rgba(70, 70, 70, 0.15);
                            }
                    
                            .form {
                                position: relative;
                                width: 640px;
                                height: 100%;
                                -webkit-transition: -webkit-transform 1.2s ease-in-out;
                                transition: -webkit-transform 1.2s ease-in-out;
                                transition: transform 1.2s ease-in-out;
                                transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
                                padding: 20px 30px 0;
                            }
                    
                            .sub-cont {
                                overflow: hidden;
                                position: absolute;
                                left: 640px;
                                top: 0;
                                width: 900px;
                                height: 100%;
                                padding-left: 260px;
                                background: #fff;
                                -webkit-transition: -webkit-transform 1.2s ease-in-out;
                                transition: -webkit-transform 1.2s ease-in-out;
                                transition: transform 1.2s ease-in-out;
                                transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
                            }
                    
                            .cont.s--signup .sub-cont {
                                -webkit-transform: translate3d(-640px, 0, 0);
                                transform: translate3d(-640px, 0, 0);
                            }

                            
                    
                            button {
                                display: block;
                                margin: 0 auto;
                                width: 260px;
                                height: 36px;
                                border-radius: 30px;
                                color: #fff;
                                font-size: 15px;
                                cursor: pointer;
                            }
                    
                            .img {
                                overflow: hidden;
                                z-index: 2;
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 260px;
                                height: 100%;
                                padding-top: 360px;
                            }
                    
                            .img:before {
                                content: '';
                                position: absolute;
                                right: 0;
                                top: 0;
                                width: 900px;
                                height: 100%;
                                background-image: url("ext.jpg");
                                opacity: .8;
                                background-size: cover;
                                -webkit-transition: -webkit-transform 1.2s ease-in-out;
                                transition: transform 1.2s ease-in-out;
                                transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
                            }
                    
                            .img:after {
                                content: '';
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                background: rgba(0, 0, 0, 0.6);
                            }
                    
                            .cont.s--signup .img:before {
                                -webkit-transform: translate3d(640px, 0, 0);
                                transform: translate3d(640px, 0, 0);
                            }
                    
                            .img__text {
                                z-index: 2;
                                position: absolute;
                                left: 0;
                                top: 50px;
                                width: 100%;
                                padding: 0 20px;
                                text-align: center;
                                color: #fff;
                                -webkit-transition: -webkit-transform 1.2s ease-in-out;
                                transition: -webkit-transform 1.2s ease-in-out;
                                transition: transform 1.2s ease-in-out;
                                transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
                            }
                    
                            .img__text h2 {
                                margin-bottom: 10px;
                                font-weight: normal;
                            }
                    
                            .img__text p {
                                font-size: 14px;
                                line-height: 1.5;
                            }
                    
                            .cont.s--signup .img__text.m--up {
                                -webkit-transform: translateX(520px);
                                transform: translateX(520px);
                            }
                    
                            .img__text.m--in {
                                -webkit-transform: translateX(-520px);
                                transform: translateX(-520px);
                            }
                    
                            .cont.s--signup .img__text.m--in {
                                -webkit-transform: translateX(0);
                                transform: translateX(0);
                            }
                    
                            .img__btn {
                                overflow: hidden;
                                z-index: 2;
                                position: relative;
                                width: 100px;
                                height: 36px;
                                margin: 0 auto;
                                background: transparent;
                                color: #fff;
                                text-transform: uppercase;
                                font-size: 15px;
                                cursor: pointer;
                            }
                    
                            .img__btn:after {
                                content: '';
                                z-index: 2;
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                border: 2px solid #fff;
                                border-radius: 30px;
                            }
                    
                            .img__btn span {
                                position: absolute;
                                left: 0;
                                top: 0;
                                display: -webkit-box;
                                display: flex;
                                -webkit-box-pack: center;
                                justify-content: center;
                                -webkit-box-align: center;
                                align-items: center;
                                width: 100%;
                                height: 100%;
                                -webkit-transition: -webkit-transform 1.2s;
                                transition: -webkit-transform 1.2s;
                                transition: transform 1.2s;
                                transition: transform 1.2s, -webkit-transform 1.2s;
                            }
                    
                            .img__btn span.m--in {
                                -webkit-transform: translateY(-72px);
                                transform: translateY(-72px);
                            }
                    
                            .cont.s--signup .img__btn span.m--in {
                                -webkit-transform: translateY(0);
                                transform: translateY(0);
                            }
                    
                            .cont.s--signup .img__btn span.m--up {
                                -webkit-transform: translateY(72px);
                                transform: translateY(72px);
                            }
                    
                            h2 {
                                width: 100%;
                                font-size: 26px;
                                text-align: center;
                            }
                    
                            label {
                                display: block;
                                width: 260px;
                                margin: 25px auto 0;
                                text-align: center;
                            }
                    
                            label span {
                                font-size: 12px;
                                color: #cfcfcf;
                                text-transform: uppercase;
                            }
                    
                            input {
                                display: block;
                                width: 100%;
                                margin-top: 5px;
                                padding-bottom: 5px;
                                font-size: 16px;
                                border-bottom: 1px solid rgba(0, 0, 0, 0.4);
                                text-align: center;
                            }
                    
                            .forgot-pass {
                                margin-top: 15px;
                                text-align: center;
                                font-size: 12px;
                                color: #cfcfcf;
                            }
                    
                            .submit {
                                margin-top: 40px;
                                margin-bottom: 20px;
                                background: #d4af7a;
                                text-transform: uppercase;
                            }
                    
                            .fb-btn {
                                border: 2px solid #d3dae9;
                                color: #8fa1c7;
                            }
                    
                            .fb-btn span {
                                font-weight: bold;
                                color: #455a81;
                            }
                    
                            .sign-in {
                                -webkit-transition-timing-function: ease-out;
                                transition-timing-function: ease-out;
                            }
                    
                            .cont.s--signup .sign-in {
                                -webkit-transition-timing-function: ease-in-out;
                                transition-timing-function: ease-in-out;
                                -webkit-transition-duration: 1.2s;
                                transition-duration: 1.2s;
                                -webkit-transform: translate3d(640px, 0, 0);
                                transform: translate3d(640px, 0, 0);
                            }
                    
                            .sign-up {
                                -webkit-transform: translate3d(-900px, 0, 0);
                                transform: translate3d(-900px, 0, 0);
                            }
                    
                            .cont.s--signup .sign-up {
                                -webkit-transform: translate3d(0, 0, 0);
                                transform: translate3d(0, 0, 0);
                                background: #7b7979; /* Added red background */
                                padding: 50px 30px 0; /* Adjusted padding */
                            }
                        </style>
                    </head>
                    
                    <body>
                        <br>
                        <br>
                        <div class="cont">
                            <div class="form sign-in">
                                <h2>Welcome</h2>
                                <form action="php/login.php" method="post">
                                    <label>
                                        <span>Email</span>
                                        <input type="email" id="email1" name="email1" />
                                    </label>
                                    <label>
                                        <span>Password</span>
                                        <input type="password" id="password1" name="password1" />
                                    </label>
                                    <p class="forgot-pass">Forgot password?</p>
                                    <br>
                                    <input type="submit" value="Sign In" />
                                </form>
                            </div>

                    
                            <div class="sub-cont">
                                <div class="img">
                                    <div class="img__text m--up">
                                        <h3>Don't have an account? Please Sign up!</h3>
                                    </div>
                                    <div class="img__text m--in">
                                        <h3>If you already have an account, just sign in.</h3>
                                    </div>
                                    <div class="img__btn">
                                        <span class="m--up">Sign Up</span>
                                        <span class="m--in">Sign In</span>
                                    </div>
                                </div>
                                <div class="form sign-up"> 
                                  
                                  <h2>Create your Account</h2>
                                  <form action="php/db.php" method="post">
                                  <label>
                                      <span>Name</span>
                                      <input type="text" id="signupName" name="fname" required=""/>
                                  </label>
                                  <label>
                                      <span>Email</span>
                                      <input type="email" id="signupEmail" name="email"required=""/>
                                  </label>
                                  <label>
                                      <span>Password</span>
                                      <input type="password" id="signupPassword" name="password" required=""/>
                                  </label>
                                  <label>
                                      <span>Confirm Password</span>
                                      <input type="password" id="confirmPassword" name="cpassword" required=""/>
                                  </label>
                                  <br><br>
                                  <input type="submit" class="submit" onclick="validateAndSignUp()"/>
                                  
                          </div>
                              </div>
                              
                              <script>
                            function validateAndSignUp() {
                                var name = document.getElementById('signupName').value;
                                var email = document.getElementById('signupEmail').value;
                                var password = document.getElementById('signupPassword').value;
                                var confirmPassword = document.getElementById('confirmPassword').value;

                                // Simple validation
                                if (name.trim() === '' || email.trim() === '' || password.trim() === '' || confirmPassword.trim() === '') {
                                    alert('Please fill in all fields');
                                    return false; // Prevent form submission
                                }

                                // Additional validation for email
                                if (!validateEmail(email)) {
                                    alert('Please enter a valid email address');
                                    return false; // Prevent form submission
                                }

                                // Check if passwords match
                                if (password !== confirmPassword) {
                                    // alert('Passwords do not match');
                                    return false; // Prevent form submission
                                }

                                // Proceed with sign-up logic (You can send data to the server here)
                                // alert('Signing up...');

                                // Return true to allow form submission
                                return true;
                            }

                            function validateEmail(email) {
                                // Regular expression for basic email validation
                                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                return emailRegex.test(email);
                            }
                        </script>
                    
                        <script>
                            document.querySelector('.img__btn').addEventListener('click', function () {
                                document.querySelector('.cont').classList.toggle('s--signup');
                            });
                        </script>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- About US -->  

<section class="section courses" data-section="section4" style="margin-top: -200px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="images/course-01.jpg" alt="Course #1">
            <div class="down-content">
            <h4>Conversion:</h4>
              <p>"TEXTIFME: DIGITIZE WITH EASE" converts scanned handwritten documents into digital text effortlessly.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/course-2.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Upload Process:</h4>
              <p>We offer a simple and user-friendly platform for users to upload and convert their handwritten documents.</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="Author 2">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/course-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Translation Services:</h4>
              <p>Ur platform provides translation services for converting text into regional languages.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/course-4.png" alt="">
            <div class="down-content">
              <h4>Quick Summaries: </h4>
              <p>TEXTIFME:DIGITIZE WITH EASE also generates a synopsis of the document for quick and easy summaries.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/course-5.jpeg" alt="">
            <div class="down-content">
              <h4>TEXTIFYME:DIGITIZE WITH EASE</h4>
              <p>Join us at TEXTIFME:DIGITIZE WITH EASE and experience the convenience of digitizing handwritten documents!</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Link jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Link Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
        });
    </script>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>    
    
</body>
</html>