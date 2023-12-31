<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=0.1">
        <!-- <meta http-equiv='refresh' content='10;url=http://localhost:5500/main.html' /> -->
    <link rel="stylesheet" href="confirm.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Mealkia</title>
</head>
<script type="text/javascript">
    var count = 5; // Timer
    var redirect = "http://localhost:5500/main.html"; // Target URL
  
    function countDown() {
      var timer = document.getElementById("timer"); // Timer ID
      if (count > 0) {
        count--;
        timer.innerHTML = "This page will redirect in " + count + " seconds."; // Timer Message
        setTimeout("countDown()", 1000);
      } else {
        window.location.href = redirect;
      }
    }
</script>
<body>
    <div class="navbar">
        <a class ="logo" href="main.php">
            <img src="ASSETS/logo.png">
        <div class="navbar-links">
            <ul>
                <li><a href="mealplan.php">Meal Plan</a></li>
                <li><a href="menu.php">Menus</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <a class="profile" href="profile.php">
                <img src="ASSETS/301-3012711_png-file-profile-white-icon-png-removebg-preview.png" alt="" class="float-end" >
            </a>
        </div>
    </div>
    <div class="confirm">
        <div class="tb-1">
            <h1>Your Order Has Been Recieved</h1>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
              </svg>
              <h2>Thank You for Purchasing!</h2>
              <p>You will receive a confirmation email with details of youir order</p>
        </div>
        <div class="footer animated slow fadeInUp">
            <p id="timer">
              <script type="text/javascript">
                countDown();
              </script>
            </p>
          </div>
    </div>
    
</body>

<footer>
    <div class="foot">
        <div class="col1">
            <h3>OUR COMPANY</h3>
            <p>Blog</p>
            <p>Careers</p>
            <p>Offices</p>
        </div>

        <div class="col2">
            <h3>BUSINESS</h3>
            <p>Become a Partner</p>
            <p>Influencers</p>
        </div>

        <div class="col3">
            <h3>CONTACT US</h3>
            <p>Mealkia Help Center</p>
            <p><a href="T&C.html">Terms & Conditions</a></p>
        </div>

        <div class="col4">
            <h3>PAYMENT METHOD</h3>
            <img src="ASSETS/shope.png">
            <img src="ASSETS/logo-gopay-vector.png"><br>
            <img src="ASSETS/mastercard.png">
            <img src="ASSETS/qris.png">
        </div>
        
        <div class="col5">
                <h3>SOCIAL MEDIA</h3>
            <div class="igsection">
                <a href="https://www.instagram.com/">
                <img src="ASSETS/instagram-logo-removebg-preview.png">
                <p>MealkiaID</p>
                </a>
            </div>
        </div>


    </div>

    
    <div class="footertext">
        <h3>©2023 PT MealkiaID Group . All right reserved.</h3>
    </div>
</footer>
</html>