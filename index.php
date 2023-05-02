<DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Waffles order">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">

    <!--Link to CSS file-->
    <link rel="stylesheet" href="./css/style.css">

    <!--Title-->
    <title>Waffles Order Webpage</title>
  </head>
  <body>

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-indigo.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!--Header-->
<?php echo "<h1>Waffle Orders with PHP</h1>"; ?>

    <!--Text-->
<?php echo "<p>Welcome to our waffles breakfast company. With this webpage you can place an order for a waffle with your choice of topping and optional items. We have a variety of different sizes and toppings so that you can customize your own waffle. In addition with optional breakfast drinks and fried chicken tenders. We hope you enjoy your meal!</p>" ?>

    <!--Image-->
    <center>
      <img src="./images/classicWaffles.jpeg" alt="Waffles" width="400" length="400">
    </center>
    <br>
    <br>

    <!--Table for prices and user order (side-by-side)-->
    <center>
<?php echo "<h4>Menu:</h4>" ?>
    </center>

    <!--Table of options prices and sizes-->
    <center>
      <table>
        <tr>
          <th class="border">Sizes:</th>
          <th class="border">Price:</th>
        </tr>
        <tr>
          <td class="border">Small</td>
          <td class="border">$3.00</td>
        </tr>
        <tr>
          <td class="border">Medium</td>
          <td class="border">$4.00</td>
        </tr>
        <tr>
          <td class="border">Large</td>
          <td class="border">$5.00</td>
        </tr>
        <tr>
          <td class="border">Toppings</td>
          <td class="border">$2.00 (each)</td>
        </tr>
        <tr>
          <td class="border">Breakfast Drink (optional)</td>
          <td class="border">$1.00</td>
        </tr>
        <tr>
          <td class="border">Fried Chicken Tender (optional)</td>
          <td class="border">$2.00</td>
        </tr>
      </table>
      <br>
    </center>

    <!--Form to allow user input-->
    <form action="./calculations.php" method="post" target="results">
      <?php echo "<h4>Please indicate the size of waffle you would like:</h4>"; ?>
      <br>

    <!--Multiple choice - picking size of pancake-->
        <label for="size">Select a size of waffle for your order:</label>
        <select id="size" name="size">
          <option value="0">-- Size --</option>
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
        </select>
      <br>
      <br>

    <!--MDL checkboxes for pancake topping-->
        <h4>Choose your waffle topping:</h4>

    <!--First checkbox - Original-->
        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
          <span class="mdl-checkbox__label">Original</span>
          <input type="checkbox" id="original" name="checkboxes[]" value="1" class="mdl-checkbox__input">
        </label>
      <br>
      <br>

    <!--Second checkbox - Cinnamon & sugar-->
        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
          <span class="mdl-checkbox__label">Cinnamon & sugar</span>
          <input type="checkbox" id="cinnamon-and-sugar" name="checkboxes[]" value="1" class="mdl-checkbox__input">
        </label>
      <br>
      <br>

    <!--Third checkbox - Chocolate or nutella drizzle-->
        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
          <span class="mdl-checkbox__label">Chocolate or nutella drizzle</span>
          <input type="checkbox" id="chocolate-or-nutella-drizzle" name="checkboxes[]" value="1"  class="mdl-checkbox__input">
        </label>
      <br>
      <br>

    <!--Fourth checkbox - Whipped cream and fruit-->
        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
          <span class="mdl-checkbox__label">Whipped cream and fruit</span>
          <input type="checkbox" id="whipped-cream-and-fruit" name="checkboxes[]" value="1" class="mdl-checkbox__input">
        </label>
      <br>
      <br>

    <!--Fifth checkbox - Fried Eggs and bacon-->
        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
          <span class="mdl-checkbox__label">Fried Eggs and bacon</span>
          <input type="checkbox" id="fried-eggs-and-bacon" name="checkboxes[]" value="1" class="mdl-checkbox__input">
        </label>
      <br>
      <br>

    <!--Optional items radio buttons-->
        <h4>If you want to order any optional items, please select them below:</h4>
        <h6>For our optional items we have, a variety of breakfast drinks, as well as our homemade fried chicken tenders.</h6>

    <!--Multiple choice - picking an optional breakfast drink-->
     <label for="drinks">Choose a breakfast drink:</label>
     <select id="drinks" name="drinks">
       <option value="0">-- Drinks --</option>
       <option value="coffee">Coffee</option>
       <option value="tea">Tea</option>
       <option value="orange-juice">Orange Juice</option>
       <option value="apple-juice">Apple Juice</option>
     </select>
      <br>
      <br>

    <!--Amount of user's optional items in their order-->
        <h4>If you're ordering any of our optional items, then please indicate below the amount of drinks and/or  tenders you would like in your order:</h4>

    <!--Input for optional breakfast drink-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="number" id="amount-drinks" step="1" value="0" min="0"  name="amount-drinks">
          <label class="mdl-textfield__label" for="amount-drinks">How many breakfast dinks would you like?</label>
        </div>

    <!--Input for optional fried chicken tenders-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="number" id="fried-chicken-tenders" step="1" value="0" min="0"  name="fried-chicken-tenders">
          <label class="mdl-textfield__label" for="fried-chicken-tenders">How many fried chicken tenders would you like?</label>
        </div>
      <br>
      <br>

    <!--Adding id to submit button to style button-->
        <input type="submit" id="submit" value="Submit Your Order" button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      </form>
      <br>
      <br>

    <!--iframe-->
        <iframe name="results" id="results"></iframe>
      <br>
      <br>
  </body>
</html>