<!Doctype html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The menu</title>
</head>
<body>
  <div class="container black padding-64 xxlarge" id="menu">
  <div class="content">
    <h1 class="center " style="text-align: center;">THE MENU</h1>
    <div class="row center border border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Food');" id="myLink">
        <div class="col s4 tablink padding-large hover-red">Food</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="col s4 tablink padding-large hover-red">Drinks</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Fruits');">
        <div class="col s4 tablink padding-large hover-red">Fruits</div>

     <div id="Food" class="container menu padding-32 white">
      <h1><b>Chapati</b> <span class="right tag dark-grey round">sh10.00</span></h1>
      <p class="text-grey">Mandazi, Donuts, Cakes</p>
      <hr>
      <label for="Chapati-quantity">Quantity:</label>
        <input type="number" id="chapati-quantity" name="chapati-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('chapati', 'sh10.00')">Add to cart</button>

      <h1><b>Beans</b> <span class="right tag dark-grey round">sh30.00</span></h1>
      <p class="text-grey">Yellow beans, Black beans,Green grams</p>
      <hr>
      <label for="Beans-quantity">Quantity:</label>
        <input type="number" id="beans-quantity" name="beans-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('beans', 'sh30.00')">Add to cart</button>
      

      <h1><b>Ugali</b> <span class="right tag dark-grey round">sh20.00</span></h1>
      <p class="text-grey">Githeri, maize</p>
      <hr>
      <label for="Ugali-quantity">Quantity:</label>
        <input type="number" id="ugali-quantity" name="ugali-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('ugali','sh20.00')">Add to cart</button>
      

      <h1><b>Greens</b> <span class="right tag dark-grey round">sh15.00</span></h1>
      <p class="text-grey">Kales, Cabbage, Spinach</p>
      <hr>
      <label for="Greens-quantity">Quantity:</label>
        <input type="number" id="greens-quantity" name="greens-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('greens', 'sh15.00')">Add to cart</button>  
  </div>

   <div id="Drinks" class="container menu padding-32 white">
      <h1><b>Soda</b> <span class="tag grey round">Drinks</span> <span class="right tag dark-grey round">sh 30.00</span></h1>
      <p class="text-grey">Fanta, Kokakola, Pineapple</p>
      <hr>
      <label for="Drinks-quantity">Quantity:</label>
        <input type="number" id="drinks-quantity" name="drinks-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('drinks', 'sh30.00')">Add to cart</button>

       <h1><b>Juice</b> <span class="right tag dark-grey round">sh50.00</span></h1>
      <p class="text-grey">Cold juices</p>
      <hr>
      <label for="Juice-quantity">Quantity:</label>
        <input type="number" id="juice-quantity" name="juice-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('juice','sh50.00')">Add to cart</button>

      
      <h1><b>Tea</b> <span class="right tag dark-grey round">sh50.00</span></h1>
      <p class="text-grey">Coffee, Cocoa,Lemon</p>
      <hr>
      <label for="Tea-quantity">Quantity:</label>
        <input type="number" id="tea-quantity" name="tea-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('tea','sh50.00')">Add to cart</button>
  </div>

      <div id="Fruits" class="container menu padding-32 white">
      <h1><b>Banana</b> <span class="tag grey round">Friut</span><span class="right tag dark-grey round">sh5.00</span></h1>
      <p class="text-grey">All available</p>
      <hr>
      <label for="Banana-quantity">Quantity:</label>
        <input type="number" id="banana-quantity" name="banana-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('banana','sh5.00')">Add to cart</button>
      
      <h1><b>Apples</b> <span class="right tag dark-grey round">sh20.00</span></h1>
      <p class="text-grey">All available</p>
      <hr>
      <label for="Apples-quantity">Quantity:</label>
        <input type="number" id="apples-quantity" name="apples-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('apples','sh20.00')">Add to cart</button>
    
     <h1><b>Mango</b> <span class="right tag dark-grey round">sh10.00</span></h1>
      <p class="text-grey">All available</p>
      <hr>
      <label for="Mango-quantity">Quantity:</label>
        <input type="number" id="mango-quantity" name="mango-quantity" min="1" max="10" value="1">
        <button type="button" onclick="addToCart('mango', 'sh10.00')">Add to cart</button>
      </a>

</div>
</div>
</div>
</div>
</div>
</body>
</form>
  <div class="cart">
    <div class="receipt">
  <h2>Receipt</h2>
  <ul id="receipt-items"></ul>
  <p>Total: sh<span id="receipt-total">0.00</span></p>
</div>
<div id="receipt"></div>


    <h2 class="center" style="text-align: center;">Cart</h2>
    <ul id="cart-items"></ul>
    <p class="center" style="text-align:center;">Total: sh<span id="cart-total">0.00</span></p>
    <button type="button" onclick="clearCart()">Clear cart</button>
  </div>
  <button type="button" onclick="generateReceipt()">Generate Receipt</button>

  <script src="index.js"></script>
</body>
</h1>
</head>
</html>

</div>


</body>
</html>