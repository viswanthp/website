<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
body {font-family: Arial, Helvetica, sans-serif;}

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
    background-color: none;
    padding: 300px;
}
.social{
float:right;
width:20%;
margin-right:80px;
margin-right:-48px;
margin-top:-22px;
}
.social img{
width:40px;
padding-right:1px;
border-radius:40px;}

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
      <a href="cimages.php">Bollywood</a>
      <a href="fimages.php">Tollywood</a>
      <a href="timages.php">Kollywood</a>
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



<div class="container">
  <form action="/action_page.php">
<h3><center>Contact Form</center></h3>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="india">India</option>
      <option value="australia">Australia</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="button" onclick="check(this.form)"  value="Submit">
  </form>
</div>

<div class="social">
<a href="https://www.facebook.com/"><img src="images/facebook.png" alt="facebook"></a>
<a href="https://twitter.com/"><img src="images/twitter.png" alt="twitter"></a>
<a href="https://www.whatsapp.com/"><img src="images/whatsapp.png" alt="whatsapp"></a>
<a href="https://www.linkedin.com/"><img src="images/linkedin.png" alt="linked-in"></a></div>
<script>
function check(form)
{
if(form.firstname.value=="none"&&form.lastname.value=="none"&&form.subject.value=="none")
alert("please fill the details correctly");
else
alert("Thanks for contacting us");
}
</script>
</body>
</html>
