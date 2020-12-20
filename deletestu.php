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
    	$sql="SELECT * FROM student WHERE id='$id'";
    	$res=mysqli_query($conn,$sql);
    	if($res)
    	{
    		$row=mysqli_fetch_array($res);
    		if($row)
    		{
    			$sql="DELETE FROM student WHERE id='$id'";
                $sql1="DELETE FROM attendence WHERE id='$id'";
                $sql2="DELETE FROM result WHERE id='$id'";
    			$res=mysqli_query($conn,$sql);
                $res1=mysqli_query($conn,$sql1);
                $res2=mysqli_query($conn,$sql2);
    			if($res && $res1 && $res2)
    			{
    				header("Location: deletetecstu.php");
    			$_SESSION['message']="Student's Details Deleted having Reg No : ".$id;
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
                $_SESSION['message']="Student's Details Not Found having Reg No : ".$id;	
    		}
    	}
    }
}
?>