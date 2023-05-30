<!Doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jikoko Hotel System</title>
  <link rel="stylesheet" href="css/home.css">
  <script>
    document.querySelector("#hamburgerIcon").addEventListener("click", function () {
      document.querySelector(".container").classList.toggle("responsive");
    });
  </script>
</head>

<body>
  <header>
    <div class="container" id="myNavbar">
      <div id="hamburgerIcon">&#9776;</div>
      <div id="navLinks">
        <a href="#" class="button">HOME</a><br>
        <a href="#main menu" class="button">MAIN MENU</a><br>
        <a href="#register/signup" class="button">REGISTER/SIGNUP</a><br>
        <a href="#news" class="button">NEWS</a><br>
        <a href="#contact" class="button">CONTACT US</a><br>
        <a href="#admin" class="button">ADMIN</a><br>
        <a href="#gallery" class="button">GALLERY</a><br>

      </div>
    </div>
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="#food menu"> FOOD MENU</a>
      <a href="#register/signup">REGISTER/SIGNUP</a>
      <a href="#news">NEWS</a>
      <a href="#contact">CONTACT US</a>
      <a href="#admin">ADMIN</a>
      <a href="#gallery">GALLERY</a>

      <input type="text" placeholder="Search..">
    </div>

    <div class="topnav">
      <div class="login as admin-container">
        <form action="/action_page.php">

          <input type="text" placeholder="Username" name="username">
          <input type="text" placeholder="Password" name="psw">
          <button type="submit">Login as admin</button>
        </form>
      </div>
    </div>
    <img src="pic.jpg" style="width:100%" "height:5%" class="margin-top margin-bottom">
    <h1 class="center" style="text-align: center;">Jikoko Hotel</h1>
    <p class="center" style="text-align: center;">Delicious Food offered at our Hotel!</p>
  </header>
  </header>

  <div class="container-display-middle">
    <p class="center" style="text-align: center" ;>OPEN FROM 8AM TO 8PM</p>
    <div class="display-middle center ">
      <span class="text-white hide-small" style="font-size:100px">
        Jikoko The best hotel ever!</span>
    </div>
    <p><a href="#menu" class="button xxlarge black">Let me see the menu</a></p>
  </div>
</body>


<!--Menu Container-->
<div class="container-display-middle" id="menu">
  <div class="content">
    <h1 class="center " style="text-align: center;">THE MENU</h1>
    <form action="image">
      <div class="inputBox">
        <h1 class="heading">our<span>popular</span>food</h1>
        <div class="box-container">
          <div class="box">
            <img src="chapati.jpeg" alt="Chapati" style="width:100%" height="50%">
            <h3>Tasty Chapati</h3>
            <span class="price">sh20</span>
            <div class="rating">
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
            </div>
            <input type="submit" value="order now" class="btn">

          </div>
          <div class="box">
            <img src="beans.jpeg" alt="Beans" style="width:100%" height="50%">
            <h3>Tasty Beans</h3>
            <span class="price">sh50</span>
            <div class="rating">
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
            </div>
            <input type="submit" value="order now" class="btn">
          </div>
          <div class="box">

            <img src="tea.jpeg" alt="Tea" style="width:100%" height="50%">
            <h3>Tasty tea</h3>
            <span class="price">sh30</span>
            <div class="rating">
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
            </div>
            <input type="submit" value="order now" class="btn">
          </div>
        </div>
      </div>
  </div>
  </form>
  <!--Register Container-->
  <div class="container-display-middle" id="register/signup">
    <div class="Register/signup">
      <h1 class="center jumbo" style="text-align: center" ;>Register/Signup</h1>
      <form action="action_page.php" style="border:1px solid #ccc">
        <title>Register/Sign up</title>
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
    </form>

  </div>



  <!--admin Container-->
  <div class="container padding-64 blue-grey grayscale-min xlarge" id="admin">
    <div class="contact">
      <h1 class="center jumbo" style="margin-bottom:64px">Admin</h1>
      <form action="admin.php" method="post">
        <input type="submit" value="admin">
      </form>
    </div>


    <!--Food Menu Container-->
    <div class="container" id="food menu">
      <div class="Food Menu">
        <h1 class="center" style="text-align: center;">Food Menu</h1>
        <div class="container-display-middle" id="myNavbar">
          <p><a href="#menu" class="button xxlarge black">Let me see the menu</a></p>
        </div>
      </div>
    </div>
  </div>


  <!--News Container-->
  <div class="container-display-middle" id="news">
    <div class="News">
      <h1 class="center" style="text-align: center;">News</h1>
      <title class="center" style="text-align: center;">News</title>
      <p class="center" style="text-align: center;font-size: 30px;">The Jikoko Hotel is a hotel located in Kahawa West.
        It is a busy hotel that deals with ordering of food<span id="dots">...</span><span id="more">it has the best
          services offerd and you won't regret ordering any meals both take away or when eating at that time.Jikoko has
          a cool environment where you would not miss to visit.</span></p>
      <style>
        #more {
          display: none
        }
      </style>
      <button onclick="myFunction()" id="myBtn">Read more</button>
      <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");

          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
          }
        }
      </script>
      <p><strong>The Chef?</strong>Mr.Chief Chef<img src="food.jpg" style="width:100%" class="margin-top margin-bottom"
          alt="Chef"></p>

      <p class="center" style="text-align: center;">Delicious Food!.</p>
      <h1 class="center" style="text-align:center">Opening Hour</h1>
      <div class="row">
        <div class="col s6">
          <p>Mon & Tue 8.00 - 20.00</p>
          <p>Wednesday 8.00 - 20.00</p>
          <p>Thursday 8:00 - 20:00</p>
        </div>
        <div class="col s6">
          <p>Friday 8:00 - 20:00</p>
          <p>Saturday 10:00 - 20:00</p>
          <p>Sunday Closed</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
