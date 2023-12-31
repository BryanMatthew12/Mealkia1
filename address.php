<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=0.1">
    <link rel="stylesheet" href="address.css">
    <title>Mealkia</title>
</head>

<body>
    <div class="navbar">
        <a class ="logo" href="main.php">
            <img src="ASSETS/logo.png">
        </a>
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
    
    <form class="addressform" action="databaseAddress.php" method="post">
        <h1>Shipping Address</h1><br><br>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input
            type="number"
            class="form-control"
            id="phone"
            name="phone"
            required
            minlength="10"
          />
        </div>

        <div class="form-group">
          <label for="prov">Province</label>
          <input
            type="text"
            class="form-control"
            id="province"
            name="province"
            required
          />
        </div>
        
        <div class="form-group">
          <label for="city">City</label>
          <input
            type="text"
            class="form-control"
            id="city"
            name="city"
            required
          />
        </div>
        
        <div class="form-group">
            <label for="adr">Address</label>
            <input
              type="text"
              class="form-control"
              id="adr"
              name="adr"
              required
            />
          </div>

        <div class="form-group">
          <label for="zipcode">Zipcode</label>
          <input
            type="text"
            class="form-control"
            id="zip"
            name="zip"
            required
            minlength="5"
          />
        </div>
        <div class="form-group">
          <label for="addinfo">Additional Information</label>
          <input
            type="text"
            class="form-control"
            id="add"
            name="add"
          />
        </div>

        <h4>Payment Method</h4>

        <div class="logos">

                  <div class="pm-1">
                    <div class="row">
                      <div class="column">
                          <img src="ASSETS/qris.png" >
                          <h5>QRIS</h5>
                      </div>
                      <div class="column">
                          <img src="ASSETS/logo-gopay-vector.png">
                          <h5>GOPAY</h5>
                      </div>
                  </div>
                  </div>
          
                  <div class="pm-2">
                    <div class="row">
                      <div class="column">
                          <img src="ASSETS/shope.png">
                          <h5>Shopee</h5>
                      </div>
                      <div class="column">
                          <img src="ASSETS/ovo-removebg-preview.png">
                          <h5>OVO</h5>
                      </div>
                  </div>
                  </div>

        </div>

      <div class="Billing">
          <div class="Total">
              <h3>Total Price : </h3>
              <h3>Shipping Fee : </h3>
              <div class="price">
                  <h3 id="price">Billing : Rp 300.000</h3>
              </div>
          </div>
      </div>

        <a href="main.html">
          <input type="submit" class= "btn-primary" />
        </a>
  </form>

  <script>

  window.addEventListener("DOMContentLoaded", function() {

    var totalPrice = localStorage.getItem("totalPrice");

    if (totalPrice) {
        var rupiah = new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR"
        });

        var rpTotalPrice = rupiah.format(totalPrice);
        document.getElementById("total-price").textContent = rpTotalPrice;

        var billingAmount = "Billing: " + rpTotalPrice;
        document.getElementById("billing-amount").textContent = billingAmount;
    }
  });
  </script>

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
            <p><a href="T&C.html"> Terms & Conditions</a></p>
        </div>

        <div class="col4">
          <h3>PAYMENT METHOD</h3>
          <img src="ASSETS/logo-gopay-vector.png">
          <img src="ASSETS/mastercard.png"><br>
          <img src="ASSETS/Visa_logo.png">
          <img src="ASSETS/Symbol-Paypal.png">
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

    </div>

    
    <div class="footertext">
        <h1>©2023 PT MealkiaID Group . All right reserved.</h1>
    </div>
</footer>

</html>