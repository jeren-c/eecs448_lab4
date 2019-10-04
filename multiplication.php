<?php
echo "<table>";
echo "<tr>";
for ($x=0; $x<=100; $x++)
{
  echo "<th>" . $x . "</th>";
}
echo "</tr>";


for ($y=1; $y<=100; $y++)
{
    echo "<tr>";
    echo "<th>" . $y . "</th>";
    for ($z=1; $z<=100; $z++)
    {
      echo "<td>" . $z * $y . "</td>";
    }
    echo "</tr>";
}


echo "</table>";


?>
