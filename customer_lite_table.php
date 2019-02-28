<?php 

$ibu = new mysqli("localhost", "root", "", "xrpl5");

$bapak = "SELECT*FROM customer";

$kawin = $ibu->query($bapak);

// tambah html
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="tampilanku.css">
</head>
<body>
    <p>hari ini kita belajar tabel</p>
    <table border="2">
         <tr style="background-color: #ff00ff;">
            <td>
                <p>id</p>
            </td>
            <td>
                <p>nama</p>
            </td>
            <td>
                <p>alamat</p>
            </td>
        </tr>
            <?php while($anak = $kawin->fetch_assoc())
            {
            ?>
        <tr>
            <td style="background-color: #ff00ff;">
                <p>
                    <?php echo $anak["customer_id"];?>
                </p>
            </td>
            <td style="background-color: #ff00ff;"><p><?php echo $anak["name"];?></p></td>
            <td style="background-color: #ff00ff;"><p><?php echo $anak["address"];?></p></td>
        </tr>
        <?php
         }
        ?>
    </table>
</body>
</html>
<?php
$ibu->close();
?>