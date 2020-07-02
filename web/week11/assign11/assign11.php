<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
html {
  background-color: #696969;
  color: #BEBDB8;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: black;
  color: #BEBDB8;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  background-color: black;
  color: #BEBDB8;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  background-color: black;
  color: #BEBDB8;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
  background-color: black;
  color: #BEBDB8;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  background-color: black;
  color: #BEBDB8;
  }
}
</style>
</head>
<body>

<h2>Make a JSON request!</h2>

<div class="container">
  <form action="/results" method="GET">
    <div class="row">
      <div class="col-25">
        <label for="country"></label>
      </div>
      <div class="col-75">
        <button>
      </div>
      <div class="col-25">
        <label>Click the button to get all of the information about the company</label>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
