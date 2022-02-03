<?php 

include "database.php";
for($x = 0; $x < 1; $x++){
    $file = file_get_contents('https://loripsum.net/api/3/short',true);
    $uTime = time();
    echo $uTime;
    $query = "INSERT INTO `bpost` (`Content`, `Date`) VALUES ('".$file."',$uTime)";
    $result = mysqli_query($conn ,$query);   
}
?>