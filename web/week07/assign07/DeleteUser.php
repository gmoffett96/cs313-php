<?php


require("dbConnect.php");
$db = get_db();

$userID = $_POST['user_id'];

try 
{
    $query = 'DELETE FROM finances WHERE finances_id = :user_id';

    $statement = $db->prepare($query);

	$statement->bindValue(':user_id', $userID, PDO::PARAM_STR);

    $statement->execute();

    $query = 'DELETE FROM users WHERE user_id = :user_id';

    $statement = $db->prepare($query);

	$statement->bindValue(':user_id', $userID, PDO::PARAM_STR);

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