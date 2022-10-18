<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG Services</title>
    <!-- Css link -->
    <link rel="stylesheet" href="./style.css">
    <!-- Responsive link -->
    <link rel="stylesheet" href=".\responsive.css">
    <!-- Shortcut icon -->
    <link rel="shortcut icon" href=".\assets\images\sg-services-logo.png">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,300;1,500;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <!-- Aos link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
    <!-- fontowesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
       <!-- Testimonials js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
    
  

</head>
<body>


    <!-- Nav section starts  -->
     <nav class="nav">
        <a href="index.php"><img src=".\assets\images\sg-services-logo.png" alt=""></a>
        <ul class="nav-links">
            <li><a href="index.php" class="nav-item" active-color="orange">Home</a></li>
            <li><a href="aboutus.php" class="nav-item" active-color="green">About Us</a></li>
            <li class="nav-ser"><a href="#" class="nav-item nav-services">Services</a>
                <ul class="nav-sublinks">
                    <li class="nav-ac">
                        <a href="ac-services.php"><img src=".\assets\Icons-sg\AC.png" alt="">Air Conditioner</a>
                    </li>
                    <li class="nav-wm">
                        <a href="wm-services.php"><img src=".\assets\Icons-sg\washing-machine-22763436-removebg-preview.png" alt="">Washing machine</a>
                    </li>
                    <li class="nav-rg">
                    <a href="rg-services.php"><img src=".\assets\Icons-sg\refrigerator-11548484-removebg-preview.png" alt="">Refrigirator</a>
                    </li>
                </ul>
            </li>
            <li><a href="reviews.php" class="nav-item" active-color="red">Reviews</a></li>
        </ul>
        <div>
            <a href="tel:+91 6302034467" rel="nofollow" class="btn-call">
                <div class="btn-call__ico">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <a href="tel: +91 9121378937" class="call">+91 9121378937</a>
            </a>
            <button class="custom-btn btn-5 appointment-btn"><span>Appointment</span></button>
            <i class="fa-solid fa-bars hamburger-icon"></i>
           
        </div>
        <span class="nav-indicator"></span>
      </nav>
        <!-- <button>Appointment</button> -->
      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light navigation">
        <a class="navbar-brand" href="#"><img src="/assets/sg_logo.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Air Conditioner</a>
                <a class="dropdown-item" href="#">Washing Machine</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Refrigirator</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
            <div>
                <a href="tel:+91 6302034467" rel="nofollow" class="btn-call">
                    <div class="btn-call__ico">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <a href="tel: +91 9121378937" class="call">+91 9121378937</a>
                </a>
                <button class="custom-btn btn-5 appointment-btn"><span>Appointment</span></button>
                <span class="nav-indicator"></span>
            </div>
        </div>
      </nav> -->

      <!-- Nav section ends -->

      
      <!-- Conatct button section starts -->

      <!-- <section class="contact_us text-center contactus-btn">
        <div class="content">
            <div class="container">
                <h1>Tell Us What You Feel</h1>
                <h4>Feel Free To Contact Us Any Time</h4>
                <div class="contact-form-btn">
                    <div role="form" class="contact-us-form contact-btn-form">
                        <div>
                            <div class="form-group btn-group">
                                <input class="form-control input-lg" id="inputlg" type="text" placeholder="User Name">
                            </div>
                            <div class="form-group btn-group">
                                <input class="form-control input-lg" id="inputlg" type="text" placeholder="Email">
                            </div>
                            <div class="form-group btn-group">
                                <input class="form-control input-lg" id="inputlg" type="text" placeholder="Cell Phone">
                            </div>
                        </div>
                        <div>
                            <div class="form-group btn-group">
                                <textarea class="form-control" id="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="custom-btn btn-5"><span>Contact Us</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="contact-img">
                        <img src="./contcat-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
      <!-- Conatct button section ends -->

      <!-- Whats app sectin starts -->

      <div class="btn-whatsapp-chat"></div>
        <div class="box-whatsapp-chat">
        <div class="header-whatsapp-chat">
            <div class="icon-whatsapp-chat"><img src="https://www.kallpa.travel/wp-content/plugins/whatsapp-for-wordpress/assets/img/whatsapp_logo.svg" alt="" width="30px"></div>
            <div class="texto-whatsapp-chat">Star a conversation</div>
        </div>
        <div class="content-whatsapp-chat">
            <p>The team typically replies in a few minutes.</p>
            <a href="https://web.whatsapp.com/send?phone=+91 9121378937&text=Chat%20with%20Us" class="agente-whatsapp-chat" target="_blank">
            <img class="profile-img" src="https://www.kallpa.travel/wp-content/uploads/2020/11/Domingo.jpg" alt="">
            <img class="icon-profile-img" src="https://www.kallpa.travel/wp-content/plugins/whatsapp-for-wordpress/assets/img/whatsapp_logo_green.svg" alt="">
                <p><strong>Welcome</strong></p>
                <p>SG Services</p>
            </a>
        </div>
     </div>
      <!-- Whats app sectin ends -->

       <!-- show top start  -->

    <a href="#" class="scroll-top"><i class="fa-solid fa-angle-up scroll-top-logo"></i></a>
    <!-- show top end -->

    <!-- Book appointment section starts -->
    <div class="appointment-form">
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <div class="col-12">
                    <h3 class="text-uppercase mb-4">Appointment form</h3>
                </div>
                <form action="" class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" placeholder="Enter Date">
                        </div>
                        <div class="col-md-6">
                            <input type="time" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="col-12">
                            <select class="form-select">
                                <option selected>Services</option>
                                <option value="1" class="ac-select">Air Conditioner</option>
                                <option value="2" class="wm-select">Washing Machine</option>
                                <option value="3" class="rg-select">Refrigerator</option>
                            </select>
                        </div>
                        <div class="col-12 form-textarea">
                            <textarea class="form-control" placeholder="Message" rows="5" columns="15"></textarea>
                        </div>
                        <div class="col-12 mt-3">                        
                            <button type="submit" class="btn btn-primary float-end">Book Appointment</button>
                            <button type="button" class="btn btn-outline-secondary float-end me-2">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <img class="col-xs-6" src=".\assets\24-services.jpg" alt="">
        <i class="fa-solid fa-xmark remove-icon"></i>
    </div>

    <!-- Book appointment section ends -->

    <!-- Pre loader section starts -->
<!-- 
    <div id="loader-wrapper">
        <div id="loader"><img src=".\assets\images\sg-services-logo.png" alt=""></div>
  
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
  
    </div> -->



<!-- Pre loader section ends -->