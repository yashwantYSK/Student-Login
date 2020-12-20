<?php
include "include/head.php";
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    if($id == "")
    {
       header("Location: searchtecstu.php");
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
               header("Location: searchtecstu.php");
                $_SESSION['message']="Registration No : ".$row['id']."<br>Name : ".$row['name']."<br>Password : ".$row['password'];        		
            }
    		else
    		{
    		  header("Location: searchtecstu.php");
                $_SESSION['message']="Teacher's Details Not Found having Reg No : ".$id;	
    		}
    	}
    }
}
?>