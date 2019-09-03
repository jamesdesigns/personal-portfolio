<!DOCTYPE html>
<html>
<head>
<title>James Hooper Designs- Contact Me</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Oswald:600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.typekit.net/shu4idq.css">
<link href="mystylesversion36.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="siteWrapper">
<header class="contact-header">
  <div>
    <a href="index.html" class="arrow">James Hooper Designs<span></span></a>
    </div>
    <div id="profession"><p>James Hooper Designs</p><br>
      <p class="subHeadLogo">Web Design & Development</p>
    </div>
    <div class="topnav" id="myTopnav">
        <div class="header-right">
          <a href="index.html">Home</a>
          <a href="about.html">About</a>
          <a href="portfolio.html">Portfolio</a>
          <a href="contact.html" class="active">Contact</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
          </div>
        </div>
</header> 

<section>

<?php
// Check for empty fields
if(empty($_POST['fname'])  		||
   empty($_POST['lname']) 		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['comments'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['comments'];
	
// Create the email and send the message
$to = 'jameshooperdesigns@gmail.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $firstName + $lastName";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $fname + ' ' + $lname\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@jameshooperdesigns.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>


</section>






<footer>
    <div class="contactFtr">
  <img class="edgeContact" src="../artistjameshooper/images/black-cut-edge.svg" alt="">
  <p class="hurry">Call Now. I book fast!</p>
  <p class="callNow">(801)718-9727</p>
    </div>

    <div class="bottomFtr">
        <div class="socialIcons">
          <a class="social"  href="https://twitter.com/ArtistJHooper" target="_blank"><img src="../artistjameshooper/images/twitter-icon.png" width="45" height="45" alt="twitter" /></a>
          <a class="social"  href="https://www.linkedin.com/in/james-hooper-64775b163/" target="_blank"><img src="../artistjameshooper/images/linkedin-icon.png" width="45" height="45" alt="Linkedin" /></a>
          <a class="social"  href="https://www.instagram.com/james_hooper_designs/" target="_blank"><img src="../artistjameshooper/images/instagram-icon.png" width="45" height="45" alt="instagram" /></a>
        </div>
       <div class="legal">
          <p class="copyright">&#169; 2019 JamesHooperDesigns. All Rights Reserved. </p>
        </div>
      </div>  
  
  </footer>
  </div> <!-- End of siteWrapper -->
<script>
                    function myFunction() {
                      var x = document.getElementById("myTopnav");
                      if (x.className === "topnav") {
                        x.className += " responsive";
                      } else {
                        x.className = "topnav";
                      }
                    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="script.js"></script>
</body>
</html>