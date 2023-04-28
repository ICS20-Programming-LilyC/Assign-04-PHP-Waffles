<?php

  // Determining constants for tax rate, my toppings price, fried chicken prices and breakfast drinks price.
  define("HST", 0.13);
  define("PRICE_WAFFLE_TOPPINGS", 2.00);
  define("PRICE_FRIED_CHICKEN_TENDERS", 2.00);
  define("PRICE_BREAKFAST_DRINKS", 1.00);
  
  // Initializing variable for base cost of waffles, which is determined depending on the size of waffle ordered.
  $baseWaffleCost = 0;
  $numberOfWaffleToppings = 0;
  $numberOfFriedChickenTenders = 0;
  $numberOfBreakfastDrinks = 0;

  // Getting user input for waffle size, number of fried chicken tenders and number of breakfast drinks.
if ( isset($_POST["size"])){
$waffleSize = $_POST["size"];
  }
  
if ( isset($_POST["fried-chicken-tenders"])) {
  $numberOfFriedChickenTenders = intval($_POST["fried-chicken-tenders"]);
  }

if ( isset($_POST["amount-drinks"])) {
  $numberOfBreakfastDrinks = intval($_POST["amount-drinks"]);
  }

  // Using determined value to declare variable for number of toppings chosen
 if(!empty($_POST["checkboxes"])) {
   $numberOfWaffleToppings = count($_POST["checkboxes"]);
 }

  // Determining the cost of the toppings using number of toppings variable and cost of toppings constant
  $costOfToppings = $numberOfWaffleToppings * PRICE_WAFFLE_TOPPINGS;
  
  // Establishing the base cost of a waffle sizes using compound if statements.
  
  // If the waffle size is small, then the user will owe $3.00.
  if ($waffleSize == "small") {
    $baseWaffleCost = 3.00;
  }
    
  // Otherwise, if the waffle size is medium, then the user will owe $4.00.
  else if ($waffleSize == "medium") {
    $baseWaffleCost = 4.00;
  }
    
  // Otherwise, if the waffle size is large, then the user will owe $5.00.
  else if ($waffleSize == "large") {
    $baseWaffleCost = 5.00;
  }

  // Else, the base cost for a waffle is $0.00.
  else {
    $baseWaffleCost = 0.00;
  }
  
  // Establishing the cost of the optional sides, from the number of sides variables and the prices of sides constants.
  $costOfFriedChicken = $numberOfFriedChickenTenders * PRICE_FRIED_CHICKEN_TENDERS;
  $costOfBreakfastDrinks = $numberOfBreakfastDrinks * PRICE_BREAKFAST_DRINKS;
  
  // Calculating the user's subtotal, tax and total for their order
  $subtotal = $baseWaffleCost + $costOfToppings + $costOfFriedChicken + $costOfBreakfastDrinks;
  $taxes = $subtotal * HST;
  $total = $subtotal + $taxes;

  // Displaying the total to the user in the "results" iframe
  echo "Your order is a " . $waffleSize . " waffle. For your waffle, you chose " . $numberOfWaffleToppings . " topping(s). You also decided to add " . $numberOfFriedChickenTenders . " fried chicken tender(s) to your order, along with " . $numberOfBreakfastDrinks . " beverage(s). Your subtotal is $" . number_format($subtotal,2) . ". The calculated amount of taxes added due to the HST rate is $" . number_format($taxes,2) . ". Which makes your total $" . number_format($total,2) . ". Thanks for your purchase!"; 
?>