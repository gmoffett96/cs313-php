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
body {
  background-color: black;
}
table {
  font-family: arial, sans-serif;
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
h3, h4 {
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
<body>
    <h1>Questionnaire<h1>
    <hr>
    <h4>Welcome to the questionnaire.  It is here that you will answer a variety of question about 
    your finances.  This page will not affect your finances in any way, but they should be thought 
    of as questions that help guide in what to spend your money on.  Do not take the questionnaire 
    if you do not like being asked personal and thought provoking questions.  Otherwise, enjoy.</h4>

<table>
    <tr>
    <td><label>What percentage of your money do you spend on entertainment?</label></td>
	<td><input type="text" id="firstQuestion" name="firstQuestion"></input></td>
	<br /><br />
    </tr>
    <tr>
    <td><label>How did you come to have any money obligations? (if you have any)</label></td>
	<td><input type="text" id="secondQuestion" name="secondQuestion"></input></td>
	<br /><br />
    </tr>
    <tr>
    <td><label>How long would you last if your source of income were suddenly cut off?</label></td>
	<td><input type="text" id="thirdQuestion" name="thirdQuestion"></input></td>
	<br /><br />
    </tr>
    <tr>
    <td><label>How long have you been financially on your own?</label></td>
	<td><input type="text" id="fourthQuestion" name="fourthQuestion"></input></td>
	<br /><br />
    </tr>
    <tr>
    <td><label>How do you think that your monthly income could be higher?</label></td>
	<td><input type="text" id="fifthQuestion" name="fifthQuestion"></input></td>
	<br /><br />
    </tr>
    <tr>
    <td><label>How many people do you provide money for?</label></td>
	<td><input type="text" id="sixthQuestion" name="sixthQuestion"></input></td>
	<br /><br />
    </tr>
    <tr>
    <td><label>Are you spending more money than you should be?</label></td>
	<td><input type="text" id="seventhQuestion" name="seventhQuestion"></input></td>
	<br /><br />
    </tr>
    <tr>
    <td><label>Would you get mad if somoene told you how to manage your money?</label></td>
	<td><input type="text" id="eighthQuestion" name="eighthQuestion"></input></td>
	<br /><br />
    </tr>
    <tr>
    <td><label>Are you a full-tithe payer?</label></td>
	<td><input type="text" id="ninthQuestion" name="ninthQuestion"></input></td>
	<br /><br />
    </tr>
    <tr>
    <td><label>How much time do you spend in a week focusing on your financial situation? </label></td>
	<td><input type="text" id="tenthQuestion" name="tenthQuestion"></input></td>
	<br /><br />
    </tr>
</table>

    <h4>Thank you for taking the time to do this questionnaire.  You may return to the main page
    <a href="assign07.php">here</a></h4>
</body>
</html>