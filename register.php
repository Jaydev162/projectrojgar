<html>
<head><title>this is register page</title></head>
<link rel="stylesheet" href="css/style.css">
<body background="b.jpg" >
<center>
<img src="mgm.jpg" class="logo"><BR>
<FONT SIZE=30PX color="white">
MGM COLLEGE OF CS & IT , NANDED</CENTER>
</FONT><br><HR COLOR="green">
<marquee bgcolor="white" >
WELCOME.... 
</marquee>
<HR COLOR="blue"><br>
<div class="container1">
<nav>
<a href="index.php">home</a>
<a href="register.php">register</a>
<a href="login.php">login</a>
<a href="about.php">about</a>
<a href="help.php">help</a>
<a href="contact.php">contact us</a>
</nav>
<DIV CLASS="header2">
 <form action="registerdata.php" method="post">(search by id)
        <input type="text" name="id" placeholder="who will register Search..">
  <input type="submit">
 </form>
</div>
</div><br>


<form action="save.php" method="POST"><br><br><br><br><br><center>
<div class="name">
<div class="header1">REGISTRATION FORM</DIV><br><br>
ENTER ID <INPUT TYPE="NUMBER" NAME="id" required><br><br>
ENTER NAME <INPUT TYPE="TEXT" NAME="name" required> <br><br>
<INPUT type=radio name="profession" value="teacher" required>TEACHER
<INPUT TYPE="radio" name="profession" value="student" required>student
<input type="radio" name="profession" value="official-staff" required>official staff
<BR><BR>
ENTER USERNAME <INPUT TYPE="text" name="username" placeholder="your choice"><br><br>
ENTER PASSWORD<INPUT TYPE="TEXT" NAME="password" placeholder="as your ch"><br><br>
ENTER PHONE NO <INPUT TYPE="NUMBER" NAME="phone" required><br><br>
ENTER ADDRESS <textarea name="address" required></textarea><BR><BR>
ENTER EMAIL <INPUT TYPE="TEXT" NAME="email" required> <br><br><br>
<input type="submit">  <INPUT type="reset"><br><br>
<a href="login.html">login page</a>
</div></center>
</form>
</body>
</html>
