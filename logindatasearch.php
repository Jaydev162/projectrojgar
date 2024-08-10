<?php
$conn=mysqli_connect('localhost' ,'root','','test');
 if($conn->connect_error){
	 die ("connection failed : ".$conn->connect_error);
	 	  }
	  else
	  {  
  $id=$_POST['username'];
	  }
	  $sql="select * from logindata where username='$id'";
	  $result=mysqli_query($conn,$sql);
	  $num=mysqli_num_rows($result);
	  if($num>0)
	  {
		while($row=mysqli_fetch_assoc($result)){
		  echo var_dump($row);
		  echo"<br>";
		}
		  	  }
	  else{
	  echo "no data found";
	  }
?>