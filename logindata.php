<?php
$conn=mysqli_connect('localhost' ,'root','','test');
 if($conn->connect_error){
	 die ("connection failed : ".$conn->connect_error);
	 	  }
	  else
	  {  
  $username=$_POST['username'];
  $password=$_POST['password'];
   $sql="select username from registration ";
	  $result=mysqli_query($conn,$sql);
	  $row=mysqli_fetch_assoc($result);
      $user= implode($row);
 $sql="select password from registration ";
	  $result=mysqli_query($conn,$sql);
	  $row=mysqli_fetch_assoc($result);
      $pass= implode($row);
	  if($username==$user&& $password==$pass)
	  {
  $stmt=$conn->prepare("insert into logindata(username,password)values(?,?)");
  $stmt->bind_param("ss",$username,$password);
$stmt->execute();
  $stmt->close();
 $conn->close();
  $a="a";
	  }
	  
	  else{
	  echo "no match";}
	  }if($a=='a')
	  {   echo "success";
		  include "my.html";
  
	  }
	  else
	  {
		  "register.html";
	  }
	  
?>