<div class="about-section">
  <h1>About Us</h1>
  <p>You are in the right page, here is what we plan to do and implement in few years.</p>
  <p> We will also replace a few things from what you see.</p>
</div>

<h2 style="text-align:center">Hotel Ideas</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="building.jpeg" alt="Building" style="width:100%">
      <div class="container">
        <h2>Hotel Ideas</h2>
        <p>The hotel idea building</p>
        <p>This is an example of what we want the hotel to look like with good services for example swimming pool for
          our customers to enjoy. for inquiries connact here below</p>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="fridge.jpeg" alt="Refrigerators" style="width:100%">
      <div class="container">
        <h2>Hotel Fridge</h2>
        <p> We want to buy such kind of fridge where drinks will be put.We want our customers to enjoy cold drinks at
          their chioces.</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="machine.jpg" alt="Hotel" style="width:100%">
      <div class="container">
        <h2>Hotel equipments</h2>
        <p> We want the workers in the hotel to wear uniforms as this image so that customers can be able to identify
          them and also such equipments to be used for quality services.</p>
      </div>
    </div>
  </div>
</div>


<!--Contact Container-->
<div class="container-display-middle" id="contact">
  <div class="contact">
    <h1 class="center jumbo" style="text-align: center;">Contact</h1>
    <p>Find us at Kahawa West!</p>
    <p><span class="tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your
      needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <title class="center" style="text-align: center;">Contact Form</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact Form</title>
    </head>

    <body>
      <h3 class="center" style="text-align: center;">Contact us</h3>
      <legend class="center" style="text-align: center;">contact Form</legend>
      <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
        <label for="Name" class="fcf-label">Your name</label>
        <div class="fcf-input-group">
          <input type="text" id="Name" name="Name" class="fcf-form-control" required>
        </div>
        <div class="fcf-form-group">
          <label for="Email" class="fcf-label">Your email address</label>
          <div class="fcf-input-group">
            <input type="email" id="Email" name="Email" class="fcf-form-control" required>
          </div>
          <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
              <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000"
                required></textarea>
            </div>
          </div>
          <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send</button>
          </div>
    </body>
    <label for="contact reason">Contact Reason</label>
    <select id="contact reason" name="contact reason">
      <option value="sales">Sales</option>
      <option value="help">Help</option>
      <option value="shools">Services</option>
    </select>

    <input type="checkbox" id="Hotel" name="Hotel" value="newsavailablesignup">
    <label for="Schools">Visit our Hotel</label><br>

    <body bgcolor=" pink">
      <style>



      </style>

    </body>
  </div>
  </form>
  </body>
</div>
<!--Gallery Container-->
<div class="container-display-middle" id="gallery">
  <div class="Gallery">
    <h1 class="center " style="text-align: center;">Gallery</h1>
    <title class="center" style="text-align: center;">Gallery</title>
    <p>Take a look at our food images!</p>
    <div class="row">
      <div class="column">
        <div class="content">
          <img src="chapati.jpeg" alt="Chapati" style="width:100%">
          <h3>Chapati</h3>
          <p>@sh 20</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="beans.jpeg" alt="Beans" style="width:100%">
          <h3>Beans</h3>
          <p>@sh 50</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="Ugali.jpeg" alt="Ugali" style="width:100%">
          <h3>Ugali</h3>
          <p>@sh 100</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="tea.jpeg" alt="tea" style="width:100%">
          <h3>tea</h3>
          <p>@sh 30</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="soda.jpeg" alt="soda" style="width:100%">
          <h3>soda</h3>
          <p>@sh 40</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="wiki.jpeg" alt="Kales" style="width:100%">
          <h3>Kales</h3>
          <p>@sh 15</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="mango.jpg" alt="Smothiee" style="width:70%">
          <h3>Smoothie</h3>
          <p>@sh 70</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="juice.jpeg" alt="juice" style="width:100%">
          <h3>Juice</h3>
          <p>@sh 50</p>
        </div>
      </div>


      <div class="content">
        <img src="apple.jpeg" alt="apple" style="width:30%">
        <h3>Apples</h3>
        <p>@sh 20</p>
      </div>

      <!-- Footer -->
      <footer class="center black padding-48 xxlarge"><br>
        <p class="center" style="text-align: center;">Thank you! visit us again</p>
        <p class="center" style="text-align: center;">@2023 All Rights Reserved.| Design by Jikoko Hotel.</p>

        <!-- Add icon library -->
        <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Add font awesome icons -->
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <marquee behavior="scroll" direction="up">
          <img src="stick.jpeg" alt="Hotel" style="width:50%">
        </marquee>
        <marquee behavior="scroll" direction="left">
          <img src="sticker.jpeg" alt="Hotel" style="width:50%">

        </marquee>

      </footer>


      <script>
        // Tabbed Menu
        function openMenu(evt, menuName) {
          var i, x, tablinks;
          x = document.getElementsByClassName("menu");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" red", "");
          }
          document.getElementById(menuName).style.display = "block";
          evt.currentTarget.firstElementChild.className += "red";
        }
        document.getElementById("myLink").click();
      </script>

      </body>



</html>