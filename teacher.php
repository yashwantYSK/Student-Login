<?php
include "include/head.php";
include "include/nav.php";
?>
<div class="name">
<?php
if(isset($_SESSION['id']) && $_SESSION['Name'])
{
    echo "Registration No : ".$_SESSION['id'];
    echo "<br>";
   	echo "Name : ".$_SESSION['Name'];
   	echo "<br>";
   	echo "Status : Teacher";
   	unset($_SESSION['id']);
   	unset($_SESSION['Name']);
}
?>
<div>
<div class="student">
	<div class="Attendence">
		<a href="teacherattendence.php">Attendence</a>
	</div>
	<div class="Result">
		<a href="techerresult.php">Result</a>
	</div>
</div>
<?php
include "include/foot.php";
?>