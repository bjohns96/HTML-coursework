<?php
session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">


<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body background="security1.png">
<!-- Navigation -->
<nav>
  <ul class="w3-navbar w3-black">
    <li><a href="sessionlogout.php">Home</a></li>
    <li><a href="insertcourse2.html">Insert Course</a></li>
    <li><a href="updatecourse3.html">Edit Course</a></li>
    <li><a href="https://www.quickmednotes.com/rowor/displaycoursesoffered4.php">Display Course</a></li>
    <li><a href="searchcourse3.html">Search Course</a></li>
    <li><a href="deletecourse5.html">Delete Course</a></li>
    <li><a href="javascript:void(0)">Contact Us</a></li>
    <li><a href="sessionlogout.php">logout</a></li>
  </ul>
</nav>

<! Content Starts>
<div class="imgcontainer">
    
  </div>
<center><h2> Welcome to the Registration System</h2>
<h2>CSCI 4212 Course menu Form, please select from menu above</h2>


</center>
<br>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
  (c) Copyright CSCI4211 Project 2021
  </p>
</footer>

</body>
</html>
