<!DOCTYPE html>
<html lang="en">
	

<head>
		<meta charset="utf-8">
		<title>RIG Earthing Solutions</title>
		<meta name="keywords" content="RIG Earthing Solutions" />
		<meta name="description" content="RIG Earthing Solutions">
		<meta name="author" content="RIG Earthing Solutions">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">







    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="rev-slider/css/settings.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/css/layers.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/css/navigation.css">


		<!-- CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">		
		<link rel="stylesheet" href="css/slick.min.css">
		<link rel="stylesheet" href="css/slick-theme.min.css">
		<link rel="stylesheet" href="css/style.css">		

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/responsive.css" />
       
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="manifest" href="img/favicon/manifest.json">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
		<noscript>
			<style>.loader-bg, .loader { display: none; } </style>
		</noscript>        
	</head>
	
	<body data-spy="scroll" data-target=".navbar" data-offset="50">


        <?php 
		if(isset($_POST['sendmail'])) {
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;

			$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'Dsmart Tutorials');
			$mail->addAddress($_POST['email']);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			// for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
			// 	$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			// }
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];
			$mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
		}
	 ?>
		<div class="loader-container"><div class="loader"></div></div>
		<header id="header">
		
			<div class="menu-spacer"></div>
				<nav id="nav" class="navbar" data-spy="affix" data-offset-top="77">
				  <div id="header-container" class="container navbar-container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MainNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						
					</div>
					<div class="collapse navbar-collapse" id="MainNavbar">
					  <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" data-target=".navbar-collapse.in">Home</a></li>
						<li><a href="#about" data-target=".navbar-collapse.in">About</a></li>
						<li><a href="#services" data-target=".navbar-collapse.in">Services</a></li>
                        <li><a href="#Projects" data-target=".navbar-collapse.in">Projects</a></li>
                        <li><a href="#contact" data-target=".navbar-collapse.in">Contact us</a></li>
					  </ul>
					</div>
				  </div>
				</nav>
            <div id="home" class="container">
				<div class="welcome">
					<h1>Introducing RIG Earthing Solutions</h1>
					<p>Mfr: RIG FABRICATION</p>
					
					<div>
						<a href="#about"><img alt="" class="pulse" src="img/icons/scroll.png"></a>
					</div>
				</div>
			</div>
		</header>

	
        <div class="social_media_div">
            <ul class="icons_list">
                <li>
                    <a href="https://www.facebook.com/rig.earthing.9"><i class="facebook-icon fab fa-facebook-f"></i></a>
                </li>
              
                <li>
                    <a href="https://www.linkedin.com/in/rig-earthing-a25a62101/"><i class="linkedin-icon fab fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCirLDE72nybdqjBslShSUGg"><i class="twitter-icon fab fa-youtube"></i></a>
                </li>
                <li>
                    <a href="https://instagram.com/rig_earthing_solutions?igshid=72pnq4aq96l9"><i class="instagram-icon fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=918122322395"><i class="whatsapp-icon fab fa-whatsapp"></i></a>
                </li>
            </ul>
        </div>



    <div class="main-home1">
      <section class="flat-welcome clearfix">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="image-welcome">
                          <div class="image-wrap">
                               <img src="image/home/home2.png" alt="image">
                          </div>
                          <div class="image-inner">
                              <img src="image/home/home3.png" alt="image">
                          </div>
                      </div>
                  </div>
                  <section id="about">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="spacer" data-desktop_height="0" data-mobile_height="50" data-smobile_height="50"></div>
                      <div class="info-welcome">
                         <h4>WELCOME TO RIG Earthing Solutions</h4>
                         <h1>We are leader in industrial market since 2005</h1>
                         <p>We are the leading manufacturer of chemical earthing electrodes, GI earthing electrodes, copper earthing electrode in tamil nadu. Our chemical earthing products are much safer and maintenance free than other conventional earthing system which are well-designed for any electrical installation to avoid dangers related with lightining & fault currents
                            </p>
                         <div class="info-inner">
                             <ul class="infomation">
                                  <li><i class="fa fa-check" aria-hidden="true"></i><a href="#" title="">The perfect Choice for Earthing</a></li>
                                  <li><i class="fa fa-check" aria-hidden="true"></i><a href="#" title="">We provide you the highest quality works</a></li>
                                  <li><i class="fa fa-check" aria-hidden="true"></i><a href="#" title="">Ensuring safety and longetivity</a></li>
                                  <li><i class="fa fa-check" aria-hidden="true"></i><a href="#" title="">Safe from electrical shock and lightning</a></li>
                              </ul>
                         </div>
                      </div>
                  </div>
              </div>
          </div>        
      </section>
      <section id="services" class="flat-our-services style1">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="title-section style1">
                          <h4>OUR SERVICES</h4>
                         <h1>Industries Served</h1>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                  <article class="post post-wrap">
                      <div class="featured-post">
                          <div class="post-img">                            
                              <img src="image/services/service11.jpg" alt="image"> 
                              <div class="overlay"></div>
                          </div>
                          <div class="icon-wrap">
                              <i class="icon-factory-2"></i>
                          </div>                        
                      </div>
                      <div class="content-post">
                          <h3><a href="index.html">GI Chemical Electrode</a></h3>
                          <p>The GI chemical electrode will be supplied with suitable earth enhancing compound. It will be of non-corrosive.</p>
                          <h4 class="box-line"><a href="gi/bond-copper-electrodes/indexq.html">READ MORE</a><span class="line"></span></h4>
                      </div>
                  </article>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                  <article class="post post-wrap">
                      <div class="featured-post">
                          <div class="post-img">                            
                              <img src="image/services/service22.jpg" alt="image"> 
                              <div class="overlay"></div>
                          </div>
                          <div class="icon-wrap">
                              <i class="icon-industry"></i>
                          </div>
                      </div>
                      <div class="content-post">
                          <h3><a href="index.html">Copper Earthing Electrode</a></h3>
                          <p>RIG Earthing Solutions is engaged in providing excellent quality range of pure copper Earthing Electrode.</p>
                          <h4 class="box-line"><a href="cop/bond-copper-electrodes/indexw.html">READ MORE</a><span class="line"></span></h4>
                      </div>
                  </article>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                  <article class="post post-wrap">
                      <div class="featured-post">
                          <div class="post-img">                            
                              <img src="image/services/service33.jpg" alt="image"> 
                              <div class="overlay"></div>
                          </div>
                          <div class="icon-wrap">
                              <i class="icon-factory"></i>
                          </div>
                      </div>
                      <div class="content-post">
                          <h3><a href="index.html">Lighting Arrested</a></h3>
                          <p>Lightning conductor is a metal rod or conductor mounted on top of a building and electrical connected to the goundy.</p>
                          <h4 class="box-line"><a href="lit/bond-copper-electrodes/indexe.html">READ MORE</a><span class="line"></span></h4>
                      </div>
                  </article>
              </div>
              </div>
          </div>
      </section>
      <section class="flat-section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      
                  </div>
                  <div class="col-lg-6">
                      <div class="section-text">
                          <span>Our RIG Earthing Solutions trusted by more than 15000 clients</span>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="flat-sections clearfix">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="wrap-sections">
                          <div class="icon-sections">
                               <i class="icon-factory-4"></i>
                          </div>
                          <span>We are servicing more than 1000 clients in South India</span>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="section-image">
                          <div class="divider height300px"></div>
                           <div class="image-box">
                              <img src="image/home/home9.jpg" alt="image">
                              <div class="meta-avatar">
                             <p>   <i class="icon-tele-4"></i>8122322395</p>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
      </section>
      <section class="flat-number-speak">
          <div class="spacer" data-desktop_height="115" data-mobile_height="100" data-smobile_height="100"></div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="title-section style1">
                          <div class="image-title">
                          </div>
                              <h4>NUMBERS SPEAKS</h4>
                             <h1>We are commited to provide safe solutions </h1>
                      </div>
                       <div class="flat-counter count-time" data-day="20" data-month="3" data-year="2019" data-hour="12" data-minute="12" data-second="12">
                          <div class="counter" >
                               <ul>
                                   <li class="content-counter projects" >
                                      <div class="wrap-bg numb">
                                          <div class="inner-bg seconds">
                                               <div class="numb-count numb" data-from="0" data-to="84" data-speed="2000" data-inviewport="yes">84+</div>
                                               <div class="name-count" style="font-size: 0.9em;" >Projects Completed</div>
                                          </div>
                                      </div>
                                   </li>
                                   <li class="content-counter professional">
                                      <div class="wrap-bg numb">
                                          <div class="inner-bg seconds">
                                               <div class="numb-count numb" data-from="0" data-to="22" data-speed="2000" data-inviewport="yes">22+</div>
                                               <div class="name-count"  style="font-size: 0.9em;">Professional Contractors</div>
                                          </div>
                                      </div>
                                   </li>
                                   <li class="content-counter industries">
                                      <div class="wrap-bg numb">
                                          <div class="inner-bg seconds">
                                               <div class="numb-count numb" data-from="0" data-to="17" data-speed="2000" data-inviewport="yes">17+</div>
                                               <div class="name-count"  style="font-size: 0.9em;">Industries Served</div>
                                          </div>
                                      </div>
                                   </li>
                                   <li class="content-counter happy">
                                      <div class="wrap-bg numb">
                                          <div class="inner-bg seconds">
                                               <div class="numb-count numb" data-from="0" data-to="88" data-speed="2000" data-inviewport="yes">88+</div>
                                               <div class="name-count"  style="font-size: 0.9em;">Happy Customers</div>
                                          </div>
                                          
                                      </div>
                                   </li>
                               </ul>

                          </div> <!-- /counter -->
                      </div> <!-- /flat-counter -->
                  </div>
              </div>
          </div>
          <div class="spacer" data-desktop_height="107" data-mobile_height="100" data-smobile_height="100"></div>
      </section>
  
      <section id="Projects" class="flat-recent-project">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="title-section style1">
                          <div class="image-title">
                          </div>
                          <h4>OUR PROJECTS</h4>
                         <h1>Explore Recent Work</h1>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="spacer" data-desktop_height="47" data-mobile_height="50" data-smobile_height="50"></div>
                    <div class="imagebox-item">
                        <div class="imagebox style1">
                            <div class="imagebox-image">
                                <img src="image/project/project3.jpg" alt="image">
                            </div><!-- /.imagebox-image -->
                            
                            <div class="imagebox-title">
                                <h2><a href="#" title="">Galvanized Iron</a></h2>
                            </div><!-- /.iamgebox-title -->
                            <div class="imagebox-content">
                                <div class="imagebox-heading">
                                    <h3><a href="index.html">Galvanized Iron</a></h3>
                                </div>
                                <div class="imagebox-desc">
                                    <p>Here we use galvanized iron (GI) chemical Earthing Electrode and we ensuring safety & longetivityHere we use galvanized iron (GI) chemical Earthing Electrode and we ensuring safety & longetivity</p>
                                </div>
                            </div><!-- /.imagebox-content -->
                        </div><!-- /.imagebox -->
                    </div>
                </div>
               
                  
                  <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="spacer" data-desktop_height="47" data-mobile_height="50" data-smobile_height="50"></div>
                      <div class="imagebox-item ">
                          <div class="imagebox style1">
                              <div class="imagebox-image">
                                  <img src="image/project/project2.jpg" alt="image">
                              </div><!-- /.imagebox-image -->
                              
                              <div class="imagebox-title">
                                  <h2><a href="#" title="">Moisture Booster</a></h2>
                              </div><!-- /.iamgebox-title -->
                              <div class="imagebox-content">
                                  <div class="imagebox-heading">
                                      <h3><a href="index.html">Moisture Booster</a></h3>
                                  </div>
                                  <div class="imagebox-desc">
                                      <p>Installation process of chemical Earthing Electrode with moisture booster bag, it provides high conductivity then prevent the short circuit & lightning</p>
                                  </div>
                              </div><!-- /.imagebox-content -->
                          </div><!-- /.imagebox -->
                      </div>                    
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="spacer" data-desktop_height="47" data-mobile_height="50" data-smobile_height="50"></div>
                    <div class="imagebox-item">
                        <div class="imagebox style1">
                            <div class="imagebox-image">
                                <img src="image/project/project1.jpg" alt="image">
                            </div><!-- /.imagebox-image -->
                            
                            <div class="imagebox-title">
                                <h2><a href="#" title="">Chemical Earthing Electrode</a></h2>
                            </div><!-- /.iamgebox-title -->
                            <div class="imagebox-content">
                                <div class="imagebox-heading">
                                    <h3><a href="index.html">Chemical Earthing Electrode</a></h3>
                                </div>
                                <div class="imagebox-desc">
                                    <p>Here we are testing the chemical Earthing Electrode, the electrode contact maximum area of earth, then the distance between the equipment and earth pit is maximum.</p>
                                </div>
                            </div><!-- /.imagebox-content -->
                        </div><!-- /.imagebox -->
                    </div>                    
                </div>                  
              </div>
          </div>
      </section>
    
      <div class="spacer" data-desktop_height="50" data-mobile_height="0" data-smobile_height="0"></div>
      <section class="flat-why-choose bg_f2f3f5 clearfix">
             <div class="text-why-choose">
                  <div class="title-section style2">
                      <div class="image-title">
                      </div>
                      <h4>WHY CHOOSE US</h4>
                     <h1>We’re the most trusted industrial company</h1>
                  </div>
                 <div class="info-inner">
                     <ul class="infomation">
                          <li class="clearfix">
                              <span>01</span>
                              <p>We provide best security from lightning and fault current and hence save you from problems.</p>
                          </li>
                          <li class="clearfix">
                              <span>02</span>
                              <p>Our earth pipe prevent the Lightning  and arrested by RIG earthing electrode which have high conductivity.</p>
                          </li>
                          <li class="clearfix">
                              <span>03</span>
                              <p>We protect the equipment from the short circuit etc., and its maintrnance free earthing.</p>
                          </li>
                      </ul>
                 </div>               
                  <a class="themesflat-btn hvr-shutter-out-verticallll" href="#about">Learn More</a>                 
              </div>
              <div class="image-why-choose">
                  <div class="image-heading">
                      <img src="image/home/home131.jpg" alt="image">
                  </div>
                  <div class="image-box clearfix">
                      <div class="image-wrap">
                          <img src="image/home/home77.jpg" alt="image">
                          <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/4ZtteRnslYg?autoplay=1" ><i class="fa fa-play" aria-hidden="true" style="font-size: 1em;"></i></a>
                      </div>
                      <div class="text-info">
                          <span>How do we work with our clients and<br>service providers</span>
                      </div>
                      <div class="info">
                          <p>INDUSTRIALS</p>
                      </div>
                  </div>
              </div>
      </section>
      <div id=contact class="main-contact">
      <section class="flat-contact bg-one-third">
        <div class="container">
            <div class="row">
                 <div class="col-lg-8 col-md-8 col-sm-12">
                     <div class="spacer" data-desktop_height="81" data-mobile_height="100" data-smobile_height="100" style="height: 81px;"></div>
                    <div class="title-section style2">
                    
                         <h4>CONTACT WITH US</h4>
                        <h1>Write us a message</h1>
                     </div>
                     <div class="spacer" data-desktop_height="47" data-mobile_height="40" data-smobile_height="40" style="height: 47px;"></div>
                     <div class="form-submit">
                         <form class="comment-form" role="form" method="post" enctype="multipart/form-data">
                             <p class="comment-form-author">
                                 <!-- <label>Name *</label> -->
                                 <input name="author" type="text" placeholder="Your Name" required="required">
                             </p>
                             <p class="comment-form-email">
                                 <!-- <label>Email *</label> -->
                                 <input name="email" type="email" placeholder="Email Address" required="required">
                             </p>
                             <p class="comment-form-author">
                                 <!-- <label>Name *</label> -->
                                 <input name="author" type="text" placeholder="Phone Number" required="required">
                             </p>
                             <p class="comment-form-email">
                                 <!-- <label>Email *</label> -->
                                 <input name="email" type="email" placeholder="Subject" required="required">
                             </p>
                             <div class="clearfix"></div>
                             <p class="comment-form-comment">
                                 <!-- <label>Comment</label>  -->
                                 <textarea name="comment" placeholder="Write Message" required="required"></textarea>
                             </p>
                             <p class="submit-form">
                                 <button name="sendmail"  type="submit" class="submit hvr-shutter-out-verticall">Send Message</button>
                             </p>
                         </form>
                     </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="sidebar-info">
                         <div class="content-box" data-desktop_padding="117px 0px 111px 71px" data-mobile_padding="70px 0px 70px 0px" data-smobile_padding="70px 0px 70px 0px" style="padding: 117px 0px 111px 71px;">
                             <div class="widget_text widget widget_custom_html">
                                 <div class="textwidget custom-html-widget">
                                     <div class="flat-widget_text">
                                         <ul>
                                             <li><i class="icon-destination"></i>
                                                 <div class="info-content">
                                                     <h5 class="title">Address</h5>
                                                     <a href="https://www.google.co.in/maps/place/RIG+EARTHING+SOLUTIONS/@11.1214834,76.9643017,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8f78ef20e2e2f:0x58cae029827d537d!8m2!3d11.1214781!4d76.9664904">
                                                     	<br> </br>
                                                     	Maharaja Nagar,
                                                        Idigarai Road,
                                                        Thekkupalayam Post,<br>
                                                        Coimbatore - 641020</a>
                                                 </div>
                                             </li>
                                             <li><i class="icon-message"></i>
                                                 <div class="info-content">
                                                     <h5 class="title">Email</h5>
                                                     <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=rigearthing05@gmail.com" target="_blank">rigearthing05@gmail.com</a>
                                                         <br>
                                                   
                                                 </div>
                                             </li>
                                             <li><i class=" icon-phone-call-2"></i>
                                                 <div class="info-content">
                                                     <h5 class="title">Phone</h5> <br>
                                                     <br>
                                                     <p><a href="tel:8122322395">+91 8122322395</a> 
                                                         <br>
                                                         <a href="tel:8072400392"> +91 8072400392</a>
                                                         <br>
                                                         <a href="tel:8072103756">  +91 8072103756</a>
                                                        
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                
 
                             <div class="widget widget_themesflat_socials">
                                 <ul class="themesflat-shortcode-socials">
                                     <li class="facebook">
                                         <a href="https://www.facebook.com/rig.earthing.9" target="_blank" rel="alternate" title="facebook">
                                             <i class="fab fa-facebook-f"></i>
                                         </a>
                                     </li>
                                     <li class="facebook">
                                         <a href="https://www.youtube.com/channel/UCirLDE72nybdqjBslShSUGg" target="_blank" rel="alternate" title="youtube">
                                             <i class="fab fa-youtube"></i>
                                         </a>
                                     </li>
                                     <li class="instagram">
                                         <a href="https://instagram.com/rig_earthing_solutions?igshid=72pnq4aq96l9" target="_blank" rel="alternate" title="instagram">
                                             <i class="fab fa-instagram"></i>
                                         </a>
                                     </li>
                                     <li class="google-plus">
                                         <a href="https://api.whatsapp.com/send?phone=918122322395" target="_blank" rel="alternate" title="whatsapp">
                                             <i class="fab fa-whatsapp"></i>
                                         </a>
                                     </li>                                
                                 </ul>
                                 <!-- /.social -->
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
</div>
      <section class="flat-row style2">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="wrap-row">
                          <p>DON'T HESTITATE TO CONTACT US</p>
                          <span>For better future and business, Let’s get started now</span>                        
                          <a class="themesflat-btn hvr-shutter-out-verticallll" href="#contact">Discover More</a>                         
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
	<footer class="style1">
    <div class="container">
        <div class="row">
            <div class="footer">
                <div class="col-lg-12">
                    <div class="widget widget-about widget-menu">
                        <h2>About</h2>
                        <ul>
                            <li><a href="#home" >Home</a></li>
                            <li><a href="#about" >About</a></li>
                            <li><a href="#services" >Services</a></li>
                            <li><a href="#Projects" >Projects</a></li>
                            <li><a href="#contact" >Contact us</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-explore widget-menu">
                        <h2>Our Products</h2>
                        <ul>
                            <li><a href="gi/bond-copper-electrodes/index.html">GI Chemical Electrode</a></li>
                            <li><a href="cop/bond-copper-electrodes/index.html">Copper Earthing Electrode</a></li>
                            <li><a href="lit/bond-copper-electrodes/index.html">Lightning Arrester</a></li>
                            
                        </ul>
                    </div>
                
                    <div class="widget widget-blog widget-menu">
                        <h2>Blog</h2>
                        <ul>
                            <li><a href="http://rig-earthing-solutions.blogspot.com/2020/10/what-is-earthing-short-answer.html">What is Earthing?</a></li>
                            <li><a href="http://rig-earthing-solutions.blogspot.com/2020/10/electrical-safety-earthing.html">Electrical Safety Earthing</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-contact widget-menu">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="https://www.google.co.in/maps/place/RIG+EARTHING+SOLUTIONS/@11.1214834,76.9643017,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8f78ef20e2e2f:0x58cae029827d537d!8m2!3d11.1214781!4d76.9664904">Maharaja Nagar,
                                Idigarai Road,
                                Thekkupalayam Post,<br>
                                Coimbatore - 641020</a></li>
                               
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=rigearthing05@gmail.com" target="_blank">rigearthing05@gmail.com</a></li>
                            <li> <a href="tel:8122322395">+91 8122322395 , </a> <a href="tel:8072400392">   +91 8072400392</a> <a href="tel:8072103756"> , +91 8072103756</a></li>
                        </ul>
                        <div class="widget-social">
                            <ul>
                                 <li><a href="https://www.facebook.com/rig.earthing.9"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="https://instagram.com/rig_earthing_solutions?igshid=72pnq4aq96l9"><i class="fab fa-instagram"></i></a></li>
                                 <li><a href="https://www.youtube.com/channel/UCirLDE72nybdqjBslShSUGg"><i class="fab fa-youtube"></i></a></li>
                                 <li><a href="https://api.whatsapp.com/send?phone=918122322395"><i class="fab fa-whatsapp"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="col-lg-12">
                  
                </div>
            </div>
        </div>
    </div>
</footer>
       
      
		


        
        <!-- scroll to top of the page-->
		<a id="scrollup" class="scrollup" href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
        
        <!-- Javascript -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/validator.min.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3XgCNAa2O_WR6HfnJahVSKKNUZVqvkPg&amp;callback=initMap"></script>		
		<script src="js/nexo-script.js"></script> 

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108812818-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-108812818-1');
        </script>
        
    

	</body>
</html>