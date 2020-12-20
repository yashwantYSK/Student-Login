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
<div class="left l1">
<div class="Tlogin">
	<h2>Admin Login</h2>
	<form action="adminlogin.php" method="POST">
	<p>Registration ID</p>
	<input type="text" name="id" class="input">
	<p>Password</p>
	<input type="text" name="password" class="input"> <br>
	<input type="submit" name="submit" value="SUBMIT" class="input subbutton">
	</form>
</div>
</div>


<?php
include "include/foot.php";
?>
