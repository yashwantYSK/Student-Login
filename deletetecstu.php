<?php
include "include/head.php";
include "include/nav.php";
?>
<div class="message">
        <?php
            if(isset($_SESSION['message']))
            {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
        ?>
</div>
<div class="left">
<div class="Tlogin">
	<h2>Delete Teacher</h2>
	<form action="deletetec.php" method="POST">
	<p>Registration ID</p>
	<input type="text" name="id" class="input">
	<input type="submit" name="submit" value="SUBMIT" class="input subbutton">
	</form>
</div>
</div>
<div class="Right">
<div class="Tlogin">
	<h2>Delete Student</h2>
	<form action="deletestu.php" method="POST">
	<p>Registration ID</p>
	<input type="text" name="id" class="input">
 <br>
	<input type="submit" name="submit" value="SUBMIT" class="input subbutton">
	</form>
</div>
</div>

