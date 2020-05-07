<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
html {
    background-color: black;
}
    h1 {
        color: lightgreen;
        font-size: 50px;
        text-align: center;
    }
    h2 {
        color: white;
        font-size: 30px;
        text-align: left;
    }
    p {
        text-align: left;
        color: white;
        text: ;
        font-size: 20px;
    }
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h1>Gabriel's Homepage</h1>
<h2>Here is a bit about me:</h2>
<p>Hello, my name is Gabriel Moffett.  I took Web Engineering I about a 
year ago.  However, the class wasn't my favorite and I remember leaving the 
class with a bad taste in my mouth.  I was very reluctant in taking this class
because I did end that class with a C+, and I wasn't sure how well this class
would go.  Since you are supposed to build more on the knowledge you learned
from that class, I didn't feel like I was prepared to take this class.  I spoke
with my friends about this class, and they all said they enjoyed the class a
lot; a lot more than Web Engineering I.  So far the class has been nice, and
I've been enjoying it.  Let's hope that continues.</p>
<hr>
<h2>Some of my favorite games:</h2>
<p>Below are some pictures.  The center picture is of me, and the other 
two pictures, the left and right one, are some of my favorite games:</p>

<div class="row">
  <div class="column">
  <a href="http://www.celestegame.com/">
    <img src="Celeste.png" alt="Celeste" style="width:100%; height: 500px">
    </a>
  </div>
  <div class="column">
    <img src="Me.JPG" alt="Picture of myself" style="width:100%; height: 500px;">
  </div>
  <div class="column">
  <a href="https://hollowknight.com/">
    <img src="HollowKnight.png" alt="Knight" style="width:100%; height: 500px;">
  </a>
  </div>
</div>
<?php
    echo "<p>The pictures you see above are some of my favorite games.
    Some games that I have recently played and am still playing. I have 
    enjoyed them so much.  If there is anyone who
    is looking to try some new games, I would highly recommend these games.  
    One of the reasons I enjoy these games so much is because they are very
    challenging.  I think it's great when you need to make an effort to
    get something, because then it is that much more satifying when you have it.</p>"
    ?>    
</body>
</html>