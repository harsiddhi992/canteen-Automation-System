<?php include('db.php');
    //fetch the record to be updated
	if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$edit_state= true;
	$rec= mysqli_query($con,"select * from info where id=$id");
	$record= mysqli_fetch_array($rec);
	$firstname=$record['firstname'];
	$emailid=$record['emailid'];
	$password=$record['password'];
	$id=$record['id'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<form method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>" >
<div class="form">
First Name:-<input type="text" name="firstname" value="<?php echo $firstname;?>" placeholder="Firstname"><br>
E-Mail ID:-<input type="text" name="emailid" value="<?php echo $emailid;?>" placeholder="emailid" required/><br/>
Password:-<input type="password" name="password" value="<?php echo $password;?>" placeholder="Password" required/><br />
<?php if($edit_state==false):?>
<input type="submit" name="submit" value="submit" />
<?php else:?>
<input type="submit" name="update" value="update" />
<?php endif ?>
</div>
</form>
<body>
   <table>
      <thead>
         <tr>
	       <th> First Name </th>
		   <th> E-mail ID </th>
		   <th> Password </th>
	     </tr>
	  </thead>
	  
	  <tbody>
	      <?php while($row= mysqli_fetch_array($results)){?>
		    <tr>
			    <td><?php echo $row['firstname'];?></td>
				<td><?php echo $row['emailid'];?></td>
				<td><?php echo $row['password'];?></td>
				<td>
				    <a href="form.php?edit=<?php echo $row['id'];?>"> EDIT</a>
				</td>
	  	        <td>
				    <a href="db.php?del=<?php echo $row['id'];?>"> DELETE</a>
				</td>
           </tr>
		   <?php }?>
	  </tbody>
   
   
    </table>	 
	   
</body>

</html>
