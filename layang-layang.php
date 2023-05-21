<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas | Layang-layang</title>
    <link rel="stylesheet" href="bangun_datar.css">
</head>
<body>
    <a href="index.php"><button id="login_btn">Home</button></a></body></html></p>
    <div class="main">

    
        <h1>Layang-layang</h1>
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
    <td></td>
<td><input type="submit" name="input_data" value="Hitung"></td>
<td><button><a href="layang-layang.php">Bersihkan</a></button></td>
</tr>
</table>
<br>

   <div class="php">
<?php
if(isset($_POST['input_data'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $luas = 1/2*$angka1*$angka2;

    echo"Diagonal 1 : $angka1 <br>";
    echo"Diagonal 2 : $angka2 <br>";
    echo"Rumus : 1/2 x d1 x d2 <br>";
    echo"Hasil : $luas <br>" ;
}
?>
</div>

    </div>
</body>
</html>