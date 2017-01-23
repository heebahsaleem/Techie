<!DOCTYPE html>
<html>
<link rel="stylesheet" href="c++.css" type="text/css">
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
<section>
<nav id="cs">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="download.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="yash.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="ref.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="black.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="amp.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="beg.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="bs.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="bala.jpeg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"><b>BUY</b></button></br></br>
&nbsp;&nbsp;&nbsp;&nbsp;<img src="bala.jpeg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="pear.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="q.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="ex.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="11.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="o.jpg"  style="width:117px;height:120px;">
&nbsp;&nbsp;&nbsp;&nbsp;<img src="t.jpg"  style="width:117px;height:120px;">
</br>&nbsp;&nbsp;&nbsp;;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;;<button class="button"><b>BUY</b></button>
&nbsp;&nbsp;&nbsp;;<button class="button"><b>BUY</b></button>
</nav>
</section>
<div id="but">

<a href="http://localhost/website1/links.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Science</b> </font></a>

</div>
</br>
<div id="but">

<a href="http://localhost/website1/history.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; History</b></font> </a>

</div>

</br>
<div id="but">

<a href="http://localhost/website1/geo.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Geography</b></font> </a>

</div>
</br>
<div id="but">

<a href="http://localhost/website1/pol.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Political Science</b></font> </a>

</div>
</br>
<div id="but">

<a href="http://localhost/website1/lan.php"><font color="black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>Language</b></font> </a>


</br>



<footer>
       Copyright 2016.
    </footer>
</body>
</html>