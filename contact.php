<!doctype html>

<html lang="en">
<head>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<title>My Portfolio</title>
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css">
	<script src="../JQuery/JS/JQuery.js"></script>
	<script src="java.js"></script>
	
</head>



<body>

<div class="container clearfix">
 
<div class="topnav" id="myTopnav">
                <a href="index.html" class="active">Home</a>
                <a href="aboutme.html">About me</a>
                <a href="Project.html">Projects</a>
                <a href="Education.html">Education</a>
                <a href="Experience.html">Experience</a>
                <a href="contact.php">Contact</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i></a>
	<div class="logo">
	<img src="imag/logo.png" alt="logo">
	</div>
	
</div>
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
	

<section class="contact-section">
<h1>Swing by for a cup of coffee, or leave us a message,,</h1><br>
  
    <div class="column">
      <?
	
if($_GET['status'] == 'success'){
	echo "From submitted!";
}

else if($_GET['status'] == 'fail'){
	echo "From did not submit. Please try again!";
}
else if($_GET['status'] == 'validationfail'){
	echo "From failed validation. Please try again!";
}
	
?>
<form method="post" action="contactcode.php">
   
	<p><label for="EmailFrom">Your Email:*</label><br />
	<input id="EmailFrom" size="40" name="EmailFrom" type="text" />
	</p>
	
	
	<p><label for="Name">Your Name:</label><br />
	<input id="Name" size="40" name="Nmae" type="text" />
	</p>
	
	<p><label for="Telephone">Telephone:</label><br />
	<input id="Telephone" size="40" name="Telephone" type="text" />
	</p>
	
	<p><label for="Comment">Add Comment:</label><br />
	<textarea id="Comment" rows="5"  cols="50" name="Comment"></textarea> 
	</p><br />
	<p>
	<input type="submit"  name="submit" value="submit" />
	</p>
	
</form>

    </div>
	

    <div class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19067.959600130675!2d-6.421858332541141!3d53.31649073994354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c4651ff03d7%3A0x753bea8f5588386b!2sCorkagh%20Park!5e0!3m2!1sen!2sie!4v1642778419289!5m2!1sen!2sie" width="325" height="365" style="border:0;"  loading="lazy"></iframe>
    </div>
</section>
	
<footer class="footer"> 
	
	<a href="https://www.linkedin.com/in/dhiaa-abou-moghdeb-12b809191/" target="_blank"><img src="icon/ICONS/linkedin-64.png" alt="face"></a>
	<a href="https://studio.youtube.com/channel/UCUomNL0Y7huzJiOC1r4n5LA/videos/upload?filter=%5B%5D&sort=%7B%22columnType%22%3A%22date%22%2C%22sortOrder%22%3A%22DESCENDING%22%7D"><img src="youtube-5-64.png" alt="yout"></a>
	<a href="https://www.facebook.com/dhiaa.abm" target="_blank"><img src="icon/ICONS/facebook-xl.png" alt="fac"></a><br>
&#169;Copyright 2022 - by Dhiaa Abou Moghdeb 
</footer>
</div>
</body>
</html>
