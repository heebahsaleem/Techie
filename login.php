<html>
<head>
<title> Submit form</title>
</head>
<body>
 <?php
mysql_connect("localhost","root","");
mysql_select_db("login");
if(isset($_POST['submit']))
{
$username= $_POST['username'];
$email= $_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];


if($username=='' OR $email=='' OR $password=='' OR $confirm=='')
{echo "<script>alert('please fill all the fields!')</script>";
		
		exit();
}
else 
{
$insert_query=("insert into saleem (username,email,password,confirm) values('$username','$email','$password','$confirm')");
}
if(mysql_query($insert_query))
{ echo "<script>alert('FORM COMPLETELY FILLED. THANK YOU !!')</script>";
}
}
?>
</body>
</html>