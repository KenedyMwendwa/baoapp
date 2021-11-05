<!DOCTYPE html>
<html>
<head>
  <title>slider</title>
 <!-- style -->
<style>
img{border-radius: 0%;}
.sliderwrapper{ background:green; width:90%; border: 0px solid #a1a1a1; margin: auto;}
.slidercolumn-a{width: 60%; float: left;}
.slidercolumn-b{width: 40%; float: left;}
.corevalues{color: white; font-size: 18px;}

/*slider css*/
* {box-sizing:border-box}

/* Slideshow container */
/*slideshow added s to make class difference*/
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  width: 95%;
  margin-top: 2%;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.sactive, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
/*end slider css*/

/*list css*/
.corevalues li{
  list-style-type: georgian;
  position: relative;
  padding-left: 15px;
}

.corevalues li:before {
  content: "";
  font-size: 15px;
  position: absolute;
  top: 2px;
  left: -10px;
}
/*end list css*/

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .sliderwrapper{ width:auto; height: auto; } }
</style>

</head>
<body>
<!-- page wrapper -->
<div class="sliderwrapper">
	<div class="row">
		<!-- start column-a -->
		    <div class="slidercolumn-a">
			<!-- slide images -->
			<!-- Slideshow container -->
			<div class="slideshow-container">

			  <!-- Full-width images with number and caption text -->
			  <div class="mySlides fade">
			    <div class="numbertext">1 / 3</div>
			    <img src="img/hacker.jpg" style="width:100%; height: 350px; border-radius: 0%;">
			    <div class="text">Caption Text</div>
			  </div>

			  <div class="mySlides fade">
			    <div class="numbertext">2 / 3</div>
			    <img src="img/hosting.jpg" style="width:100%; height: 350px; border-radius: 0%;">
			    <div class="text">Caption Two</div>
			  </div>

			  <div class="mySlides fade">
			    <div class="numbertext">3 / 3</div>
			    <img src="img/marketing.jpg" style="width:100%; height: 350px; border-radius: 0%;">
			    <div class="text">Caption Three</div>
			  </div>

			  <!-- Next and previous buttons -->
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span>
			  <span class="dot" onclick="currentSlide(2)"></span>
			  <span class="dot" onclick="currentSlide(3)"></span>
			</div>
						<!-- end slide show -->
		    </div>
		<!-- end column-a -->

		<!-- start comulmn-b -->
		<div class="slidercolumn-b">
			<h3 style="color: white; text-align: left;">MISSION STATEMENT</h3>
			<p style="color: white; font-size: 18px;">Our mission is to empower every person and every organization on the planet to achieve more.</p>
			<h3 style="color: white; text-align: left;">VISION</h3>
			<p style="color: white; font-size: 18px;">Microsoft s corporate vision is to help people and businesses throughout the world realize their full potential.</p>
			<h3 style="color: white; text-align: left;">CORE VALUES</h3>
						<div class="corevalues">
						<ul><li>Honesty</li></ul>
						<ul><li>Innovation</li></ul>
						<ul><li>Diversity</li></ul>
						<ul><li>Trustworthy</li></ul>
						</div>
		</div>
		<!-- end column-b -->
	</div>

</div>

		<!-- add script here -->
		<script type="text/javascript">
			var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" sactive", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " sactive";
		}
		// automating slideshow
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}
		  slides[slideIndex-1].style.display = "block";
		  setTimeout(showSlides, 5000); // Change image every 2 seconds
		                     }
		</script>
		<!-- end script -->
</body>
</html>