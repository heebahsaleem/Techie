<!DOCTYPE html>
<html>
<link rel="stylesheet" href="links.css" type="text/css">
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
</br>

<section>
<nav id="write"><b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>Click To Buy Books
</u></b>
</nav></br>

<nav id="d">

<a href="http://localhost/website1/c++.php"><font color="#2F4F4F" size="5px"><i><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ Books</b>
<i>
</a>
<a href="http://localhost/website1/java.php"><font color="#2F4F4F" size="5px"><i><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java Books</b>
<i>
</font>
</a>

<a href="http://localhost/website1/c++.php"><font color="#2F4F4F" size="5px"><i><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C# Books</b>
<i>
</font>
</a>
</nav>

</section>

<div id="but">
<a href="http://localhost/website1/links.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Science</b> </font></a>


</div>

</br>

<div id="but">
<a href="http://localhost/website1/history.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; History</b></font> </a></br>
</div>

</br>

<div id="but">
<a href="http://localhost/website1/c++.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Geography</b></font> </a></br>
</div>

</br>

<div id="but">
<a href="http://localhost/website1/c++.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Political Science</b></font> </a></br></br>
</div>

</br>

<div id="but">
<a href="http://localhost/website1/c++.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>Language</b></font> </a></br>
</div>
<div class="container">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>

</br>

<footer>
       Copyright 2016.
    </footer>
</body>
</html>