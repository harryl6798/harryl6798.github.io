<?php
echo "<link rel=stylesheet type=text/css href=style.css />";
$pig = $_POST["Pig"];
$cow = $_POST["Cow"];
$chicken = $_POST["Chicken"];
$username = $_POST["Username"];
$password = $_POST["Password"];
$shippingCost=0;
if(isset($_POST['shipping']))
{
//echo "You have selected: ".$_POST['shipping'];
}
print $test;
echo "<h1><b><center>Thanks for your order of animals</b></center></h1> ";
echo "<h3> Your Password is: " .$password."</h3>" ;
echo "<h2> <i>Your Order Receipt: </i></h2><br>";
echo "<table style=width:100%>";
echo "<tr>";
echo  "<th></th>";
echo  "<th> Quantity</th>";
echo  "<th> Cost</th>";
echo  "<th> Sub-Total</th>";
echo "</tr>";
echo "<tr>";
echo  "<td> Pig </td>";
echo  "<td>" . $pig. "</td>";
echo  "<td> $50 </td>";
echo  "<td>" . $pig * 50 . "</td>";
echo "</tr>";
echo "<tr>";
echo  "<td> Cow </td>";
echo  "<td>" . $cow. "</td>";
echo  "<td> $80 </td>";
echo  "<td>" . $cow * 80 . "</td>";
echo "</tr>";
echo "<tr>";
echo  "<td> Chicken </td>";
echo  "<td>" . $chicken. "</td>";
echo  "<td> $30 </td>";
echo  "<td>" . $chicken * 30 . "</td>";

echo "</tr>";
echo "<tr>";
echo  "<td> Shipping </td>";
echo  "<td>" . $_POST['shipping']. "</td>";
if($_POST['shipping'] == 'Seven Day Shipping')
{
  echo  "<td> Free! </td>";
  echo  "<td> Free! </td>";
  $shippingCost=0;
}
else if($_POST['shipping'] == 'Overnight Shipping')
{
  echo  "<td> $50 </td>";
  echo  "<td> $50 </td>";
  $shippingCost=50;
}
else if($_POST['shipping'] == 'Three Day Shipping')
{
  echo  "<td> $5 </td>";
  echo  "<td> $5 </td>";
  $shippingCost=5;
}


echo "<h3><b><u><center>Your Total is: $" . ($pig * 50 + $cow * 80 + $chicken * 30 + $shippingCost).  "</b></center></h3></u>" ;



echo "</table>";



?>