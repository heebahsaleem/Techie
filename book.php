<!DOCTYPE html>

<script>
window.alert("REGISTER FREE FOR LATEST UPDATE!!!");
</script>

<html>
<title>Welcome </title>
<link rel="stylesheet" href="b.css" type="text/css">

<body background="s.jpg">
 <nav id="date">
  <SCRIPT LANGUAGE="JavaScript">
    var now = new Date();
    var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
    var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
    var date = ((now.getDate()<10) ? "0" : "")+ now.getDate(); 
    function fourdigits(number)	{
	return (number < 1000) ? number + 1900 : number;							}
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
        <form action="book1.php" method="post" enctype="multipart/form-data"><font color="black">
         <h3>TO SUBSCRIBE,PLEASE FILL THE FORM...</h3>
          <p>
           <label for="name"><b> Name: </b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="text" name="name" placeholder="Full Name">
           <br>
          </p>
       
          <p>
            <label for="mail"><b> Email: </b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="email" placeholder="Email Address">
            <br>
       </td>
       
       <p>
         <label for="number"><b> Phone No.:  </b></label>&nbsp;
         <input type="text" name="phone" placeholder="Phone Number">
         <br>
       </p>
       
         <label for="add"><b> Address: </b></label><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <textarea cols="22" rows="8" name="address" placeholder="Address"></textarea>
       </p>
       <p>
         <label for="code"><b> Pincode: </b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" name="pincode" placeholder="Pincode. E.g: 110025">
       </p>
       <p>
         <label for="count"><b> Country: </b></label>&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" name="country" placeholder="Country">
       </p>

       <p padding-centre:10px;>
           <input type="submit" name="submit" value="Submit form">
      </p>   
 </form></font>
</section> 

<nav id="up">
      <h4><span class="blue-text">WELCOME TO THE PAGE</span></h4>
      <h3><font color="black">Who Are We?</h3>
        <p>We are the team that helps you in all prospects in Books(used books). We go through each reviews and if we find any fault we definitly look into it. 
        </p>
      <h3>What we provide</h3>
        <p>We provide books only within india. We also offer discount. We on special occasions gives free home delivery
        We are here to fulfill our customers requirement. Fill the form to subscribe and get to know about new used books on our website. If on could find required book then he/she may write  
        it to us via mail</p></font>
</nav>
<footer>
       Copyright 2016.
</footer>
</body>

</html>



