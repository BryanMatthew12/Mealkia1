<!DOCTYPE html>

<head>
    <title>Menu</title>
    <link rel="stylesheet" href="mealplan.css">
</head>

<!-- Navbar -->
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

<!-- Meal plan -->

<div class="parent">

    <div class="mealsect">


        <h4>Meal Plan</h4>
        <div class="mp-1" id="mp-1">
            <div class="title">
                <div class="row">
                    <label class="column">
                      <input type="radio" name="meal-plan" value="Meat & Veggies" onchange="updatePlan(this.value)">
                      <div class="radio-btns">
                        <img src="ASSETS/dish.png">
                        <h5>Meat & Veggies</h5>
                      </div>
                    </label>
                    <label class="column">
                      <input type="radio" name="meal-plan" value="Vegetarian" onchange="updatePlan(this.value)">
                      <div class="radio-btns">
                        <img src="ASSETS/vegetable.png">
                        <h5>Vegetarian</h5>
                      </div>
                    </label>
                    <label class="column">
                      <input type="radio" name="meal-plan" value="Pescatarian" onchange="updatePlan(this.value)">
                      <div class="radio-btns">
                        <img src="ASSETS/pesca.png">
                        <h5>Pescatarian</h5>
                      </div>
                    </label>
                  </div>
                </div>
        </div>
        <div class="mp-2" id="mp-2">
            <div class="title">
                <div class="row">
                    <label class="column">
                      <input type="radio" name="meal-plan" value="Healthy" onchange="updatePlan(this.value)">
                      <div class="radio-btns">
                        <img src="ASSETS/diet.png">
                            <h5>Healthy</h5>
                      </div>
                    </label>
                    <label class="column">
                      <input type="radio" name="meal-plan" value="Low Calories" onchange="updatePlan(this.value)">
                      <div class="radio-btns">
                        <img src="ASSETS/calories.png">
                            <h5>Low Calories</h5>
                      </div>
                    </label>
                    <label class="column">
                      <input type="radio" name="meal-plan" value="Custom" onchange="updatePlan(this.value)">
                      <div class="radio-btns">
                        <img src="ASSETS/ads.png">
                            <h5>Custom</h5>
                      </div>
                    </label>
                  </div>
                </div>   

        <h3>Plan Size</h3>
        <form id="plan-size" name="plansize">
                
            <div class="people">
                <label>Number of People</label>
                <select class="selectBox" name="People" id="people" oninput="updateNumber()">
                        <!-- <option>People</option> -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                </select>
                <label>Meals per Week</label>
                    <select class="selectBox" name="Meals" id="meals" oninput="updateNumber()">
                        <!-- <option>People</option> -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>    
                    </select>
            </div>
            
        </form>
        </div>
    </div>


    
    <div class="paysect">
        <div class="Total">
            <h2>Confirm Plan<h2>
            <h3>Plan : <span id="select-plan"></span></h3>
            <h3>Meals/Week : <span id="meals-value">1</span> </h3>
            <h3>People :  <span id="people-value">1</span></h3>
            <h3>Total Servings : <span id="total-servings">1</span></h3>
            <h3>Price per Meal : Rp 30.000,00</h3>
            <h1>Total Price :
            </h1>
            <div class="price">
                <p id="price"></p>
            </div>
            <div class="pay">
                <a href="address.html">
                    <input type="button" value="Proceed">
                </a>
            </div>
        </div>
    </div>


</div>



<!-- Footer -->
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

    
    <div class="footertext">
        <h1>©2023 PT MealkiaID Group . All right reserved.</h1>
    </div>

    <script>
    function updatePlan(plan) {
    document.getElementById("select-plan").textContent = plan;
    }

    
    function updateNumber() {
        var peopleElement = document.getElementById("people");
        var mealsElement = document.getElementById("meals");
        var selectedPeople = peopleElement.value;
        var selectedMeals = mealsElement.value;

        document.getElementById("people-value").textContent = selectedPeople;
        document.getElementById("meals-value").textContent = selectedMeals;

        var totalServings = selectedPeople * selectedMeals;
        document.getElementById("total-servings").textContent = totalServings;

        var people1=document.getElementById("people").value;
        var meals1=document.getElementById("meals").value;
        var ttlserve = people1+meals1;
        var ppl = people1*30000;
        var meal = meals1;
        var price = 0;

        var rupiah =  new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR"
            });
        
        price = ppl * meal;
        var rpPrice = rupiah.format(price);
        document.getElementById("price").innerHTML = rpPrice;

        localStorage.setItem("totalPrice", price);

        var billingAmount = "Billing: " + rpPrice;
        document.getElementById("meal-planning-frame").contentWindow.document.getElementById("billing-amount").textContent = billingAmount;
    }
    </script>



</footer>

</html>

