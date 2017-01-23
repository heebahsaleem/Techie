
<?php

$conn=mysqli_connect("localhost","root","","log");
if(mysqli_connect_errno())
{die("Connection FAiled".mysqli_connect_error());
}
else
{ echo "Connected to database ";
}
?>

<?php
mysqli_close($conn);
?>