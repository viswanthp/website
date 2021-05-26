<!DOCTYPE html>
<html>
<head>
<style>
body{background-color:none;}
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

h1{font-size:70px;
padding-top:0px;
padding-right:0px;
padding-bottom:0px;
padding-left:200px;
background-color:none;
color:#333;}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: red}

.dropdown:hover .dropdown-content {
    display: block;
}
.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("img_fjords_wide.jpg");
  height: 150%;
}

.caption {
  position: absolute;
  left: 0;
  top: 10%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: none;
  color: none;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 5px;
}


</style>
</head>
<body>
<h1><i>Movie Ticket Pricing System</i></h1>
<ul>
  
  
  <li><a href="about1.php">About Us</a></li>
  <li><a href="contact1.php">Contact</a></li>
  <li><a href="login.php">Booking</a></li>
  
   

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Images</a>
    <div class="dropdown-content">
      <a href="himages.php">HollyWood</a>
      <a href="cimages.php">BollyWood</a>
      <a href="fimages.php">TollyWood</a>
      <a href="timages.php">KollyWood</a>
    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Trending</a>
    <div class="dropdown-content">
      <a href="hTrending.php">HollyWood</a>
      <a href="bTrending.php">Bollywood</a>
      <a href="tTrending.php">Tollywood</a>
      <a href="kTrending.php">Kollywood</a>
    </div>
  </li>
<li><a href="homepage.php">Home</a></li>
</ul>
<div class="bgimg-1">
  <div class="caption">
<span class="border"><center>WHO ARE WE<center>
We are the team of Developers, Movie lovers, Bloggers and Reasearchers.
We will be uploading and developing various movies images,booking tickets,videos by taking references from various websites.
We are also trying to provide the best information on different movies. </span><br>

<span class="border"><center>OUR PROCESS<center>
Search the whole internet of things to serve with most awesome, different and important movies.</span><br>


<span class="border"><center>OUR APPROACH<center>
We celebrates how our friends inspire us, support us, and help us discover the world when we connect.</span><br>

<span class="border"><center>OUR GOAL<center>
Give people the power to build, create and change the world and bring the world together.</span><br>


</body>
</html>
