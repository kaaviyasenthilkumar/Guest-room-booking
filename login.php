
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Room Booking System</title>
<style>
div{
 position:absolute;
 }
div#title
{
 width:100%;
 height:7%;
 top : 0px;
 left: 0px;
 background-color:#111;
 color:white;
 font-size:25px;
 font-family:Times New Roman;
 text-align:center;
}
div#log
{
 top:100px;
 left:400px;
 width:500px;
 height:500px;
 border:2px solid black;
 border-radius:25px;
 background-color:grey;
}
div#details
{
 font-family:Calibri;
 top:110px;
 left:160px;
 width:400px;
 height:250px;
 font-size:20px;
 
}
div#sign{
  font-family:Calibri;
  width:200px;
  height:150px;
  font-size:50px;
  left:200px;
  
}
div#login{
  font-family:Calibri;
  width:200px;
  height:150px;
  font-size:50px;
  left:280px;
  
}
input {
  border: 2px solid grey;
  border-radius: 4px;
}
input[type=submit]
{
  border: 2px solid black;
  border-radius: 4px;
  width:100px;
  height:40px;
  background-color:black;
  color:white;
}
input[type=button]
{
  border: 2px solid black;
  border-radius: 4px;
  width:100px;
  height:40px;
  background-color:black;
  color:white;
}
input[type=submit]:hover
{
 cursor:pointer;
 }
 input[type=button]:hover
{
 cursor:pointer;
 }
input[type=text]:focus {
  background-color: grey;
}
/* Style the sidebar - fixed full height */
.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 7%;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

/* Style sidebar links */
.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

/* Style links on mouse-over */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Style the main content */
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

/* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.sidebar a.active {
  background-color: #66FFB2;
  color: black;
}
tr:nth-child(even) {
  background-color: #E0E0E0;
}
tr:nth-child(odd) {
  background-color: #C0C0C0;
}
table, th, td {
  height: 40px;
  border: 1px solid black;
  border-collapse: collapse;
}
th{
  background-color: #111;
  color:white;
}
td.numcenter{
text-align:center;
}
</style>
<script>
function emptyValidation() {
      var formFieldname = document.forms["Form1"]["fname"].value;
	  var formFieldpassword = document.forms["Form1"]["Fpassword"].value;
      if (formFieldname == "" || formFieldpassword == "") 
	  {
         alert("All information must be filled out");
         return false;
      }
	  
}
</script>
</head>
<body style="background-color:#606060">

<!--<div>
<img src="firstlibrary.jpeg" style="width:1250px;height:600px" alt="library"/></div>
<div id="title"> Employee Management </div>-->

<!-- Load an icon library 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

<div id="log">
<div id="sign">Login</div>

<div id="details">
<form name="Form1" onsubmit="return emptyValidation();"  action="loginstore.php" method="post">
<label for="fname">Username			: </label></br>
<input type="text" id="fname" name="fname"><br/>
<label for="Fpassword">Password			: </label></br>
<input type="password" id="Fpassword" name="Fpassword"><br/>
<pre>

</pre>
<p style="left:100px">New user? Sign-in</p>
<a href="signin.php"><input type="button"  value="Sign-in" ></a>
<input type="submit" value="Login" name="submit"> 
</form>
</div>
</div>




</body>
