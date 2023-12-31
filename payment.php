<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=0.1">
    <link rel="stylesheet" href="payment.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Mealkia</title>
</head>
<body>
    <div class="navbar">
        <a class ="logo" href="main.php">
            <img src="ASSETS/logo.png">
        </a>
        <!-- <a>
            <span class="bar"></span>
            
            <span class="bar"></span>
            <span class="bar"></span>
        </a> -->
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

    <div class="address">
        <div class="savedAdd">
            <h3>Saved Address</h3>
            <a class="homelink">
                <button class="homebutton">Home</button>
            </a>
            <a class="worklink">
                <button>Work</button>
            </a>
            <button href="">
        </div>

    </div>
    
    <button href="confirmation.html" class="paybutton">Pay</button>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   -->
</body>
    
<form action="confirmation.html" style="border:1px solid #ccc">
    <div class="adressform">
      <h1>Add a new address</h1>
      <hr>
  
      <input type="text" placeholder="Enter a city" name="city" required>

      <input type="province" placeholder="Enter a province" name="prov" required>

      <input type="zipcode" placeholder="Enter your zipcode" name="zipcode" required>

      <input type="street" placeholder="Street, building, housing complex" name="street" required>

      <input type="details" placeholder="Other details" name="details" required>
  
      <div class="clearfix">
        <button type="submit" class="newaddress">Use Address</button>
      </div>
    </div>
  </form>
  
<footer>
    <div class="footertext">
        <h1>©2023 PT MealkiaID Group . All right reserved.</h1>
    </div>
</footer>

<html>