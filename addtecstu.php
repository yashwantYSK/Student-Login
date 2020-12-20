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
	<h2>Add/Update Teacher</h2>
	<form action="addteacher.php" method="POST">
	<p>Registration ID</p>
	<input type="text" name="id" class="input">
	<p>Name</p>
	<input type="text" name="name" class="input">
	<p>Password</p>
	<input type="text" name="password" class="input"> <br>
	<input type="submit" name="submit" value="SUBMIT" class="input subbutton">
	</form>
</div>
</div>
<div class="Right">
<div class="Tlogin">
	<h2>Add/Update Student</h2>
	<form action="addstudent.php" method="POST">
	<p>Registration ID</p>
	<input type="text" name="id" class="input">
	<p>Name</p>
	<input type="text" name="name" class="input">
	<p>Password</p>
	<input type="text" name="password" class="input"> <br>
	<input type="submit" name="submit" value="SUBMIT" class="input subbutton">
	</form>
</div>
</div>

