<?php
include "include/head.php";
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    if($id == "")
    {
       header("Location: deletetecstu.php");
        $_SESSION['message']="Please enter id";
    }
    else
    {
    	$sql="SELECT * FROM teacher WHERE id='$id'";
    	$res=mysqli_query($conn,$sql);
    	if($res)
    	{
    		$row=mysqli_fetch_array($res);
    		if($row)
    		{
    			$sql="DELETE FROM teacher WHERE id='$id'";
    			$res=mysqli_query($conn,$sql);
    			if($res)
    			{
    				header("Location: deletetecstu.php");
    			$_SESSION['message']="Teacher's Details Deleted having Reg No : ".$id;
    			}
    			else
    			{
    				header("Location: deletetecstu.php");
    			$_SESSION['message']="something went wrong";
    			}

    		}
    		else
    		{
    		  header("Location: deletetecstu.php");
                $_SESSION['message']="Teacher's Details Not Found having Reg No : ".$id;	
    		}
    	}
    }
}
?>