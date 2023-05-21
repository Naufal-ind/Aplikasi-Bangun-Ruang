<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas | Belah Ketupat</title>
    <link rel="stylesheet" href="bangun_datar.css">
</head>
<body>
    <a href="index.php"><button id="login_btn">Home</button></a></body></html></p>
    <div class="main">

    
        <h1>Belah Ketupat</h1>
        <form action="" method="POST" enctype="multipart/form-data">
        <table>
<tr>
<td>Diagonal 1</td>
<td> : </td>
<td><input type="number" name="angka1" required></td>
</tr>

<tr>
<td>Diagonal 2</td>
<td> : </td>
<td><input type="number" name="angka2" required></td>
</tr>



<tr>
<td>Sisi</td>
<td> : </td>
<td><input type="number" name="angka3" required></td>
</tr>


<tr>
    <td></td>
<td><input type="submit" name="input_data" value="Hitung"></td>
<td><button><a href="belah-ketupat.php">Bersihkan</a></button></td>
</tr>
</table>
<br>

   <div class="php">
<?php
if(isset($_POST['input_data'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $angka3 = $_POST['angka3'];
    $luas = 1/2*$angka1*$angka2;
    $kel = 4*$angka3;
    

    echo"Diagonal 1 : $angka1 <br>";
    echo"Diagonal 2 : $angka2 <br>";
    echo"Sisi : $angka3 <br>";
    echo"Rumus Luas : 1/2 x d1 x d2<br>";
    echo"Hasil : $luas <br>" ;
    echo"Rumus Keliling : 4 x Sisi<br>";
    echo"Hasil : $kel <br>" ;
   
}
?>
</div>

    </div>
</body>
</html>