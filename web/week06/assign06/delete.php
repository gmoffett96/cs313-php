<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

h2 {
  text-align: center;
  font-size: 50px;
}
h1 {
  text-align: center;
  color: #BEBDB8;
}
table {
  width: 95%;
}
</style>
</head>
<body>
<form id="mainForm" action="DeleteUser.php" method="POST">
<table>
    <tr>
    <td><p>What is the User ID? (All of this user's information will be removed)</p><td>
        <td><input type="text" name="user_id" placeholder="User ID"></td>
        </tr>
        <tr>
        <td><input type="submit"></td>
    </tr>
    </table>
    <h1><a href="https://safe-brushlands-08493.herokuapp.com/week06/assign06/assign06.php">Return to Main Page</a></h1>
</form>
</body>
</html>
