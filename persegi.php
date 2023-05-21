<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas | Persegi</title>
    <link rel="stylesheet" href="bangun_datar.css">
</head>
<body>
    <a href="index.php"><button id="login_btn">Home</button></a></body></html></p>
    <div class="main">

    
        <h1>Persegi(Square)</h1>
        <form action="" method="POST" enctype="multipart/form-data">
        <table>
<tr>
<td>Sisi</td>
<td> : </td>
<td><input type="number" name="sisi" required></td>
</tr>
<tr>
    <td></td>
<td><input type="submit" name="input_data" value="Hitung"></td>
<td><button><a href="persegi.php">Bersihkan</a></button></td>
</tr>
</table>
<br>

   <div class="php">
<?php
if(isset($_POST['input_data'])){
    $sisi = $_POST['sisi'];
    $luas = $sisi*$sisi;

    echo"Sisi : $sisi <br>";
    echo"Rumus : Sisi x Sisi <br>";
    echo"Hasil : $luas <br>" ;
}
?>
</div>

    </div>
</body>
</html>