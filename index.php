<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jikoko Hotel System</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <div class="wrapper">
    <?php include_once('inc/header.php'); ?>
    <main>
      <div class="showcase">
        <div class="img-bg"></div>
        <div class="center">
          <h1>Jikoko Hotel</h1>
          <p>Delicious Food offered at our Hotel!</p>
          <p>OPEN FROM 8AM TO 8PM</p>
          <h3>Jikoko The best hotel ever!</h3>
          <p><a href="#menu" class="button xxlarge black">Let me see the menu</a></p>
        </div>
      </div>
      <div class="menu" id="menu">
        <div class="center">
          <h1>FOOD MENU</h1>
          <h1 class="heading">our<span>popular</span>foods</h1>
          <div class="con">
            <div class="box">
              <form action="display.php" method="post" class="box-menu">
                <div class="bx_img">
                  <img src="img/beans.jpeg" alt="Beans">
                </div>
                <div class="box-body">
                  <h3>Tasty Beans</h3>
                  <span class="price">sh30</span>
                  <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                  </div>
                  <input type="number" name="price" id="price" placeholder="Enter quantity"><br><br>
                  <input type="submit" id="tastybeans" name="tastybeans" value="view" class="btn">
                  <input type="hidden" name="item" value="tastybeans">
                </div>
              </form>
            </div>
            <div class="box">
              <form action="display.php" method="post" class="box-menu">
                <div class="bx_img">
                  <img src="img/tea.jpeg" alt="Tea">
                </div>
                <div class="box-body">
                  <h3>Tea</h3>
                  <span class="price">sh50</span>
                  <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                  </div>
                  <input type="number" name="price" id="price" placeholder="Enter quantity"></b><br><br>
                  <input type="submit" id="tastytea" name="submit" value="view" class="btn">
                  <input type="hidden" name="item" value="tastytea">
                </div>
              </form>
            </div>
            <div class="box">
              <form action="display.php" method="post" class="box-menu">
                <div class="bx_img">
                  <img src="img/chapati.jpeg" alt="Chapati">
                </div>
                <div class="box-body">
                  <h3>Tasty Chapati</h3>
                  <span class="price">sh20</span>
                  <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                  </div>
                  <input type="number" name="price" id="price" placeholder="Enter quantity"><br><br>
                  <input type="submit" id="tastychapati" name="tastychapati" value="view" class="btn">
                  <input type="hidden" name="item" value="tastychapati">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  </main>
  </div>
</body>

</html>