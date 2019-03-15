
<form action="rez.php" method="GET">
Name:<input type="text" name="name"></br>
Age:<input type="text" name="age"></br>

<input type="submit" value="Submit">

</form>


<?php

$name=$_GET['name']
echo("this is the :".$name);



?>
