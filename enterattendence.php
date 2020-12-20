<?php
include "include/head.php"
?>
<?php
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $Mpresent=$_POST['MPresent'];
    $PPresent=$_POST['PPresent'];
    $CPresent=$_POST['CPresent'];
    if(($name == "") && ($id == ""))
    {
        header("Location: teacherattendence.php");
        $_SESSION['message']="Please Enter Name, and ID";
    }
    else
    {
        $sql="SELECT * FROM student WHERE id='$id'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_fetch_array($res))
        {
             if(is_numeric($Mpresent) && is_numeric($PPresent) && is_numeric($CPresent))
            {
                $sql="SELECT * FROM totalclass";
                $res=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($res);
                $m=$row['math'];
                $p=$row['physics'];
                $c=$row['chemistry'];
                if($Mpresent<=$m && $Mpresent >=0 && $PPresent<=$p && $PPresent >=0 && $CPresent<=$c && $CPresent >=0)
                {
                $sql="SELECT * FROM attendence WHERE id='$id'";
                $res=mysqli_query($conn,$sql);
                if(mysqli_fetch_array($res))
                {
                   $sql = "UPDATE attendence SET math='$Mpresent',physics='$PPresent',chemistry='$CPresent' WHERE id='$id'";
                    $res=mysqli_query($conn,$sql);
                    if($res==1)
                    {
                        header("Location:teacherattendence.php");
                        $_SESSION['message']="Data updated Succesfully to modify insert again";
                    }
                    else
                    {
                        header("Location:teacherattendence.php");
                        $_SESSION['message']="Something Went Wrong"; 
                    }

                }
                else
                {
                    $sql = "INSERT INTO attendence(id,name,math,physics,chemistry) VALUES ('$id', '$name', '$Mpresent', '$PPresent', '$CPresent')";
                    $r=mysqli_query($conn,$sql);
                    if($r==1)
                    {
                        header("Location:teacherattendence.php");
                        $_SESSION['message']="Data Submitted Succesfully to modify insert again";
                    }
                    else
                    {
                        header("Location:teacherattendence.php");
                        $_SESSION['message']="Something Went Wrong"; 
                    }
                }
                }
                else
                {

                        header("Location:teacherattendence.php");
                        $_SESSION['message']="Total No class : Math : ".$m.", physics : ".$p.", chemistry : ".$c; 
                }
            }
            else
            {
                header("Location: teacherattendence.php");
                $_SESSION['message']="provide numeric value for Subject attendence";
            }
        }
        else
        {
            header("Location: teacherattendence.php");
            $_SESSION['message']="Student Not Found Having Reg No : ".$id;
        }
        
    }
}

?>

<?php
include "include/footer.php";
?>