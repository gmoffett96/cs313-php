<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
        td,
        th {
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
        h3 {
            text-align: center;
            color: #BEBDB8;
        }
        h5 {
            text-align: right;
            color: #BEBDB8;
        }
        th {
            text-align: center;
            font-size: 20px;
        }
        table {
            width: 95%;
        }* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}
  .header-right {
    float: none;
  }
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

    input[type=text], select, textarea {
            width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<div class="header">
  <a href="contact.php" class="logo">The Web Designers</a>
  <div class="header-right">
    <a class="active" href="results.ejs">Home</a>
    <a href="contact.php">Contact</a>
    <a href="aboutUs.php">About</a>
  </div>
</div>

<h3>Contact Us!</h3>

<h4>If you would like to send us a message, you may do so here.  You can also reach us at
    555-555.
</h4>

<div class="container">
  <form action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="iceland">Iceland</option>
      <option value="ireland">Ireland</option>
      <option value="newzealand">New Zealand</option>
      <option value="russia">Russia</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
