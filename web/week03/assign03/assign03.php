<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
html {
  background-color: black;
  color: white;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: black;
}

 td, th {
  border: 1px solid #dddddd;
  text-align: left;
  background-color: black;
  color: white;
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
 
 img {
   width: 100%;
   height: 100%;
 }

.right {
  background-color: black;
  color: white;
}

table {
  width: 95%;
}
</style>

<script>
function myFunction() {
  alert("I am an alert box!");
}
</script>
<body>

<ul>
  <li><a href="Cart.php">View Cart</a></li>
</ul>

<h2>List of Items:</h2>

<table>
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Item description</th>
  </tr>
  <form action="" method="post">
  <tr>
    <td class="right"> <img src="Blanket.jpg" alt="Blanket"> </td>
    <td class="right">$30.00</td>
    <td class="right">Blanket</td>
    <td class="right"> <input type="submit" value="30.00" name="Blanket">
    Add to cart</input> </td>
    <?php
    (int) $_SESSION["Blanket"] = 1;
    if ($_SESSION["Blanket"] >= 1)
    {
      $_SESSION["Blanket"] += 1;
      echo "line 88";
    }
    else if (isset($_POST["Blanket"]) && !isset($_SESSION["Blanket"])) 
    {
      $_SESSION["Blanket"] = 1;
    }
    echo $_SESSION["Blanket"];
    ?>
  </tr>
  </form>
  <tr>
    <td><img src="Car.jpg" alt="Car"></td>
    <td>$18,000.00</td>
    <td>Car</td>
    <td> <button type="button" value="18000.00" name="Car" onclick()="myFunction()">
    Add to cart</button> </td>
  </tr>
  <tr>
    <td class="right"><img src="ExercisingMat.jpg" alt="Exercising Mat"></td>
    <td class="right">$25.00</td>
    <td class="right">Exercising Mat</td>
    <td class="right"> <button type="button" value="25.00" name="ExercisingMat">
    Add to cart</button> </td>
  </tr>
  <tr>
    <td><img src="Hose.jpg" alt="Waterhose" style="height: 100%;
    width: 100%;"></td>
    <td>$35.00</td>
    <td>Hose</td>
    <td> <button type="button" value="35.00" name="Hose">
    Add to cart</button> </td>
  </tr>
  <tr>
    <td class="right"><img src="House.jpg" alt="House"></td>
    <td class="right">$300,000.00</td>
    <td class="right">House</td>
    <td class="right"> <button type="button" value="300000.00" name="House">
    Add to cart</button> </td>
  </tr>
  <tr>
    <td><img src="MacKeyboard.jpg" alt="Mac Keyboard"></td>
    <td>$40.00</td>
    <td>Mac Keyboard</td>
    <td> <button type="button" value="40.00" name="MacKeyboard">
    Add to cart</button> </td>
  </tr>
  <tr>
    <td class="right"><img src="Pencil.jpg" alt="Pencil"></td>
    <td class="right">$0.50</td>
    <td class="right">Pencil</td>
    <td class="right"> <button type="button" value="0.50" name="Pencil">
    Add to cart</button> </td>
  </tr>
  <tr>
    <td><img src="Venus.jpg" alt="Venus"></td>
    <td>$5,000,000,000.00</td>
    <td>Venus</td>
    <td> <button type="button" value="5000000000.00" name="Venus">
    Add to cart</button> </td>
  </tr>
</table>
</form>
</body>
</html>