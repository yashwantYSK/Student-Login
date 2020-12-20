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
	<h2>Enter Result</h2>
	<form action="enterresult.php" method="POST">
	<p>Registration ID</p>
	<input type="text" name="id" class="input">
	<p>Name</p>
	<input type="text" name="name" class="input">
	<p>Math</p>
	<input type="text" name="MPresent" class="input" value="obtained"> 
	<br>
	<p>Physics</p>
	<input type="text" name="PPresent" class="input" value="obtained"> 
	<br>
	<p>Chemistery</p>
	<input type="text" name="CPresent" class="input" value="obtained"> 
	<br>
	<input type="submit" name="submit" value="SUBMIT" class="input subbutton">
	</form>
</div>
</div>
<?php
include "include/foot.php";
?>