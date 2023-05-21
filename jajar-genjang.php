<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas | Jajar Genjang</title>
    <link rel="stylesheet" href="bangun_datar.css">
</head>
<body>
    <a href="index.php"><button id="login_btn">Home</button></a></body></html></p>
    <div class="main">

    
        <h1>Jajar Genjang</h1>
        <form action="" method="POST" enctype="multipart/form-data">
        <table>
<tr>
<td>Sisi Alas</td>
<td> : </td>
<td><input type="number" name="angka1" required></td>
</tr>

<tr>
<td>Sisi Miring</td>
<td> : </td>
<td><input type="number" name="angka2" required></td>
</tr>



<tr>
<td>Tinggi</td>
<td> : </td>
<td><input type="number" name="angka3" required></td>
</tr>


<tr>
    <td></td>
<td><input type="submit" name="input_data" value="Hitung"></td>
<td><button><a href="jajar-genjang.php">Bersihkan</a></button></td>
</tr>
</table>
<br>

   <div class="php">
<?php
if(isset($_POST['input_data'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $angka3 = $_POST['angka3'];
    $luas = $angka1 * $angka3;
    $kli = 2 * ($angka1 + $angka2);

    echo"Sisi Alas : $angka1 <br>";
    echo"Sisi Miring : $angka2 <br>";
    echo"Tinggi : $angka3 <br>";
    echo"Rumus Luas : Sisi Alas x Tinggi <br>";
    echo"Hasil : $luas <br>" ;
    echo"Rumus Keliling : 2 x (Sisi Alas + Sisi Miring) <br>";
    echo"Hasil : $kli<br>";
}
?>
</div>

    </div>
</body>
</html>