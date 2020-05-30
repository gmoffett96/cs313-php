<?php

require("dbConnect.php");
$db = get_db();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$currentAmount = $_POST['currentAmount'];
$currentObligations = $_POST['currentObligations'];
$monthlyIncome = $_POST['monthlyIncome'];
$tithing = $_POST['tithing'];
$entertainment = $_POST['entertainment'];
$bills = $_POST['bills'];
$other = $_POST['other'];

try
{
	$query = 'INSERT INTO users(firstname, lastname, age) 
                VALUES(:firstname, :lastname, :age)';
	$statement = $db->prepare($query);

	$statement->bindValue(':firstname', $firstName, PDO::PARAM_STR);
	$statement->bindValue(':lastname', $lastName, PDO::PARAM_STR);
	$statement->bindValue(':age', $age, PDO::PARAM_INT);

    $statement->execute();
	
	$query = 'INSERT INTO finances(currentamount, currentobligations, monthlyincome, tithing, entertainment, bills, other) 
                VALUES(:currentamount, :currentobligations, :monthlyincome, :tithing, :entertainment, :bills, :other)';
	$statement = $db->prepare($query);

	$statement->bindValue(':currentamount', $currentAmount, PDO::PARAM_INT);
	$statement->bindValue(':currentobligations', $currentObligations, PDO::PARAM_INT);
	$statement->bindValue(':monthlyincome', $monthlyIncome, PDO::PARAM_INT);
	$statement->bindValue(':tithing', $tithing, PDO::PARAM_INT);
	$statement->bindValue(':entertainment', $entertainment, PDO::PARAM_INT);
	$statement->bindValue(':bills', $bills, PDO::PARAM_INT);
	$statement->bindValue(':other', $other, PDO::PARAM_INT);

	$statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("location: assign07.php");
die();

?>