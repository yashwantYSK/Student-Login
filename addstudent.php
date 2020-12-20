<?php
include "include/head.php";
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    if(($id == "") && ($password1 == "") && ($name == ""))
    {
       header("Location: addtecstu.php");
        $_SESSION['message']="Please enter name, id and password";
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
    			$sql="UPDATE student SET name='$name',password='$password' WHERE id='$id'";
    			$res=mysqli_query($conn,$sql);
    			if($res)
    			{
    				header("Location: addtecstu.php");
    			$_SESSION['message']="Student's Details Updated having Reg No : ".$id;
    			}
    			else
    			{
    				header("Location: addtecstu.php");
    			$_SESSION['message']="something went wrong";
    			}

    		}
    		else
    		{
    			$sql="INSERT INTO student(id,name,password) VALUES ('$id', '$name', '$password') ";
    			$res=mysqli_query($conn,$sql);
    			if($res)
    			{
    				header("Location: addtecstu.php");
    			$_SESSION['message']="Student added having Reg No : ".$id;
    			}
    			else
    			{
    				header("Location: addtecstu.php");
    			$_SESSION['message']="something went wrong";
    			}
    		}
    	}
    }
}
?>