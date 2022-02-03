<?php 

include "database.php";

$myArray = array();
$myRow = array();

if(empty($_POST['iload'])){
    $vlimit = 1 ;
}else{
    $vlimit = $_POST['iload'];
}

if(isset($_POST['oset'])){
    $oset = $_POST['oset'] ;
}else{
    $oset = 0;
}

$myArray['vlimit'] = $vlimit;
$myArray['oset'] = $oset;




$query = "SELECT * FROM `bpost` ORDER BY ID ASC LIMIT ".$vlimit." OFFSET ".$oset."";
$result = mysqli_query($conn ,$query);

while($row = $result->fetch_array()){
    $myRow[] = array(
        "ID" => $row['ID'],
        "Content" => $row['Content'],
       // "Date" => $row['Date']
    );
}

$myArray['Content'] = $myRow;

echo json_encode($myArray);



?>