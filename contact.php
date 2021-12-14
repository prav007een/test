<?php
   if (isset($_POST["submit"])) {
   	$name = $_POST['name'];
   	$email = $_POST['email'];
   	$message = $_POST['message'];
   	$phone = $_POST['phone'];
   	$from = 'SBM'; 
   	$to = 'admin@sbmtradinguae.com'; 
   	$subject = 'Message from sbmtradinguae.com';
   	
   	$body ="From: $name\n E-Mail: $email\n Message:\n $message \nPhone Number:$phone";
   
   	// Check if name has been entered
   	if (!$_POST['name']) {
   		$errName = 'Please enter your name';
   	}
   	
   	// Check if email has been entered and is valid
   	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
   		$errEmail = 'Please enter a valid Email Address';
   	}
   	
   	//Check if message has been entered
   	if (!$_POST['message']) {
   		$errMessage = 'Please enter your Message';
   	}
   
   	if (!$_POST['phone']) {
   		$errNumber = 'Please enter your Number';
   	}
   
   
   // If there are no errors, send the email
   if (!$errName && !$errEmail && !$errMessage && !$errNumber) {
   if (mail ($to, $subject, $body, $from)) {
   	$result='<div class="alert alert-success">Thank You! We will be in touch</div>';
   } else {
   	$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
   }
   }
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Contact</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--===============================================================================================-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
      <!--===============================================================================================-->
      <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <!--===============================================================================================-->
   </head>
   <body class="animsition">
      <a href="https://wa.me/971522930442"><img src="images/icons/whatsapp1.png" class="float-app"></a>
      <!-- Header -->
      <header>
         <!-- Header desktop -->
         <div class="wrap-menu-header gradient1 trans-0-4">
            <div class="container h-full">
               <div class="wrap_header trans-0-3">
                  <!-- Logo -->
                  <div class="logo">
                     <a href="index.html">
                     <img src="images/logo.png" alt="IMG-LOGO" data-logofixed="images/logo.png">
                     </a>
                  </div>
                  <!-- Menu -->
                  <div class="wrap_menu p-l-45 p-l-0-xl">
                     <nav class="menu">
                        <ul class="main_menu">
                           <li>
                              <a href="index.html">Home</a>
                           </li>
                           <li>
                              <a href="index.html#about">About</a>
                           </li>
                           <li>
                              <a href="index.html#home-menu">Products</a>
                           </li>
                           <li>
                              <a href="gallery.html">Gallery</a>
                           </li>
                           <li>
                              <a href="contact.php">Contact</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  <!-- Social -->
                  <div class="social flex-w flex-l-m p-r-20">
                     <a href="https://www.linkedin.com/in/vijay-arvind-26b02b105"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                     <a href="https://wa.me/971522930442"><i class="fa fa-whatsapp m-l-21" aria-hidden="true"></i></a>
                     <a href="tel:+971522930442"><i class="fa fa-phone m-l-21" aria-hidden="true"></i></a>
                     <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Sidebar -->
      <aside class="sidebar trans-0-4">
         <!-- Button Hide sidebar -->
         <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>
         <!-- - -->
         <ul class="menu-sidebar p-t-95 p-b-70">
            <li class="t-center m-b-13">
               <a href="index.html" class="txt19">Home</a>
            </li>
            <li class="t-center m-b-13">
               <a href="index.html#about" class="txt19">About</a>
            </li>
            <li class="t-center m-b-13">
               <a href="index.html#home-menu" class="txt19">Products</a>
            </li>
            <li class="t-center m-b-13">
               <a href="gallery.html" class="txt19">Gallery</a>
            </li>
            <li class="t-center m-b-33">
               <a href="contact.php" class="txt19">Contact</a>
            </li>
         </ul>
         <!-- - -->
         <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
            <!-- - -->
            <h4 class="txt20 m-b-33">
               Gallery
            </h4>
            <!-- Gallery -->
            <div class="wrap-gallery-sidebar flex-w">
               <a class="item-gallery-sidebar wrap-pic-w" href="images/products/b7.jpg" data-lightbox="gallery-footer">
               <img src="images/products/b7.jpg" alt="GALLERY">
               </a>
               <a class="item-gallery-sidebar wrap-pic-w" href="images/products/c15.jpg" data-lightbox="gallery-footer">
               <img src="images/products/c15.jpg" alt="GALLERY">
               </a>
               <a class="item-gallery-sidebar wrap-pic-w" href="images/products/e3.jpg" data-lightbox="gallery-footer">
               <img src="images/products/e3.jpg" alt="GALLERY">
               </a>
               <a class="item-gallery-sidebar wrap-pic-w" href="images/products/maggi1.jpg" data-lightbox="gallery-footer">
               <img src="images/products/maggi1.jpg" alt="GALLERY">
               </a>
               <a class="item-gallery-sidebar wrap-pic-w" href="images/products/f10.jpg" data-lightbox="gallery-footer">
               <img src="images/products/f10.jpg" alt="GALLERY">
               </a>
               <a class="item-gallery-sidebar wrap-pic-w" href="images/products/maggi3.jpg" data-lightbox="gallery-footer">
               <img src="images/products/maggi3.jpg" alt="GALLERY">
               </a>
               <a class="item-gallery-sidebar wrap-pic-w" href="images/products/d3.jpg" data-lightbox="gallery-footer">
               <img src="images/products/d3.jpg" alt="GALLERY">
               </a>
               <a class="item-gallery-sidebar wrap-pic-w" href="images/products/c10.jpg" data-lightbox="gallery-footer">
               <img src="images/products/c10.jpg" alt="GALLERY">
               </a>
               <a class="item-gallery-sidebar wrap-pic-w" href="images/products/c14.jpg" data-lightbox="gallery-footer">
               <img src="images/products/c14.jpg" alt="GALLERY">
               </a>
            </div>
         </div>
      </aside>
      <!-- Title Page -->
      <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/contact.jpg);">
         <h2 class="tit6 t-center">
            Contact
         </h2>
      </section>
      <!-- Contact form -->
      <section class="section-contact bg1-pattern p-t-90 p-b-113">
         <!-- Map -->
         <div class="container">
            <div style=" border: solid 2px #d61c2246; border-radius: 10px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.8672766995637!2d55.38833391500905!3d25.173958983906964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f66c56cebffff%3A0xdee837ffd6f7ff11!2sAl%20Hail%20Switchgear%20Ras%20al%20Khor%20Industrial%20Second!5e0!3m2!1sen!2sin!4v1625127427236!5m2!1sen!2sin" width="100%" height="450" style="border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
         </div>
         <div class="container">
            <h3 class="tit7 t-center p-b-62 p-t-105">
               Send us a Message
            </h3>
            <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                  <form class="form-horizontal" role="form" method="post" action="contact.php#comehere">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="name" class=" control-label">Name</label>
                              <div class="bo2 bo-rad-10">
                                 <input type="text" class="form-control bo-rad-10"  id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                              </div>
                              <?php echo "<p class='text-danger'>$errName</p>";?>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="email" class=" control-label">Email</label>
                              <div class="bo2 bo-rad-10">
                                 <input type="email" class="form-control bo-rad-10" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                              </div>
                              <?php echo "<p class='text-danger'>$errEmail</p>";?>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="name" class=" control-label">Phone Number</label>
                              <div class="bo2 bo-rad-10">
                                 <input type="text" class="form-control bo-rad-10" id="phone" name="phone" placeholder="Phone" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
                              </div>
                              <?php echo "<p class='text-danger'>$errNumber</p>";?>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="message" class=" control-label">Message</label>
                        <div class="bo2 bo-rad-10" id="comehere">
                           <textarea class="form-control bo-rad-10" rows="8" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                        </div>
                        <?php echo "<p class='text-danger'>$errMessage</p>";?>
                     </div>
                     <div class="form-group">
                        <div class="wrap-btn-booking flex-c-m m-t-13">
                           <input id="submit" style="padding: 12px 31px;
	 font-size: 12px; 
	 background-color: #111111; color: white; 
	 border-radius: 10px;" name="submit" type="submit" value="SUBMIT" class="btn">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="   col-sm-offset-2">
                           <?php echo $result; ?>	
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="row p-t-135">
               <div class="offset-md-2 col-md-4 m-l-r-auto p-t-30">
                  <div class="dis-flex m-l-23">
                     <div class="p-r-40 p-t-6">
                        <img src="images/icons/map-icon.png" alt="IMG-ICON">
                     </div>
                     <div class="flex-col-l">
                        <span class="txt5 p-b-10">
                        Location
                        </span>
                        <span class="txt23 size38">
                        Ras Al Khor Industrial Second, <br>
                        Dubai
                        </span>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 m-l-r-auto p-t-30">
                  <div class="dis-flex m-l-23">
                     <div class="p-r-40 p-t-6">
                        <img src="images/icons/phone-icon.png" alt="IMG-ICON">
                     </div>
                     <div class="flex-col-l">
                        <span class="txt5 p-b-10">
                        Call Us
                        </span>
                        <span class="txt23 size38">
                        (+971) 522930442
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <footer class="bg1">
         <div class="container p-t-40 p-b-70">
            <div class="row">
               <div class="col-sm-6 col-md-6 p-t-50">
                  <!-- - -->
                  <h4 class="txt13 m-b-33">
                     Reach Us
                  </h4>
                  <ul class="m-b-70">
                     <li class="txt14 m-b-14">
                        <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        Ras Al Khor Industrial Second, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dubai
                     </li>
                     <li class="txt14 m-b-14">
                        <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                        <a href="mailto:admin@sbmtradinguae.com">admin@sbmtradinguae.com</a>
                     </li>
                  </ul>
                  <!-- - -->
                  <h4 class="txt13 m-b-32">
                     Contact Us
                  </h4>
                  <ul class="m-b-70">
                     <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        <a href="tel:+971522930442">(+971) 522930442</a>
                     </li>
                     <li class="txt14 m-b-14">
                        <i class="fa fa-whatsapp fs-13 dis-inline-block size19" style="font-size: 15px !important;" aria-hidden="true"></i>
                        <a href="https://wa.me/971522930442">(+971) 522930442</a>
                     </li>
                  </ul>
               </div>
               <div class="col-sm-6 col-md-6 p-t-50">
                  <!-- - -->
                  <h4 class="txt13 m-b-38">
                     Gallery
                  </h4>
                  <!-- Gallery footer -->
                  <div class="wrap-gallery-footer flex-w">
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/b7.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/b7.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/c15.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/c15.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/e3.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/e3.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/maggi1.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/maggi1.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/f10.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/f10.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/maggi3.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/maggi3.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/d3.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/d3.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/c10.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/c10.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/c14.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/c14.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/b4.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/b4.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/c12.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/c12.jpg" alt="GALLERY">
                     </a>
                     <a class="item-gallery-footer wrap-pic-w" href="images/products/d4.jpg" data-lightbox="gallery-footer">
                     <img src="images/products/d4.jpg" alt="GALLERY">
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="end-footer bg2">
            <div class="container">
               <div class="flex-sb-m flex-w p-t-22 p-b-22">
                  <div class="p-t-5 p-b-5">
                     <a href="https://www.linkedin.com/in/vijay-arvind-26b02b105" class="fs-15 c-white"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                     <a href="https://wa.me/971522930442" class="fs-15 c-white"><i class="fa fa-whatsapp m-l-18" aria-hidden="true"></i></a>
                     <a href="tel:+971522930442" class="fs-15 c-white"><i class="fa fa-phone m-l-18" aria-hidden="true"></i></a>
                  </div>
                  <div class="txt17 p-r-20 p-t-5 p-b-5">
                     S.B.M Food Stuff Trading LLC &copy; 2021 All rights reserved</a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--===============================================================================================-->
      <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
      <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
      <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
      <script type="text/javascript" src="js/slick-custom.js"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
      <script type="text/javascript">
         $('.parallax100').parallax100();
      </script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
      <!--===============================================================================================-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
      <script src="js/map-custom.js"></script>
      <!--===============================================================================================-->
      <script src="js/main.js"></script>
   </body>
</html>