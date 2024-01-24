<?php 


print_r($_POST);

iclude "connect.php";

   $sql = "INSERT INTO fietsen (merk, type, prijs, foto)"
    Values (:merk, :type, :prijs, :foto);";

$squery = $conn->prepare($sql);

$query->execute(
    [
        'merk'=>$_POST['merk'],
        'type'=>$_POST['type'],
        'prijs'=>$_POST['prijs'],
        'foto'=>$_POST['foto'],
        ]
);

if($status == true) {
    echo toevo
?>