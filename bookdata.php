<?php 
$conn=mysqli_connect('localhost' ,'root','','test');
 if($conn->connect_error){
	 die ("connection failed : ".$conn->connect_error);
	 $success="unsuccess";
	  }
 else
 {
 $bookname=$_POST['bookname'];  
  $author=$_POST['author'];
  $number=$_POST['number'];
   $stmt=$conn->prepare("insert into bookdata(bookname,author,number)values(?,?,?)");
  $stmt->bind_param("ssi",$bookname,$author,$number);
$stmt->execute();
  $stmt->close();
 $conn->close();
 $success ="success";
 }
if($success=="success")
{ 
echo "your data is stored";
	include "home.html";
}
else
{ 
    echo "your data is not stored";
	include "bookregistration.html";
}
 
?>