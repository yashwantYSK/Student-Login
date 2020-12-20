<?php
include "include/head.php";
include "include/nav.php";
?>
<div class="name">
<?php
if(isset($_SESSION['id']) && $_SESSION['Name'])
{
	$id=$_SESSION['id'];
    echo "Registration No : ".$_SESSION['id'];
    echo "<br>";
   	echo "Name : ".$_SESSION['Name'];
    echo "<br>";
    echo "Status : Student";
   	unset($_SESSION['id']);
   	unset($_SESSION['Name']);
$sql = "SELECT * FROM attendence WHERE id='$id'";
$sql3= "SELECT * FROM totalclass"; 
$res3= mysqli_query($conn, $sql3);
$row3= mysqli_fetch_array($res3);
if($res = mysqli_query($conn, $sql))
{ 
    if(mysqli_num_rows($res) > 0)
    { 
    	$row=mysqli_fetch_array($res);
  		echo '<div class="satten">';
  		echo "<h2>Attendence<h2>";
  		echo "<hr>";
        echo "<table>"; 
            echo "<tr>"; 
                echo "<td>Subject</td>"; 
                echo "<td>Present</td>"; 
                echo "<td>Total</td>"; 
                echo "<td>%</td>";
            echo "</tr>"; 
             echo "<tr>"; 
                echo "<td>Math : </td>"; 
                $m=(double)$row['math'];
                $t=(double)$row3['math'];
                 $p=$m/$t*100;
                 $p=round($p);
                echo "<td>" . $m . "</td>";  
                echo "<td>".$t."</td>"; 
                echo "<td>".$p."</td>";
            echo "</tr>"; 
               echo "<tr>"; 
                echo "<td>Physics : </td>";
                 $m=(double)$row['physics'];
                $t=(double)$row3['physics'];
                 $p=$m/$t*100;
                 $p=round($p); 
                echo "<td>" . $m . "</td>";  
                echo "<td>".$t."</td>"; 
                echo "<td>".$p."</td>";
            echo "</tr>"; 
            echo "<tr>"; 
                echo "<td>Chemistry: </td>"; 
                $m=(double)$row['chemistry'];
                $t=(double)$row3['chemistry'];
                 $p=$m/$t*100;
                 $p=round($p);
                echo "<td>" . $m . "</td>";  
                echo "<td>".$t."</td>"; 
                echo "<td>".$p."</td>";

            echo "</tr>"; 
        echo "</table>"; 
        echo "</div>";
        mysqli_free_result($res); 
    }
    else{
        echo "<br>";
        echo "Attendence Not Found";
    }
}

$sql1 = "SELECT * FROM result WHERE id='$id'"; 
$sql3= "SELECT * FROM totalmarks"; 
$res3= mysqli_query($conn, $sql3);
$row3= mysqli_fetch_array($res3);
if($res1 = mysqli_query($conn, $sql1))
{ 
    if(mysqli_num_rows($res1) > 0)
    { 
    	$row1=mysqli_fetch_array($res1);
  		echo '<div class="satten">';
  		echo "<h2>Result<h2>";
  		echo "<hr>";
        echo "<table>"; 
            echo "<tr>"; 
                echo "<td>Subject</td>"; 
                echo "<td>Obtained</td>"; 
                echo "<td>Total</td>"; 
                echo "<td>%</td>";
            echo "</tr>"; 
             echo "<tr>"; 
                echo "<td>Math : </td>"; 
               $m1=(double)$row1['math'];
               $t1=(double)$row3['math'];
               $p=$m1/$t1*100;
                $p=round($p);
                echo "<td>" . $m1 . "</td>";  
                echo "<td>".$t1."</td>"; 
                echo "<td>".$p."</td>";
            echo "</tr>"; 
               echo "<tr>"; 
                echo "<td>Physics : </td>"; 
                $m2=(double)$row1['physics'];
                $t2=(double)$row3['physics'];
                 $p=$m2/$t2*100;
                 $p=round($p);
                echo "<td>" . $m2 . "</td>";  
                echo "<td>".$t2."</td>"; 
                echo "<td>".$p."</td>";
            echo "</tr>"; 
            echo "<tr>"; 
                echo "<td>Chemistry: </td>"; 
               $m3=(double)$row1['chemistry'];
                $t3=(double)$row3['chemistry'];
                 $p=$m2/$t2*100;
                 $p=round($p);
                echo "<td>" .$m3. "</td>";  
                echo "<td>".$t3."</td>"; 
                echo "<td>".$p."</td>";
            echo "</tr>"; 
            echo "<tr>"; 
                echo "<td>Total: </td>";
                $m=$m1+$m2+$m3;
                $t=$t1+$t2+$t3;
                $p=$m/$t*100;
                $p=round($p);
                echo "<td>".$m."</td>";  
                echo "<td>".$t."</td>"; 
                echo "<td>".$p."</td>";
            echo "</tr>"; 
        echo "</table>"; 
        echo "</div>";
        mysqli_free_result($res1); 
    }
    else
    {
        echo "<br>";
        echo "Result Not Found";
    }
}
}
?>
</div>
<?php
include "include/foot.php";
?>