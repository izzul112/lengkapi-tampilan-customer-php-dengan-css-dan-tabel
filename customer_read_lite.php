<?php 

$ibu = new mysqli("localhost", "root", "", "xrpl5");

$bapak = "SELECT*FROM customer";

$kawin = $ibu->query($bapak);

while($anak = $kawin->fetch_assoc()){
    echo $anak["customer_id"];

}

$ibu->close();
?>