<?php
//access the global array called $_POST to get the values from the text fields
$q1 = $_POST["noah"];
$q2 = $_POST["varun"];
$q3 = $_POST["alex"];
$q4 = $_POST["Justin"];
$q5 = $_POST["Harry"];
$total = 0;
echo "<b>Question 1:</b>";
echo "<br>";
echo "You Answered: " . $q1 . "<br>";
echo "Correct Answer: " . "Noah is famous for his ... Ability to Make Bread" . "<br>";
echo "<b>Question 2:</b>";
echo "<br>";
echo "You Answered: " . $q2 . "<br>";
echo "Correct Answer: " . "Varun is from The Woods!" . "<br>";
echo "<b>Question 3:</b>";
echo "<br>";
echo "You Answered: " . $q3 . "<br>";
echo "Correct Answer: " . "After conducting intense surveys... we have concluded that Alex has over 9000!! interested parties" . "<br>";
echo "<b>Question 4:</b>";
echo "<br>";
echo "You Answered: " . $q4 . "<br>";
echo "Correct Answer: " . "Justin is actually missing his planta" . "<br>";
echo "<b>Question 5:</b>";
echo "<br>";
echo "You Answered: " . $q5 . "<br>";
echo "Correct Answer: " . "Varun Chadha3 is the best Varun Impersonator" . "<br>";

if($q1 == "Making Bread")
{
  $total+=20;
}
if($q2 == "The Woods")
{
  $total+=20;
}
if($q3 == "Over 9000!!")
{
  $total+=20;
}
if($q4 == "His Planta")
{
  $total+=20;
}
if($q5 == "Varun Chadha3")
{
  $total+=20;
}
echo "<br><b>Your Score total is " .$total . "<br>"; 
?>
