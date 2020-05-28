<?php


require("dbConnect.php");
$db = get_db();

$userID = $_POST['user_id'];

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
    $query = 'UPDATE finances SET currentamount = :currentamount, currentobligations = :currentobligations, 
    monthlyincome = :monthlyincome, tithing = :tithing, entertainment = :entertainment, bills = :bills,
    other = :other WHERE finances_id = :user_id';

    $statement = $db->prepare($query);

    $statement->bindValue(':user_id', $userID, PDO::PARAM_INT);
    $statement->bindValue(':currentamount', $currentAmount, PDO::PARAM_INT);
	$statement->bindValue(':currentobligations', $currentObligations, PDO::PARAM_INT);
	$statement->bindValue(':monthlyincome', $monthlyIncome, PDO::PARAM_INT);
	$statement->bindValue(':tithing', $tithing, PDO::PARAM_INT);
	$statement->bindValue(':entertainment', $entertainment, PDO::PARAM_INT);
	$statement->bindValue(':bills', $bills, PDO::PARAM_INT);
	$statement->bindValue(':other', $other, PDO::PARAM_INT);

    $statement->execute();

    $query = 'UPDATE users SET firstname = :firstname, lastname = :lastname, age = :age WHERE user_id = :user_id';

    $statement = $db->prepare($query);

    $statement->bindValue(':user_id', $userID, PDO::PARAM_INT);
    $statement->bindValue(':firstname', $firstName, PDO::PARAM_STR);
	$statement->bindValue(':lastname', $lastName, PDO::PARAM_STR);
    $statement->bindValue(':age', $age, PDO::PARAM_INT);
    
    $statement->execute();
}
catch (Exception $ex)
{
    echo "Error: Invalid credentials";
    sleep(5);
    header("location: assign06.php");
}

header("location: assign06.php");
die();
?>