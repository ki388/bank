<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  

</style>
</head>
<body style="background-color:rgb(0,55,28)">


<h1 align="center" style="color:green" >JK BANK</h1>

<div class="topnav" id="myTopnav">
<a href="http://localhost/bank/home.php" class="active">HOME</a>
<a href="http://localhost/bank/register.php" >REGISTER CUSTOMER</a>
<a href="http://localhost/bank/deposit.php" >DEPOSIT</a>
<a href="http://localhost/bank/withdraw.php" >WITHDRAW</a>
<a href="http://localhost/bank/transfer.php" >TRANSFER</a>

<a href="http://localhost/bank/ac.php" >CUSTOMER BANK STATEMENT</a>
<a href="http://localhost/bank/login.php" >BANKERS PORTAL</a>

<a href="http://localhost/bank/hom.php" >LOAN</a>
<a href="http://localhost/bank/hom.php" >PAYBILLS</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" style="font-size:48px;color:red"> </i>
  </a>
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



<div class="slideshow-container">

<div class="mySlides fade">
  <img src="http://localhost/IMG17.jpg"style="width:100%" height="400px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <img src="http://localhost/IMG11.jpg" style="width:100%" height="400px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <img src="http://localhost/IMG12.jpg" style="width:100%" height="400px">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <img src="http://localhost/IMG13.png" style="width:100%" height="400px">
  <div class="text" align="right">kioko</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

<div id="main">
<div>
<h3 style="color:red">&nbsp &nbsp CONTACT US</h3>
<li  style="color:blue">phone number:<br/>0727807914,<br/>0798539184</li>
<li  style="color:blue">Email:<br/>joshuakioko724@gmail.com</li>
<li  style="color:blue">Instagram: @kiokojoshua</li>
<li  style="color:blue">facebook: kiokojoshua</li>
</div>
<div>
<h3 style="color:red">&nbsp &nbsp OUR PARTINERS</h3>
<ol>
<li  style="color:blue">Kenya commercial bank</li>
<li  style="color:blue">Western need</li>
<li  style="color:blue">Consolideted bank</li>
<li  style="color:blue">Equity bank</li>
<li  style="color:blue">Family bank</li>
</ol>
</div>
<div>
<h3 style="color:red">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp LINKS</h3>

<ul>
<li><a href="http://localhost/bank/h.php" class="button">Admin login</a></li>
<li><a href="http://localhost/bank/h.php" class="button">Our charges</a></li>
<li><a href="http://localhost/bank/h.php" class="button">Currency exchange</a></li>
<li><a href="http://localhost/bank/h.php" class="button">Custodian activities</a></li>
<li><a href="http://localhost/bank/h.php" class="button">Loan</a></li>
</ul>
</div>
</div>

<div class="foooter">
<p>&copy 2019 all rights reserved cooperative bank</p>
</div>



