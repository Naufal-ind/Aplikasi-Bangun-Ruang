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
<img src="images/jajar-genjang.png" alt="">
<p id="nama">Jajar Genjang</p>
<p style="line-height: 1.5em">Menghitung Luas</p>
<p>Rumus : L = a x t</p><br>
<a href="jajar-genjang.php"><button id="edit_btn">Try</button></a>
        </div>
<div class="container" align="center">
    <img src="images/trapesium.png" alt="" height="60" style="margin-top: -35px">
    <p id="nama" >Trapesium</p>
    <p style="line-height: 1.5em">Menghitung Luas</p>
<p>Rumus : L = 1/2 x t (a+b)</p><br>
<a href="Trapesium.php"><button id="edit_btn">Try</button></a>
</div>
<div class="container" align="center">
    <img src="images/layang2.png" alt="" >
    <p id="nama" >Layang-layang</p>
    <p style="line-height: 1.5em">Menghitung Luas</p>
<p>Rumus : L = 1/2 x d1 x d2</p><br>
<a href="layang-layang.php"><button id="edit_btn">Try</button></a>
    </div>
    
    <div class="container" align="center">
    <img src="images/belah-ketupat.png" alt="" >
    <p id="nama" >Belah ketupat</p>
    <p style="line-height: 1.5em">Menghitung Luas</p>
<p>Rumus : L = 1/2 x d1 x d2</p><br>
<a href="belah-ketupat.php"><button id="edit_btn">Try</button></a>
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