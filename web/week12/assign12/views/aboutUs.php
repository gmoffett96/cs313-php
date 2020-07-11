<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 95%;
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
body {
    background-color: black;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
    box-sizing: border-box;
    background-color: black;
    color: #BEBDB8;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
* {box-sizing: border-box;}

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
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="results.ejs" class="logo">The Web Designers</a>
  <div class="header-right">
    <a class="active" href="results.ejs">Home</a>
    <a href="contact.php">Contact</a>
    <a href="aboutUs.php">About</a>
  </div>
</div>

<div class="about-section">
  <h1>About Us</h1>
  <p>At this company we love to help other companies design their websites</p>
  <p>If you are interested in making your company website look better, please contact us 
    with the information below
  </p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="johnsmith.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Smith</h2>
        <p class="title">CEO & Founder</p>
        <p>Hello, my name is John Smith and I am leader of this company</p>
        <p>johnsmith@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="georgesmith.jpg" alt="George" style="width:100%">
      <div class="container">
        <h2>George Smith</h2>
        <p class="title">Art Director</p>
        <p>It is good to meet you.  I am george and I love to create the art for our websites</p>
        <p>georgesmith@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="lucyDenis.jpg" alt="Lucy" style="width:100%">
      <div class="container">
        <h2>Lucy Denis</h2>
        <p class="title">Designer</p>
        <p>My name of Lucy Denis.  I really enjoy designing our websites and helping our
            customers feel welcome.
        </p>
        <p>lucydenis@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
