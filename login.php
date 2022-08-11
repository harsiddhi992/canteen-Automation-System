
<!doctype html>
<html>
<head>
	<title>login </title>
<link rel="stylesheet" type="text/css" href="login.css">
<style>
	form{
		margin-top: 0%;
	}
.header {
 
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
	<div class="logo">
    	<img src="logo a.png"> 
        <div class="header-right"> 
	
	    <a class="active" href="index.php">Home</a>
	    <a href="services.php" >services</a>
	    <a href="about.php">about</a>
	    <a href="login.php">login</a>
	</div>
</div>


<form  method="post" align="center" action="index.php">
	<h1>LOGIN FORM</h1>

	<input type = "text" name="firstname"id="firstname" placeholder="Username">

<br>
	<input type = "password" name="password" id="pwd"placeholder="Password"><br>

<input type ="submit" name="login" id="sub"value="login" >
<br/>

 <h4>new user.. click here to<input type="button" class="button_active" value="Register" onclick="location.href='signup.php';" /></h4>
</form>

</body>
</html>