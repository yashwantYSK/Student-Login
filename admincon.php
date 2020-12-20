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
   	echo "Status : Admin";
   	unset($_SESSION['id']);
   	unset($_SESSION['Name']);
}
?>
<div>
<div class="admincon">
	<div class="ADD Result">
		<a href="addtecstu.php">Add<br>Student/Teacher</a>
	</div>
	<div class="Delete Result">
		<a href="deletetecstu.php">Delete<br>Student/Teacher</a>
	</div>
	<div class="Search Result">
		<a href="searchtecstu.php">Search<br>Student/Teacher</a>
	</div>
	<div class="totalclass Result">
		<a href="addtotalclass.php">Add Class</a>
	</div>
	<div class="totalmarks Result">
		<a href="addtotalmarks.php">Add Marks</a>
	</div>
</div>
<?php
include "include/foot.php";
?>