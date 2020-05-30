<!DOCTYPE html>
<html>
<head>
	<title>New User Entry</title>
<style>
html {
  background-color: black;
  color: #BEBDB8;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: black;
}
h1 {
  text-align: center;
  color: #BEBDB8;
}
 td, th {
  border: 1px solid #dddddd;
  text-align: left;
  background-color: black;
  color: #BEBDB8;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body {
  background-color: black;
}
h2 {
  text-align: center;
  font-size: 50px;
}
h3 {
	text-align: center;
}
th {
  text-align: center;
  font-size: 20px;
}

table {
  width: 95%;
}
</style>
</head>

<body style="background-color:black">

<h1>Create New User</h1>

<h1><a href="https://safe-brushlands-08493.herokuapp.com/week07/assign07/assign07.php">Return to Main Page</a></h1>

<h3>It is here that you may create a new user.  Insert their information and the table will be
updated.  No need to insert a user ID number.  This number will automatically be created.</h3>
<h3>Please insert reasonable amounts of data</h3>

<form id="mainForm" action="add.php" method="POST">
<table>
<tr>
    <td><label for="firstName">First Name: </label></td>
	<td><input type="text" id="firstName" name="firstName" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="lastName">Last Name: </label></td>
	<td><input type="text" id="lastName" name="lastName" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="age">Age: </label></td>
	<td><input type="text" id="age" name="age" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="currentAmount">Current amount of money: </label></td> 
	<td><input type="text" id="currentAmount" name="currentAmount" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="currentObligations">Current amount of money paid through obligations: </label></td> 
	<td><input type="text" id="currentObligations" name="currentObligations" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="monthlyIncome">Monthly Income: </label></td>
	<td><input type="text" id="monthlyIncome" name="monthlyIncome" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="tithing">Tithing: </label> </td>
	<td><input type="text" id="tithing" name="tithing"></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="entertainment">Money used for entertainment: </label> </td>
	<td><input type="text" id="entertainment" name="entertainment"></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="bills">Bills: </label> </td>
	<td><input type="text" id="bills" name="bills"></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="other">All other amounts of Money: </label></td>
	<td><input type="text" id="other" name="other"></input></td>
	<br /><br />
</table>
	<input type="submit">
</form>
</body>
</html>
