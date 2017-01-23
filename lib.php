<!DOCTYPE html>
<html>
<link rel="stylesheet" href="lib.css" type="text/css">
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
</nav>
<div id="header">
<h1><span class="blue-text">YOUR SHELF</span></h1>
<h5><span class="blue-text"> BUY YOUR FAVOURITE BOOKS AT LOW COST</span></h5>
</div>

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

<nav id="tip">
</br>
<p>
   <b><h4>To issue Books from our Library , he/she first have to deposit <i>Rs.100</i> as Security Fee. Then, they will be given ID card and password(which should not be shared with other).
Students then check the books from library by logging in and issue by clicking 'Issue' Button. And we will deliver the book(s) within 2days.
</p>
<p>
The book is issued for 20days, including Saturday and Sunday. If late, then for first 5days-fine will be of <i>Re.1 per day</i>, next 10days-fine will be of <i>Rs.5 per day</i>, next 15days-fine will be of <i>Rs.10 per day</i>, after 15 days-fine will be <i>Rs.20 per day</i>.
</p>
<p>
To register for Library Card No. with Password , please Register and Pay.

<nav id ="form">	

<form name="frmEnquiry" method="post" action="login.php" >
  
          <tr>
            <td ><span class="blue"><b>REGISTER<b></span></td></br></br>
        </tr>
          <tr>
            <td width="40%" height="29" class="normal-color" style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span class="style11"><strong> Name  </strong></span></td>
            <td width="60%"><input type="text" id="login" name="username" placeholder="FULL NAME" style="height:25px; width:165px; " /></td>
          </tr>
		  <tr>
            <td></td>
            
          </tr>
          <tr>
            <td class="normal-color" style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span class="style11" ><strong>Email ID</strong></span></td>
            <td><input type="password" id="password" name="add" placeholder="EMAIL ADDRESS" style="height:25px; width:165px; " /></td>
          </tr>
		<tr>
            <td class="normal-color" style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span class="style11" ><strong>Phone Number</strong></span></td>
            <td><input type="password" id="password" name="number" placeholder="PHONE NUMBER" style="height:25px; width:165px; " /></td>
          </tr>  <p>
          <tr>
            &nbsp;&nbsp;
            <td><input type="image" id="goButton" onclick="checkLoginPass()" name="sub"  width="90px" height="50px"src="pay.png" />    
    
    
    
     

</td></p>

</h4>

</nav></p>
</br></br></br></br></br></br></br></br></br></br></br></br>
<nav id="issue">
<form name="frmEnquiry" method="post" action="login.php" >
<tr>
            <td ><span class="blue"><b>ISSUE <b></span></td></br>
        </tr><tr>
            <td width="40%" height="29" class="normal-color" style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span class="style11"><strong> Library Card No.  </strong></span></td>
            <td width="60%"><input type="text" id="login" name="username" placeholder="CARD NUMBER" style="height:25px; width:165px; " /></td>
          </tr><tr>
            <td width="40%" height="29" class="normal-color" style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span class="style11"><strong> Password</strong></span></td>
            <td width="60%"><input type="text" id="login" name="username" placeholder="PASSWORD" style="height:25px; width:165px; " /></td>
          </tr> <p>
          <tr>
            &nbsp;&nbsp;
            <td><input type="image" id="goButton" onclick="checkLoginPass()" name="sub"  width="90px" height="40px"src="login2.png" />   
    
    
    
     

</td></p>

</nav>
</br></br></br></br>

<footer>
       Copyright 2016.
    </footer>
</body>
</html>