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
<div class="enterattendence">
	<h2>Enter Total Class</h2>
	<form action="enterclass.php" method="POST">
	<p>Math</p>
	<input type="text" name="MPresent" class="input" value="Total"> 
	<br>
	<p>Physics</p>
	<input type="text" name="PPresent" class="input" value="Total"> 
	<br>
	<p>Chemistery</p>
	<input type="text" name="CPresent" class="input" value="Total"> 
	<br>
	<input type="submit" name="submit" value="SUBMIT" class="input subbutton">
	</form>
</div>
</div>
<?php
include "include/foot.php";
?>