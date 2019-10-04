<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";

$choco = $_POST["choco"];
$vanilla = $_POST["vanilla"];
$peanut = $_POST["peanut"];
$mint = $_POST["mint"];
$shipping = $_POST["shipping"];
$shipCost = 0;

$subtotal = ($choco * 15) + ($vanilla * 20) + ($peanut * 30) + ($mint * 32);
if ($shipping == "Overnight")
{
    $subtotal = $subtotal + 50;
    $shipCost = 50;
}
else if ($shipping == "3-day")
{
    $subtotal = $subtotal + 5;
    $shipCost = 5;
}

echo "<br>Thank you for your purchase. Here is a copy of your receipt<br>";

echo "<table>";
echo "<tr>";
echo "<th></th> <th>Quantity</th> <th>Cost</th> <th>Subtotal</th>";
echo "</tr><tr>";
echo "<th>Chocolate</th>";
echo "<td>" . $choco . "</td><td>15</td>" . "<td>" . $choco*15 . "</td>";
echo "</tr><tr><th>Vanilla</th>";
echo "<td>" . $vanilla . "</td><td>20</td>" . "<td>" . $vanilla*20 . "</td>";
echo "</tr><tr><th>Peanut</th>";
echo "<td>" . $peanut . "</td><td>30</td>" . "<td>" . $peanut*30 . "</td>";
echo "</tr><tr><th>Mint</th>";
echo "<td>" . $mint . "</td><td>32</td>" . "<td>" . $mint*32 . "</td>";
echo "</tr><tr><th>Shipping</th><td colspan = 2>" . $shipping . "</td><td>" . $shipCost . "</td></tr>";
echo "<tr><th colspan=3>Total cost</th> <td>" . $subtotal . "</tr>";
echo "</table>";



?>