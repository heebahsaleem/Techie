<html>
<body>


<?php 
	mysql_connect("localhost","root","");
	mysql_select_db("book");
	
	if(isset($_POST['submit'])){
	        $name = mysql_real_escape_string($_POST['name']);
		$email =  mysql_real_escape_string($_POST['email']);
		$phone =  mysql_real_escape_string($_POST['phone']);
		$address =  mysql_real_escape_string($_POST['address']);
		$pincode =  mysql_real_escape_string($_POST['pincode']);
		$country= mysql_real_escape_string($_POST['country']);
	      
	
		
		if($name=='' OR $email=='' OR $phone=='' OR $address=='' OR $pincode=='' OR $country=='')
{
		
		echo "<script>alert('please fill all the fields!')</script>";
		
		exit();
		}
		else {
		
		$insert_query = sprintf("insert into heebah (name,email,phone,address,pincode,country) values ('$name','$email','$phone','$address','$pincode','$country')");
                
			
		if(mysql_query($insert_query)){
		
		echo "<script>alert('Data inserted into table')</script>";
		
		
		}
		
		}
	
	}


?>
</body>
</html>
