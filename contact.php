<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Web Developer Examples and Resources</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
    <!-- jQuery -->
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     
     <!-- MenuMaker Plugin -->
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     
     <!-- Icon Library -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
     <script src="js/script.js"></script>
 </head>
 <body>
     <main>
         <header>
           <h1><a href="index.html">Web Developer Examples and Resouces</a></h1>
    <nav id="cssmenu">
  <ul>
     <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> IT 161</a></li>
     <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG</a></li>
      <li><a href="#"><i class="fa fa-pencil-square-o"></i> Research Topics</a>
          <ul>
        <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
        <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
              <li><a href="webforms.html"><i class="fa fa-check"></i> Web Forms</a></li>
          </ul>
     <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Gallery</a></li>
     <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google</a>
        <ul>
           <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
     </li>
     <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Veronica</a></li>
  </ul>
</nav>
     </header>
         
<section class="fullwidth">
<h2 class="subheader">Contact Veronica</h2>
 <section>

<!-- START HTML FORM -->
	<form action="contact.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="40" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="40" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Please leave your feedback!" tabindex="30"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX"></div> 
	<div>
		<input type="submit" id="button" value="Submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<p class="clear-recaptcha"></p>
        </section>
</section>

     <footer>
      <p><small>&copy;2021 by <a href="contact.php">Contact Veronica Gable</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
 </body>
</html>