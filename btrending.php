<!DOCTYPE html>
<html>
<head>
<style>
body{background-color:none;}
h1{font-size:70px;
padding-top:0px;
padding-right:0px;
padding-bottom:0px;
padding-left:200px;
background-color:none;}
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
iframe{padding:10px 0 20px 400px}
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
      <a href="bimages.php">Bollywood</a>
      <a href="timages.php">Tollywood</a>
      <a href="kimages.php">Kollywood</a>
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
<iframe width="700" height="500" src="https://www.youtube.com/embed/u5r77-OQwa8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<iframe width="700" height="500" src="https://www.youtube.com/embed/8HA1HRufYso" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<iframe width="700" height="500" src="https://www.youtube.com/embed/GODAlxW5Pes" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<iframe width="700" height="500" src="https://www.youtube.com/embed/rtGIq9Xjnrw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<iframe width="700" height="500" src="https://www.youtube.com/embed/BY-0SbSF2dE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</body>
</html>
