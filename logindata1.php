<?php
$a='';
$conn=mysqli_connect('localhost' ,'root','','test');
 if($conn->connect_error){
	 die ("connection failed : ".$conn->connect_error);
	 	  }
	  else
	  {  
  $username=$_POST['username'];
  $password=$_POST['password'];
   echo "hello";
   $sql="select username from registration ";
	  $result=mysqli_query($conn,$sql);
	  $num=mysqli_num_rows($result);
	  if($num>0){
		  while($row=mysqli_fetch_assoc($result)){
      $user= implode($row);
	  
		  }
	  if($username==$user)
	  {echo "hello1";
		  $sql="select password from registration ";
	  $result=mysqli_query($conn,$sql);
	  $num=mysqli_num_rows($result);
	  if($num>0){
		  while($row=mysqli_fetch_assoc($result)){
      $pass= implode($row);
	  
		  if($password==$pass)
	  {
		  echo "hello2";$pass=$password;}}}}}
	  if($username==$user&& $password==$pass)
	  {
    echo "hello3";
  $stmt=$conn->prepare("insert into logindata(username,password)values(?,?)");
  $stmt->bind_param("ss",$username,$password);
$stmt->execute();
  $stmt->close();
 $conn->close();
  $a="a";
	  }}
		  
	  
	  if($a=='a')
	  {   echo "success";
		  include "my.html";
  
	  }
	  else
	  {
		  "register.html";
	  }
	  
?>