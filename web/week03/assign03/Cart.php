<?php 
    session_start(); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
html {
  background-color: black;
  color: white;
  text-align: center;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
h2 {
  text-align: center;
  font-size: 50px;
}
th {
  text-align: center;
  font-size: 20px;
}
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
</style>
</head>
<body>
    <h1>Cart</h1>

<?php

$numberOfBlankets = $_SESSION["Blanket"];

$total = 0;

if (isset($_SESSION["Blanket"])) {
    $total += $numberOfBlankets * 30.00;
}

if (isset($_POST["Car"])) {
    $_SESSION["Car"] = $_POST["Car"];
    $total += 18000.00;
}

if (isset($_POST["ExercisingMat"])) {
    $_SESSION["ExercisingMat"] = $_POST["ExercisingMat"];
    $total += 25.00;
}

if (isset($_POST["Hose"])) {
    $_SESSION["Hose"] = $_POST["Hose"];
    $total += 35.00;
}

if (isset($_POST["House"])) {
    $_SESSION["House"] = $_POST["House"];
    $total += 300000.00;
}

if (isset($_POST["MacKeyboard"])) {
    $_SESSION["MacKeyboard"] = $_POST["MacKeyboard"];
    $total += 40.00;
}

if (isset($_POST["Pencil"])) {
    $_SESSION["Pencil"] = $_POST["Pencil"];
    $total += 0.50;
}

if (isset($_POST["Venus"])) {
    $_SESSION["Venus"] = $_POST["Venus"];
    $total += 5000000000.00;
}

$_SESSION["total"] = $total;

echo "<h1>The total number of blankets is " . $numberOfBlankets . "</h1>";
echo "<h1>Your total is " . $total . "$</h1>";

?>
<form action="Purchase.php">
<input type="submit" value="Continue to checkout" class="btn">
</form>
</body>
</html>