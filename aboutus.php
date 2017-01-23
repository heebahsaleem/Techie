
<!DOCTYPE html>
<html>
<head>
<title> LOGIN </title>

</head>
<link rel="stylesheet" href="aboutus.css" type="text/css">
<body background="s.jpg">
<nav id="date">
<SCRIPT LANGUAGE="JavaScript">
 var now = new Date();
 var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
 var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
 var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
  function fourdigits(number)	{
	return (number < 1000) ? number + 1900 : number;
								}
 today =  days[now.getDay()] + ", " +
         months[now.getMonth()] + " " +
         date + ", " +
         (fourdigits(now.getYear())) ;

document.write(today);
</script>
<nav id="ic">
<a href="http://www.facebook.com">
<img src="f.png"  style="width:40px;height:40px;">
<img src="t.png"  style="width:35px;height:35px;">
<img src="p.png"  style="width:35px;height:35px;">
<img src="i.png"  style="width:35px;height:35px;">
<img src="y.png"  style="width:35px;height:35px;">
</a>
</nav>

<div id="header">
<h1><span class="blue-text">YOUR SHELF</span></h1>
<h5><span class="blue-text"> BUY YOUR FAVOURITE BOOKS AT LOW COST</span></h5>
</div>

<script>
window.alert("SUBSCRIBE!");
</script>



<ul id="menu">
         
          <li><a href="http://localhost/website1/book.php">HOME     </a></li>
          <li><a href="http://localhost/website1/aboutus.php">ABOUT US    </a></li>
          <li><a href="http://localhost/website1/fifa.php">BUY     </a></li>
          <li><a href="http://localhost/website1/playersinfo.php">SELL     </a></li>
          <li><a href="http://localhost/website1/suggestion.php">SUGGESTION BOX     </a></li>        
          <li><a href="http://localhost/website1/contact.php">CONTACT US     </a></li>
          <li><a href="http://localhost/website1/lib.php">LIBRARY   </a></li>
          <li><a href="http://localhost/website1/shop.php">DELIVERY   </a></li>
</ul>

<nav id="up"></br></br>
      <h4><span class="blue-text">ABOUT US</span></h4>
      <h3>Our aim is to provide all types of books(used books) .We make sure whether our customer is satisfied with us. If there's any query, one can fill the suggestion box form. </h3>

</nav>

<nav id ="form">	
<p>
<form method="POST" action="aboutus.php" onSubmit="return validate();" enctype="multipart/form-data">
  <td style="width:200px;" valign="top" id="content-right"><table width="100%" class="side-price who-should" >
          <tr>
            <td ><span class="blue"><b>Register<b></span></td>
        </tr>
          <tr>
            <td width="40%" height="29" class="normal-color" style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span class="style11"><strong>UserName  </strong></span></td>
            <td width="60%"><input type="text" id="username" name="username" placeholder="Name" style="height:25px; width:165px; " /></td>
          </tr>
<tr>
            <td></td>
            
          </tr>
          <tr>
            <td class="normal-color" style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span class="style11" ><strong>Email</strong></span></td>
            <td><input type="email" id="email" name="email" placeholder="Email Address" style="height:25px; width:165px; " /></td>
          </tr>
 
		  <tr>
            <td></td>
            
          </tr>
          <tr>
            <td class="normal-color" style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span class="style11" ><strong>Password</strong></span></td>
            <td><input type="password" id="password" name="password" placeholder="Password" style="height:25px; width:165px; " /></td>
          </tr>
		  
  <tr>
            <td></td>
            
          </tr>
          <tr>
            <td class="normal-color" style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span class="style11" ><strong>Confirm Password</strong></span></td>
            <td><input type="password" id="confirm" name="confirm" placeholder="Confirm Password" style="height:25px; width:165px; " /></td>
          </tr>
		  
 
          <tr>
            <td></td>
            <td><input type="image" alt="submit" name="submit" src="registration.png" />  
    
    
     

 
 </td>

   <link rel="stylesheet" href="css/style.css">

    
 

 
    
  </head>

 
      
<script>
function validate(){

        var a = document.getElementById("password").value;
        var b = document.getElementById("confirm").value;
        if (a!=b) {
        alert("Passwords do no match");
        return false;
        }
    }
</script>


<body>



 
<div class="Flat-social-icons">
		
<div class="inner-content">
			
			
</div>				
</div>
</script>          

          </tr>   
        </table>
		
  <style type="text/css">
    #customBtn {
      display: inline-block;
      background: white;
      color: #444;
      width: 190px;
      border-radius: 5px;
      border: thin solid #888;
      box-shadow: 1px 1px 1px grey;
      white-space: nowrap;
    }
    #customBtn:hover {
      cursor: pointer;
    }
    span.label {
      font-family: serif;
      font-weight: normal;
    }
    span.icon {
      background: url('g.png') transparent 1px 10% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 30px;
      height: 30px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
    }
  </style>
  </head>
  <body>
<tr>
            <td></td>
            
          </tr>
          <tr><span class="style11" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 OR
          </span></tr>
</br>
  <!-- In the callback, you would hide the gSignInWrapper element on a
  successful sign in -->
  <div id="gSignInWrapper">
    <span class="label"><b>Sign in with:</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="customBtn">&nbsp;<img src="g.png"  style="width:27px;height:20px;"><strong> &nbsp;&nbsp;&nbsp;Google+</strong><a href="https://accounts.google.com/ServiceLogin?sacu=1&hl=EN"></a>
    </div>
  </div>
  
  <script>startApp();</script>
</body>  
        
        </table></p>
<span class="style11" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="customBtn" class="customGPlusSignIn">&nbsp;<img src="login2.png"  style="width:55px;height:30px;"><strong> &nbsp;&nbsp;&nbsp;<b>LOGIN</b></strong><a href="http://localhost/website1/logging.php">
 
</span>

</nav>   

<footer>
       Copyright 2016.
    </footer>
</body>

</html>

<script type="text/javascript">
function a()
{ var x;
x= new XRequest();
x.open("GET","login.php?username="+document.getElementById("username").value+"email="+document.getElementById("email").value+"password="+document.getElementById("password").value+"confirm="+document.getElementById.value,false);
x.send(null);
}
</script>

 <?php
mysql_connect("localhost","root","");
mysql_select_db("login");
if(isset($_POST['image']))
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

if(mysql_query($insert_query))
{ echo "<script>alert('FORM COMPLETELY FILLED. THANK YOU !!')</script>";
}}
}
?>