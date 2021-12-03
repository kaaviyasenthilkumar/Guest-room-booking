<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Room Booking System</title>
<link rel="stylesheet" href="style.css"/>
<style>
input[type=email]{
	width:80%;
}
input[type=password]{
	width:80%;
}
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
 left:100px;
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

</style>
<script>
function emptyValidation() {
      var formFieldname = document.forms["Form1"]["fname"].value;
	  var formFieldpassword = document.forms["Form1"]["Fpassword"].value;
	  var formFieldphone = document.forms["Form1"]["Fphone"].value;
	  var formFieldemail = document.forms["Form1"]["Femail"].value;
      if (formFieldname == "" || formFieldpassword == "" || formFieldphone == "" || formFieldemail == "") 
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
<div id="sign">Sign In</div>
<div id="details">
<form name="Form1" onsubmit="return emptyValidation();" action="signinstore.php" method="post">
<label for="fname">First name			: </label></br>
<input type="text" id="fname" name="fname"><br/>
<label for="Fphone">Phone number			: </label></br>
<input type="text" id="Fphone" name="Fphone"><br/>
<label for="Femail">E-mail			: </label></br>
<input type="email" id="Femail" name="Femail"><br/>
<label for="Fpassword">Password			: </label></br>
<input type="password" id="Fpassword" name="Fpassword"><br/>
<pre>

</pre>

<a href="login.php"><input type="button" value="Back"></a>
<input type="submit" value="Sign-in" name="submit">
</form>
</div>
</div>




</body>