<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Inside myfirstprogram.php
function multiply($x, $y) {
    $z = $x * $y;
    return $z;
}
echo "<table>";
echo  "<td>" . "  ". "</td>";
for( $i = 1; $i<101; $i++ ) {
  echo  "<td><b>" . $i. "</b></td>";
}

  for( $i = 1; $i<101; $i++ ) {
    echo "<tr>";
    echo  "<td><b>" . $i. "</td></b>";
    for( $x = 1; $x<101; $x++ )
    {
      echo  "<td>" . multiply($i, $x). "</td>";
      }
      echo "</tr><b>";
    }
echo "</table>";



?>
