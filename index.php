
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/stylesheet1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<title>Welcome to the Bank</title>
<link rel="icon" href="images/City-Bank-Logo.png">
</head>
<body>

<!-- Navigation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="header">
        <a href="home_page.php" class="logo">CITY BANK <i class="fa fa-university" aria-hidden="true"></i></a>
        <div class="header-right">
            <a class="active" href="home_page.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="view_customer.php"><i class="fa fa-users" aria-hidden="true"></i>View Coustomers</a>
            <a href="transactionhistory.php"><i class="fa fa-history" aria-hidden="true"></i>Transaction History</a>
            <a href="about_bank.php"><i class="fa fa-envira" aria-hidden="true"></i>About Us</a>
           
        </div>
</div>

     <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <img src="images/bank2.jpg" style="width:100%">
        <div class="text">Welcome To CITY BANK</div>
    </div>

    <div class="mySlides fade">
        <img src="images/bank1.jpg" style="width:100%">
        <div class="text">Do Banking Easily.</div>
    </div>

    <div class="mySlides fade">
        <img src="images/bank3.jpg" style="width:100%">
        <div class="text">Transfer Money to Family and Friends Quikly.</div>
    </div>

    <br>

    
</div>
<div class="text-container">
    <div class="txt">
        <h1 class="jumbotron-heading"><span id="typed"></span></h1>
        <p>Bank is the Institution you can’t imagine the World can get the 
            evaluation for the assets and reflect the Country’s economy.
        <p>Now you can perform Banking easily.
        <p>We provide best facilites to Transfer Money safely.
    </div>
</div>

<footer class="footer">
<p>&copy 2021. Made by <b>Aniket Singh</b> </p>
</footer> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js" async defer></script>
<script>
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>
<script>
    window.onload = function () {
        console.log("loaded")
        var typed = new Typed('#typed', {
            strings: ["Welcome to City Bank", "Your personal bank"],
            backSpeed: 15,
            smartBackspace: true,
            backDelay: 1200,
            startDelay: 1000,
            typeSpeed: 25,
            loop: true,
        });
    };
</script>




</body>
</html>

