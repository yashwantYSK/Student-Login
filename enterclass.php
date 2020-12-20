<?php
include "include/head.php"
?>
<?php
if(isset($_POST['submit']))
{
    $Mpresent=$_POST['MPresent'];
    $PPresent=$_POST['PPresent'];
    $CPresent=$_POST['CPresent'];
    if(($Mpresent == "") && ($PPresent == "") && ($CPresent==""))
    {
        header("Location: addtotalclass.php");
        $_SESSION['message']="Please Enter total class";
    }
    else
    {
             if(is_numeric($Mpresent) && is_numeric($PPresent) && is_numeric($CPresent))
            {
                   $sql = "UPDATE totalclass SET math='$Mpresent',physics='$PPresent',chemistry='$CPresent' WHERE id='1'";
                    $res=mysqli_query($conn,$sql);
                    if($res)
                    {
                        header("Location:addtotalclass.php");
                        $_SESSION['message']="Data updated Succesfully to modify insert again";
                    }
                    else
                    {
                        header("Location:addtotalclass.php");
                        $_SESSION['message']="Something Went Wrong"; 
                    }

            }
                
            else
            {
                header("Location: addtotalclass.php");
                $_SESSION['message']="provide numeric value for Subject Total class";
            }
        
    }
}

?>

<?php
include "include/footer.php";
?>