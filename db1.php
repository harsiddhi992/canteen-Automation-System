<?php
   //initilize variable
    $firstname="";
    $lastname="";
    $emailid="";
    $phone="";
    $password="";
    $id=0;
	$edit_state=false;
	//connect to database
    $con = mysqli_connect('localhost','root','','db');

    //if submit button is clicked
     if(isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
         $lastname=$_POST['lastname'];
        $emailid=$_POST['emailid'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];

        $sql="INSERT INTO `info`(firstname,lastname, emailid,phone, password) VALUES ('$firstname','$lastname','$emailid','$phone','$password')";
        $run=mysqli_query($con,$sql);
         header('location:signup.php');
     }
	 
     //retrieve records
     $results=mysqli_query($con,"select * from info"); 
?>