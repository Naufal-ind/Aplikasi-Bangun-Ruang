<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penghitung Luas Bangun Datar | Naufal_ind</title>
    <link rel="stylesheet" href="index.css">
    <script src="jquery.js">

    </script>

</head>
<body>
    <div id="home">
        <h2 id="Bangun_Datar">Bangun Datar</h2>
        <a href="index.php"><button id="login_btn">Menu</button></a></p>
        <div class="container" align="center">
<img src="images/persegi.png" alt="">
<p id="nama">Persegi (Square)</p>
<p style="line-height: 1.5em">Menghitung Luas</p>
<p>Rumus : L = S x S</p><br>
<a href="persegi.php"><button id="edit_btn">Try</button></a>
        </div>
<div class="container" align="center">
    <img src="images/persegi-panjang.png" alt="" height="60" style="margin-top: -35px">
    <p id="nama" >Persegi Panjang</p>
    <p style="line-height: 1.5em">Menghitung Luas</p>
<p>Rumus : L = p x l</p><br>
<a href="persegi-panjang.php"><button id="edit_btn">Try</button></a>
</div>
<div class="container" align="center">
    <img src="images/segitiga.png" alt="" >
    <p id="nama" >Segitiga</p>
    <p style="line-height: 1.5em">Menghitung Luas</p>
<p>Rumus : L = 1/2 x a x t</p><br>
<a href="segitiga.php"><button id="edit_btn">Try</button></a>
    </div>
    
    <div class="container" align="center">
    <img src="images/lingkaran-1.png" alt="" >
    <p id="nama" >Lingkaran</p>
    <p style="line-height: 1.5em">Menghitung Luas</p>
<p>Rumus : L = phi x r x r</p><br>
<a href="lingkaran.php"><button id="edit_btn">Try</button></a>
    </div>
</div>

<div class="footer">
    <p align="center" ><br><b><a href="https://www.instagram.com/naufal_indw" target="blank" class="footer">@CopyrightNaufal-Indiarto</a></b></p>
</div>

<ul class="pagination">
<li><a href="#" class="prev"><Prev</a></li>
<li class="numberpage"><a href="index.php">1</a></li>
<li class="numberpage"><a href="index-2.php">2</a></li>
<li><a href="index-2.php" class="next">Next	&#8594</a></li>


</ul>
<script>
    $(document).ready(function(){

$(".next").click(function(){
    $(".pagination")
    .find(".numberpage.active")
    .next()
    .addClass("active")
$(".pagination")
.find(".numberpage.active")
.prev()
.removeClass("active");

})

$(".next").click(function(){
    $(".pagination")
    .find(".numberpage.active")
    .next()
    .addClass("active")
$(".pagination")
.find(".numberpage.active")
.prev()
.removeClass("active");

})


    })
</script>



</body>
</html>