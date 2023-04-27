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

<!--Header-->
<?php echo "<h1>Waffle Orders with PHP</h1>"; ?>

<!--Text-->
<?php echo "<p>Welcome to our waffles breakfast company. With this webpage you can place an order for a waffles with your choice of topping and an optional items. We have a variety of different sizes and toppings so that you can customize your own waffle. In addition with optional breakfast drinks and fried chicken tenders. We hope you enjoy your meal!</p>" ?>

<!--Image-->
    <center>
      <img src="./images/classicWaffles.jpeg" alt="Waffles" width="400" length="400">
    </center>
    <br>
    <br>

    <!--Table for prices and user order (side-by-side)-->
   <center>
     <?php "<h4>Menu:</h4>" ?>
   </center>

    <!--Table of options including prices-->
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
   <form action="./calculations.php">
     <php echo <h4>Please indicate the size of waffle you would like:</h4>

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
       <input type="checkbox" id="original" name="original"  class="mdl-checkbox__input">
     </label>
     <br>
     <br>

 <!--Second checkbox - Cinnamon & sugar-->
     <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
       <span class="mdl-checkbox__label">Cinnamon & sugar</span>
       <input type="checkbox" id="cinnamon-and-sugar" name="cinnamon and sugar"  class="mdl-checkbox__input">
     </label>
     <br>
     <br>

  <!--Third checkbox - Chocolate or nutella drizzle-->
     <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
       <span class="mdl-checkbox__label">Chocolate or nutella drizzle</span>
       <input type="checkbox" id="chocolate-or-nutella-drizzle" name="chocolate or nutella drizzle"  class="mdl-checkbox__input">
     </label>
     <br>
     <br>

  <!--Fourth checkbox - Whipped cream and fruit-->
     <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
       <span class="mdl-checkbox__label">Whipped cream and fruit</span>
       <input type="checkbox" id="whipped-cream-and-fruit" name="whipped cream and fruit"  class="mdl-checkbox__input">
     </label>
      <br>
      <br>

  <!--Fith checkbox - Fried Eggs and bacon-->
     <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
       <span class="mdl-checkbox__label">Fried Eggs and bacon</span>
       <input type="checkbox" id="fried-eggs-and-bacon" name="fried eggs and bacon"  class="mdl-checkbox__input">
     </label>
      <br>
      <br>

<!--Optional iteams-->
     <h4>If you want to order any optional iteams, please select them below:</h4>
     <h6>For our optional items we have, a variety of breakfast drinks, as well as our homemade fried chicken tenders.</h6>

<!--Chicken tenders chexboxes-->
     <p>Would you like chicken tenders with your meal? If not, select the "no" option and input "0" for the amount of chicken tenders required for your order.</p>
     
  <!--MDL radio button (Yes)-->
     <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
       <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
       <span class="mdl-radio__label">Yes</span>
     </label>

  <!--MDL radio button (Off)-->
     <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
       <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
       <span class="mdl-radio__label">No</span>
     </label>
     <br>
     <br>
     <br>

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

<!--Amonut of user's optional iteams in their order-->
     <h4>If you're ordering any of our optional items, then please indicate below the amount of drinks and/or  tenders you would like in your order:</h4>

  <!--Input for optional breakfast drink-->
        <label for="amount-drinks">How many drinks would you like?</label>
        <input type="number" step="1" min="0" id="amount-drinks" placeholder="Number of drinks...">
     <br>
     <br>

  <!--Input for optional fried chicken tenders-->
        <label for="fried-chicken-tenders">How many fried chicken tenders would you like?</label>
        <input type="number" step="1" min="0" id="fried-chicken-tenders" placeholder=" Number of fried chicken tenders...">
     <br>
     <br>

  <!--Adding id to submit button to style button-->
     <input type="submit" id="sumbit" value="Submit Your Order" button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
     </form>
     <br>
     <br>

  <!--iframe-->
       <iframe name="results" id="results"></iframe>
    <br>
    <br>
     </php>