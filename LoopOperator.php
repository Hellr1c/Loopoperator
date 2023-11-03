<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Integer Operations</title>
  </head>
  <body>
    <form method="post" action="">
         <input type="text" name="input1" placeholder="Enter a First Number"><br><br>
         <input type="text" name="input2" placeholder="Enter a Second Number"><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
  </body>
</html>

<?php

if (isset($_POST['submit'])) {
  $input1 = intval($_POST['input1']);
  $input2 = intval($_POST['input2']);

  $product = 0;
  for ($i = 0; $i < $input2; $i++) {
    $product += $input1;
  }

  $quotient = 0;
  while ($input1 >= $input2) {
    $input1 -= $input2;
    $quotient++;
  }

  $remainder = $input1;

  echo "<br>";
  echo "Product: $product";
  echo "<br>";
  echo "Integer Quotient: $quotient";
  echo "<br>";
  echo "Integer Remainder: $remainder";
}


 ?>
