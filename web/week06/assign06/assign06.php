<?php
// $searchTerm = filter_var(INPUT_GET, 'search', FILTER_SANITIZE_STRING);\
require "dbConnect.php";
$db = get_db();

if (!isset($searchTerm)) {
  $stmt = $db->prepare('SELECT * FROM users ORDER BY user_id');
} else {
  $stmt = $db->prepare('SELECT * FROM users ORDER BY user_id');
  $stmt->bindValue(':searchTerm', $searchTerm, PDO::PARAM_INT);
}

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt->closeCursor();

if (!isset($searchTerm)) {
    $stmt = $db->prepare('SELECT * FROM finances ORDER BY finances_id');
  } else {
    $stmt = $db->prepare('SELECT * FROM finances ORDER BY finances_id');
    $stmt->bindValue(':searchTerm', $searchTerm, PDO::PARAM_INT);
  }

$stmt->execute();

$Data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt->closeCursor();
?>

<style>

html {
  background-color: black;
  color: #BEBDB8;
}
body {
  background-color: black;
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

tr:nth-child(even) {
  background-color: #dddddd;
}
h1 {
  text-align: center;
  color: #BEBDB8;
}
h2 {
  text-align: center;
  font-size: 50px;
}

th {
  text-align: center;
  font-size: 20px;
}

table {
  width: 95%;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finances Front Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>
<body style="background-color:black;">
    <h1>List of people's accounts and their money</h1>

    <table>
    <tr>
    <td><h2><a href="https://safe-brushlands-08493.herokuapp.com/week06/assign06/insert.php">Add New User</a></h2></td>
    <td><h2><a href="https://safe-brushlands-08493.herokuapp.com/week06/assign06/delete.php">Delete User</a></h2></td>
    <td><h2><a href="https://safe-brushlands-08493.herokuapp.com/week06/assign06/modify.php">Modify User</a></h2></td>
    </tr>
    </table>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row):?>
                <tr>
              <td><strong><?= $row['user_id']?></strong></td>
              <td><strong><?= $row['firstname']?></strong></td>
              <td><strong><?= $row['lastname']?></strong></td>
              <td><?= $row['age']?></td>
            </tr> 
            <?php endforeach; ?>
        </tbody>
        </table>
        <hr>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">Current amount</th>
            <th scope="col">Current obligations</th>
            <th scope="col">Monthly income</th>
            <th scope="col">Tithing</th>
            <th scope="col">Entertainment</th>
            <th scope="col">Bills</th>
            <th scope="col">Other</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($Data as $row):?>
                <tr>
              <td><strong><?= $row['finances_id']?></strong></td>
              <td><strong><?= $row['currentamount']?></strong></td>
              <td><strong><?= $row['currentobligations']?></strong></td>
              <td><strong><?= $row['monthlyincome']?></td>
              <td><strong><?= $row['tithing']?></td>
              <td><strong><?= $row['entertainment']?></td>
              <td><strong><?= $row['bills']?></td>
              <td><strong><?= $row['other']?></td>
            </tr> 
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>