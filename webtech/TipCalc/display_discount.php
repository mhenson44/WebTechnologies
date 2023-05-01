<?php
   // get the data from the form
   $bill_total = $_POST['bill_total'];
   $tip_percent = $_POST['tip_percent'];
   
   // calculate the tip
   $tip = $bill_total * $tip_percent * .01;
   $tip_price = $bill_total - $tip;

   // apply currency formatting to the dollar and percent amounts
   $tip_percent_formatted = number_format
                                    ($tip_percent, 1)."%";
   $tip_formatted = "$".number_format($tip, 2);
   $tip_price_formatted = "$".number_format($tip_price,2);

?>

<!DOCTYPE html>
<html>
   
<head>
   <title>Tip Calculator</title>
   <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
   <main>
      <h1>Tip Calculator</h1>
      
      <label>Tip Percent:</label>
      <span><?php echo $tip_percent_formatted; ?></span><br>   
      
      <label>Tip Amount:</label>
      <span><?php echo $tip_formatted; ?></span><br>

      <label>Bill Amount:</label>
      <span><?php echo $tip_price_formatted; ?></span><br>
   </main>
</body>
</html>   
