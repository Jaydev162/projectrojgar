<?php
$conn=mysqli_connect('localhost' ,'root','','test');
 if($conn->connect_error){
	 die ("connection failed : ".$conn->connect_error);
	 $success="unsuccess";
 }
 else
 {
 $id=$_POST['id'];
 $name=$_POST['name'];
 $profession=$_POST['profession'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $email=$_POST['email'];
  $stmt=$conn->prepare("insert into registration(id,name,profession,username,password,phone,address,email)values(?,?,?,?,?,?,?,?)");
  $stmt->bind_param("issssiss",$id,$name,$profession,$username,$password,$phone,$address,$email);
$stmt->execute();
  $stmt->close();
 $conn->close();
 
 $success ="success";
}
if($success=="success")
{
	include "login.html";
}
else
{
	include "home.html";
}
?>