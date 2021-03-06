<!DOCTYPE html>
<html>
<head>
	<title>Topic Entry</title>

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

 td, th {
  border: 1px solid #dddddd;
  text-align: left;
  background-color: black;
  color: #BEBDB8;
  padding: 8px;
}
h1 {
  text-align: center;
  color: #BEBDB8;
}
h2 {
  text-align: center;
  font-size: 50px;
}
h3 {
	text-align: center;
}
table {
  width: 95%;
}
</style>
</head>

<body>
<div>

<h1>Modify User Information</h1>

<h1><a href="https://safe-brushlands-08493.herokuapp.com/week07/assign07/assign07.php">Return to Main Page</a></h1>

<h3>It is here that you may change a users information.  Insert the correct user ID number
and then submit all of the new information for the information to be changed.  You will
automatically be taken back to the main page after pressing the 'submit' button.</h3>

<form id="mainForm" action="modifyUser.php" method="POST">
<table>
<tr>
    <td><label for="user_id">What is the user's ID number?</label></td>
	<td><input type="text" id="user_id" name="user_id" required></input></td>
	<br /><br />
</tr>
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
	<td><label for="age">Age: </label> </td>
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
	<td><label for="monthlyIncome">Monthly Income: </label> </td>
	<td><input type="text" id="monthlyIncome" name="monthlyIncome" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="tithing">Tithing: </label> </td>
	<td><input type="text" id="tithing" name="tithing" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="entertainment">Money used for entertainment: </label></td> 
	<td><input type="text" id="entertainment" name="entertainment" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="bills">Bills: </label></td> 
	<td><input type="text" id="bills" name="bills" required></input></td>
	<br /><br />
</tr>
<tr>
	<td><label for="other">All other amounts of Money: </label></td> 
	<td><input type="text" id="other" name="other" required></input></td>
	<br /><br />
</tr>
<tr>
    <td><input type="submit"></td>
</tr>
</table>
</form>
