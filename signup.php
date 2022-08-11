<?php include('db1.php');
    //fetch the record to be updated
	if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$edit_state= true;
	$rec= mysqli_query($con,"select * from info where id=$id");
	$record= mysqli_fetch_array($rec);
	$firstname=$record['firstname'];
	$lastname=$record['lastname'];
	$emailid=$record['emailid'];
	$phone=$record['phone'];
	$password=$record['password'];
	$id=$record['id'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" type="text/css" href="login.css">
<style>
	form{
		margin-top: 0%;
	}
.header {
 
  padding: 10px 10px;

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

	<div class="header">
  <img src="logo a.png">
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
	    <a href="services.php" >services</a>
	    <a href="about.php">about</a>
	    <a href="login.php">login</a>  </div>
</div>

<form method="post" align="center" id="rows">
<h1>SIGNUP FORM</h1>
<input type="hidden" name="id" value="<?php echo $id; ?>" >
<div class="form">
	<body>
<input type="text" name="firstname" id="firstname" value="<?php echo $firstname;?>" placeholder="Firstname"required><br>
<input type = "text" name="lastname"id="lastname" value="<?php echo $lastname;?>"  placeholder="Lastname" required><br>
<input type="text" name="emailid"id="email" value="<?php echo $emailid;?>" placeholder="emailid" required/><br/>
<input type = "tel" pattern="[0-9]{10}" id="tel" name="phone" value="<?php echo $phone;?>"  placeholder="Mobile no" required><br>
<input type="password" name="password" id="pwd"value="<?php echo $password;?>" placeholder="Password" required/><br />
<input type="text" name="gender" list="gender" placeholder="Choose Your Gender:">
    <datalist id="gender">
      <option value="Male">
      <option value="Female">
    </datalist>
<br/>
<?php if($edit_state==false):?>
<input type="submit" name="submit" value="submit" id="sub" />
<?php else:?>
<?php endif ?>
</div>
</body>
</form>
		   

</html>
