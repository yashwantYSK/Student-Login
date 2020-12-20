<?php
include "include/head.php";
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $password1=$_POST['password'];
    if(($id == "") && ($password1 == ""))
    {
       header("Location: index.php");
        $_SESSION['message']="Please enter id and password";
    }
    else
    {
   		echo $id;
    	echo $password1;
    	$sql = "SELECT * FROM teacher WHERE id='$id'";
    	$res = mysqli_query($conn, $sql);
    	if($res)
    	{
    		 if(mysqli_num_rows($res) > 0)
    		 {
    		 	$row = mysqli_fetch_array($res);
    		 	$pass=$row['password'];
    		 	echo $pass;
    		 	if($password1==$pass)
    		 	{
    		 		header("Location: teacher.php");
                     $_SESSION['id']=$id;
                     $_SESSION['Name']=$row['name'];

    		 	}
    		 	else
    		 	{
    		 		header("Location: index.php");
        			$_SESSION['message']="Password Not Match";
    		 	}
    		 }
    		 else
    		 {
    		 	header("Location: index.php");
        		$_SESSION['message']="No any Teacher exists having loginid : ".$id;
    		 }
    	}
    }
}
include "include/foot.php";
?>