<!DOCTYPE html>
<html>
<link rel="stylesheet" href="playersinfo.css" type="text/css">
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
<h1><span class="blue-text">Your Shelf</span></h1>
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

</br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u> MODES OF DELIVERY: </u></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id=write">
          <ul>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li> PAYTM</li>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li> VISA</li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>FROM HOME</li>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li> NET BANKING</li>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li> CASH ON DELIVERY</li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li> CREDIT CARD</li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li> DEBIT CARD</li>
         </ul>
</div>

<footer>
       Copyright 2016.
    </footer>
</body>
</html>