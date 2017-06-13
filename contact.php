<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	
	$to = 'admin@thefuneralplanningcompany.co.uk';
	
	$subject = 'Contact Form';
	
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	
	
	$message .= '<p><strong>'.strip_tags($_POST['first_name']).' '.strip_tags($_POST['last_name']).' made an enquiry the contact number is '.strip_tags($_POST['phone']).'</strong></p>';
	$message .= '<p><strong>'.strip_tags($_POST['comment']).'</strong></p>';
	
	
	mail($to, $subject, $message, $headers);
	$_POST["email"]="";
	$_POST["first_name"]="";
	$_POST["last_name"]="";
	$_POST["phone"]="";
	$_POST["comment"]="";	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The funeral Planning Company - The best prepaid funeral plans</title>
    <meta name="description" content="The Funeral Planning Company works with you. To help the occasion fit you; the person. Ensuring your funeral celebrates the memorable times you�ve had in life.">
    <meta name="author" content="The Funeral Planning Company">
    <link rel="icon" href="favicon.ico" />
    
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes" />
    <link rel="shortcut icon" href="img/touch/icon-128x128.png" />

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit" />
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/touch/ms-touch-icon-144x144-precomposed.png" />
    <meta name="msapplication-TileColor" content="#3372DF" />

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
   
    <!-- Custom styles for this template -->
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css?v=1" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "InsuranceAgency",
        "name": "The Funeral Planning Company",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "15 Kingston Mill, Chestegate",
          "addressLocality": "Stockport",
          "addressRegion": "",
          "postalCode": "SK3 0AL"
        },
        "image": "https://thefuneralplanningcompany.co.uk/img/logo.png",
        "email": "info@thefuneralplanningcompany.co.uk",
        "telePhone": "0800 0987 931",
        "url": "https://thefuneralplanningcompany.co.uk",
        "paymentAccepted": [ "credit card", "invoice" ],
        "openingHours": "Mo,Tu,We,Th,Fr 10:00-20:00",
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "53.4085737",
          "longitude": "-2.1688254"
        },
        "priceRange":"$$$"

      },
      {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "url": "https://thefuneralplanningcompany.co.uk/index.html",
        "name": "The funeral Planning Company - The best prepaid funeral plans",
        "description": "The Funeral Planning Company works with you. To help the occasion fit you; the person. Ensuring your funeral celebrates the memorable times you�ve had in life.",
        "keywords": "senior citizen,funeral planning,funeral plans,insurance company,insurance broker,death preparation,last will and testament, will writers, funeral planners",
        "Audience": {
          "@context": "https://schema.org",
          "type": "audience",
          "audienceType": "senior citizen,funeral planning,funeral plans,insurance company,insurance broker"
        },
        "publisher": "The Funeral Planning Company",
        "author": {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "The Funeral Planning Company",
          "legalName": "Mark White Enterprises",
          "alternateName": "TFPC",
          "url": "https://thefuneralplanningcompany.co.uk",
          "logo": "https://thefuneralplanningcompany.co.uk/img/logo.png",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "15 Kingston Mill",
            "addressLocality": "Stockport",
            "addressRegion": "Greater Manchester",
            "postalCode": "SK3 0AL",
            "addressCountry": "United Kingdom"
          },
          "foundingDate": "2014",
          "founder": {
            "@type": "Person",
            "name": "Mark White"
          },
          "foundingLocation": "address",
          "sameAs": [
            "https://www.facebook.com/TheFuneralPlanningCompany/",
            "https://www.linkedin.com/company-beta/11152211/",
            "https://twitter.com/thefuneralplans",
            "https://www.google.com/maps/place/The+Funeral+Planning+Company/@53.408543,-2.1709627,17z/data=!3m1!4b1!4m5!3m4!1s0x487bb370ca6f3863:0xc88a80d07b2baad4!8m2!3d53.408543!4d-2.168774?hl=en-GB"
          ],
          "contactPoint": [
            {
              "@type": "ContactPoint",
              "telephone": "+44-0800-0987-931",
              "contactType": "customer service",
              "areaServed": "GB",
              "availableLanguage": "English"
            }
          ]
        },
        "creator": [
              {
                  "@context": "https://schema.org",
                  "@type": "Organization",
                  "name": "Showcase Imagery",
                  "alternateName": "SI",
                  "url": "https://showcaseimagery.com",
                  "logo": "https://showcaseimagery.com/images/si-yellow-square.gif"
          }
        ] 
        }
