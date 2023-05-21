<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas | Lingkaran</title>
    <link rel="stylesheet" href="bangun_datar.css">
</head>
<body>
    <a href="index.php"><button id="login_btn">Home</button></a></body></html></p>
    <div class="main">

    
        <h1>Lingkaran</h1>
        <form action="" method="POST" enctype="multipart/form-data">
        <table>
<tr>
<td>Jari-jari</td>
<td> : </td>
<td><input type="number" name="jari" required></td>
</tr>
<tr>
    <td></td>
<td><input type="submit" name="input_data" value="Hitung"></td>
<td><button><a href="lingkaran.php">Bersihkan</a></button></td>
</tr>
</table>
<br>

   <div class="php">
<?php
if(isset($_POST['input_data'])){
    $jari = $_POST['jari'];
    $phi = 22/7;
    $luas = $phi*$jari*$jari;

    echo"Jari-jari : $jari <br>";
    echo"Rumus : phi x r x r<br>";
    echo"Hasil : $luas <br>" ;
}
?>
</div>

    </div>
</body>
</html>