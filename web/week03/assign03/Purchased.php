<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
h1 {
    text-align: center;
}

h2 {
  text-align: center;
  font-size: 50px;
}

h4 {
    color: lightgreen;
}

th {
  text-align: center;
  font-size: 20px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  background-color: lightblue;
  padding: 40px;
  font-size: 30px;
}

li {
  display: inline;
}

.right {
  background-color: black;
  color: white;
}
</style>

<h1>Order Complete!<h1>
<h3>Your order has been processed and will be sent to you in 5-7 workdays<h3>
<h3>Your order contains the following items:</h3>

<?php
if (isset($_SESSION["Blanket"])) {
    if ($_SESSION["Blanket"] == 1)
    {
        echo "<h4> You have " . $_SESSION["Blanket"] . " Blanket in your order";
    }
    else
    {
        echo "<h4> You have " . $_SESSION["Blanket"] . " Blankets in your order";
    }
}
    //$numberOfBlankets = $_SESSION["Blanket"];
    //echo "<h1> " . $numberOfBlankets . "</h1>"
?>

<h4><a href="assign03.php">Continue Shopping?</a></h4>

</body>
</html>