</script>

  </head>

  <body id="contact-us">
    <div id="wrapper" class="home">
    <!-- Header section -->
    <header>
          <nav class="navbar navbar-default navbar-fixed-top navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Brand logo</a>
              </div>
              <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav text-center">
                  <li class="except-this"><a href="index.html">Home</a></li>
                  <li><a href="#about">What is a Funeral Plan</a></li>
                  <li><a href="#about">Funeral Plans</a></li>
                  <li class="dropdown">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="#">Company</a></li>
                          <li><a href="#">Our Team</a></li>
                          <li><a href="#">Careers</a></li>
                          <li>
                            <ul class="list-inline nav-social-links">
                              <li><a href="https://goo.gl/i1m0sj"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                              <li><a href="https://goo.gl/wIHnCB"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>

                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

                              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                              <li><a href="https://goo.gl/aCigPh"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="active"><a href="#">Contact</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </nav>

    </header>
    <!-- END Header section -->

    <section>
      <img class="page-header-img img-responsive" src="img/slides/time-to-contact-the-funeral-planning-company.jpg" alt="time to contact the funeral planning company">
    </section>

    <section class="jumbobox">
      <!-- attention grabber -->
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h1>Can you say you have take pride in your funeral plan?</h1>
              <p class="lead-big">Plan and pay for your funeral in advance with our prepaid funeral plans.</p>
            </div>
          </div>
        </div>
        <!-- END attention grabber -->
    </section>

    <section class="margin-bottom">
        <!-- main interest areas -->
        <div class="container interest-boxes">
          <div class="row">
            <div class="col-xs-12 col-md-5">
              <h2>Send us a message <i class="fa fa-commenting-o fa-lg pull-right"></i></h2>
              <p>Having a send off that suits you is everyone's last wish. Make the choices today! So your family don�t have to worry through their time of grieving.</p>
              <div class="col-xs-12">
                <form role="form" class="form-horizontal" id="contact_form" method="post" name="contact_form">
                  <fieldset>
                    <div class="row">
                      <div class="col-xs-5">
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="control-label">First Name</label>
                          <div class="inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span> <input class="form-control" name="first_name" placeholder="First Name" type="text" value="<?php echo $_POST["first_name"] ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-5 pull-right">
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="control-label">Last Name</label>
                          <div class="inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span> <input class="form-control" name="last_name" placeholder="Last Name" type="text" value="<?php echo $_POST["last_name"] ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="inputemail">E-Mail</label>
                      <div class="inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-at"></i></span> <input aria-describedby="inputemailStatus" class="form-control" id="inputemail" name="email" placeholder="j.smith@hotmail.com" type="text" value="<?php echo $_POST["email"]?>">
                        </div>
                      </div><span aria-hidden="true" class="fa fa-ok form-control-feedback"></span> <span class="sr-only" id="inputemailStatus">(success)</span>
                    </div><!-- Text input-->
                    <div class="form-group">
                      <label class="control-label">Phone No.</label>
                      <div class="inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span> <input class="form-control" name="phone" placeholder="0161 282 1930" type="text" value="<?php echo $_POST["phone"]?>">
                        </div>
                      </div>
                    </div><!-- Text area -->
                    <div class="form-group">
                      <label class="control-label">Message</label>
                      <div class="inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-terminal"></i></span> 
                          <textarea class="form-control" name="comment" placeholder="Write your message here" rows="6" value="<?php echo $_POST["comment"]?>"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-5">
                        <!-- Checkbox -->
                        <div class="form-group">
                          <div class="has-succes">
                            <div class="checkbox">
                              <label><input data-error="Sign up to our mailing list?" id="checkboxSuccess" type="checkbox" value="mailing-list"> I'd like to stay informed! <span>Add me to your mailing-list</span></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-7 pull-right">
                        <!-- Button -->
                        <div class="form-group">
                          <button class="btn btn-block btn-green text-light text-hover-light" type="submit">Send your message <span class="fa fa-send"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="alert alert-green" id="success_message" role="alert">
                        Success <i class="fa fa-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 col-md-offset-1 google-map">
              <h2>We are here <i class="fa fa-map-signs fa-lg pull-right"></i></h2>
              <p>Having a send off that suits you is everyone's last wish. Make the choices today! So your family don�t have to worry through their time of grieving.</p>
              <div class="map">
                <iframe allowfullscreen height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152213.1108149693!2d-2.1689027469937985!3d53.4089267091372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb370ca6f3863%3A0xc88a80d07b2baad4!2sThe+Funeral+Planning+Company!5e0!3m2!1sen!2suk!4v1496942608584"></iframe>
              </div>
            </div>
          </div>
        </div><!-- END main site areas -->
      </section>

    <section class="container-fluid">
        <div class="row">
          <h2 class="pop-statement bkcolor-complement-0 ">Looking forward to hearing from you soon<i class="fa fa-comments-o fa-lg"></i></h2>
        </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!--- Footer details -->
            <div class="row">

              <div class="footer-widget col-xs-12 col-md-3">
                <div itemscope itemtype="http://schema.org/Organization">
                  <h5 itemprop="name">The Funeral Planning Company</h5>
                  <h6>The Independent Agent</h6>
                  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                      <span itemprop="streetAddress">15 Kingston Mill</span><br>
                      <span itemprop="addressLocality">Stockport</span><br>
                      <span itemprop="addressRegion">Greater Manchester</span> 
                      <span itemprop="postalCode">SK3 0AL</span>
                  </div>
                  <div class="contact-methods">
                    <i class="fa fa-phone text-dark" aria-hidden="true"></i> <span itemprop="telephone"><a class="tel-no" href="tel:+448000987931">0800 0987 931</a></span>
                  
                    <i class="fa fa-envelope text-dark" aria-hidden="true"></i> <span itemprop="email"><a class="email" href="mailto:info@thefuneralplanningcompany.co.uk">email us</a></span>
                  </div>
                </div>
              </div>

              <div class="footer-widget col-xs-12 col-md-3">
                <h5>Top Products</h5>
                <ul class="footer-products">
                  <li><a href="#">Pride Simplicity</a></li>
                  <li><a href="#">Pride Essential</a></li>
                  <li><a href="#">Pride Plus</a></li>
                  <li><a href="#">More Funeral Plans</a></li>
                  <li><a href="#">Wealth Management </a></li>
                </ul>
              </div>

              <div class="footer-widget col-xs-12 col-md-3">
                <h5>Helpful Links</h5>
                <ul class="footer-products">
                  <li><a href="#">Get a FREE quote</a></li>
                  <li><a href="#">Book a Call Back</a></li>
                  <li><a href="#">Wealth Management Tips</a></li>
                  <li><a href="#">Our Funeral Plans</a></li>
                  <li><a href="#">Careers with us</a></li>
                </ul>
              </div>

              <div class="footer-widget col-xs-12 col-md-3">
                <h5>Stay Informed</h5>
                <form action="http://showcaseimagery.us5.list-manage.com/subscribe/post?u=39d994d3c065f260150e35a71&amp;id=3f7cc56b82" method="post" id="pulse" class="validate form-inline" target="_blank" novalidate="">
                  <div class="subscribe">
                      <input type="email" name="EMAIL" placeholder="Enter your email">
                      <button> Subscribe </button>
                  </div>
                <input type="hidden" name="authenticity_token" value="xTp3o1OKH5tMRlV93m8A7Xiyu0NoQAeI9P3NV7ot8n4="></form>
                <br>
                <h5>Get Connected</h5>
                <ul class="list-inline social-links">
                  <li><a href="https://goo.gl/i1m0sj"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                  <li><a href="https://goo.gl/wIHnCB"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                  <li><a href="https://goo.gl/aCigPh"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
              </div>

            </div>
            <!--- END Footer details -->

            <!--- Sub-footer details -->
            <div class="row sub-footer">

              <div class="col-xs-12 col-md-8">
                <ul class="list-inline">
                  <li><a href="legal/privacy.html" class="sub-footer-text">Privacy</a></li>
                  <li><a href="legal/legal.html" class="sub-footer-text">Legal</a></li>
                  <li class="company-reg">Registered in England and Wales, Company Registration No. 09341100 </li>
                  <li class="company-reg">Data Protection No. ZA104435</li>
                </ul>
              </div>

              <div class="col-xs-12 col-md-4 pull-right copyright">
                <strong>&copy;</strong>opyright <span class="year"></span> 
                 The Funeral Planning Company
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


    </div>
    <a href="#" class="scrollBtn bkcolor-secondary-1-3"><i class="fa fa-angle-up fa-2x active" aria-hidden="true"></i></a>

    <!-- modal boxes -->
    <!-- Modal -->
    <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Message Received</h4>
          </div>
          <div class="modal-body">
            Thank you for sending us a message. We have now received it and are directing it to the correct department.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-purple" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/flexslider/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/owl-carousel/owl.carousel.js" type="text/javascript"></script>
    <script src="js/contact-val.js?v=1" type="text/javascript"></script>
    <script src="js/main.js?v=1" type="text/javascript"></script>
  	<?php
			if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
			{		
				echo "<script type='text/javascript'>
			$(document).ready(function(){
			$('#success').modal('show');
			});
			</script>";
						}
		?>
	</body>
</html>