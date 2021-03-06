<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>4fitlife.ba</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="main.css">

    <!-- Plugins -->
</head>

<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "baza";
$conn = new mysqli($servername, $username, $password, $database);
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (($pos = strpos($actual_link, "?")) !== FALSE) {
    $code = substr($actual_link, $pos+1);
}else{
    http_response_code(404);
    include('error.html');
    die();
}


$sql="SELECT email FROM tabela WHERE code='".$code."'";
$rs=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($rs);
if(mysqli_num_rows($rs)>=1)
{
    $email = $row['email'];
}else{
    http_response_code(404);
    include('error.html');
    die();

}


?>



<div id="loader"></div>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark border border-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="4fitlife.png" alt="UI Kit" style="width: 100px; height: 45px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto me-sm-2 mt-2 mt-lg-0">
                <li class="nav-item active me-3">
                    <a class="nav-link" href="#">Po??etna <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#izazov">Izazov</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#rezultati">Rezultati</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#paketicijene">Paketi i cijene</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#">Kontakt</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<section id="izazov" class="pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="mb-3 mt-5 fw-bold">IZAZOV</h1>
                <p class="lead  ">Prihvati izazov i u??ini najbolje za sebe. Donesi odluku da krene?? i uz podr??ku trenera i
                    tima postigne?? svoj najbolji rezultat.

                </p>

            </div>
            <div class="col-12 col-md-10   mt-4 mt-md-0">
                <div class="ratio ratio-16x9 shadow-lg">
                    <iframe class="" src="https://www.youtube.com/embed/CcRNzPavX8o&feature=youtu.be" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-5 pb-5">
    <div class="container pb-5 pt-5">
        <div class="row align-items-center justify-content-between ">
            <div class="col-12 col-md-5 pr-md-5 ">
                <h1 class="mb-3 mt-5 display-4 fw-bold"></h1>
                <p class="lead  ">Za 60 dana do trajne promjene. Napravi prvi korak i donesi odluku. Pridru??i se ekipi sa
                    iskustvom i preko 400 rezultata. Uz podr??ku trenera i tima napravi svoj najbolji rezultat. Pogledajte video
                    kako je najbolje po??eti.</p>
                <div class="  d-flex mt-3 mb-1">
                    <a class="btn btn-success btn-lg  mt-md-3  " href="#" role="button">Learn more now</a>
                </div>
            </div>
            <div class="col-12 col-md-7  mt-4 mt-md-0">
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow-lg">
                    <iframe class="ratio ratio-16x9" src="https://www.youtube.com/watch?v=ZfFDa7yRm_Y"
                            allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="rezultati" class="pt-5 pb-5">
    <div class="container pb-5 pt-5">
        <div class="row align-items-center justify-content-between ">
            <div class="col-12 col-md-5 pr-md-5 ">
                <h1 class="mb-3 mt-5 display-4 fw-bold">Rezultati</h1>
                <p class="lead  ">Inspirisan rezutatima drugih uz najbolji po??etak: Izazov doru??ka napravi svoje prve
                    rezultate i promjenom navika, u??ivaj u dobrom izgledu i osje??aju. Pogledaj iskustva :</p>
                <div class="  d-flex mt-3 mb-1">
                    <a class="btn btn-success btn-lg  mt-md-3  " href="#" role="button">Learn more now</a>
                </div>
            </div>
            <div class="col-12 col-md-7  mt-4 mt-md-0">
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow-lg">
                    <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/ZfFDa7yRm_Y"
                            allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>







<section id="paketicijene" class="pt-5 pb-0">
    <div class="container">
        <div class="pt-5 text-center pb-0">
            <div class="row justify-content-center d-flex">
                <div class="col-xs-12 col-md-10 align-self-center">


                    <div class="justify-content-center d-flex mt-3 mb-1">

                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <div id="carousel-4092" class="mt-3 mb-3 carousel slide text-center slider-custom">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-4092" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-4092" data-slide-to="1" class="">
                            </li>
                        </ol>
                        <div class="carousel-inner text-center">
                            <div class="item carousel-item active shadow-lg" style="left: 0px;">
                                <img class="img-fluid" src="4fitlifepricelist.png" alt="">
                            </div>
                            <div class="item carousel-item" style="left: 0px;">
                                <img class="img-fluid" src="4fitlifepricelist.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--FOOTER-->
<section class="">
    <footer class="pt-4 pb-4 ">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-12 col-lg-2 text-lg-start">
                    <img alt="image" src=" https://dummyimage.com/102x40/007bff/ffffff?text=L O G O" height="40">
                </div>
                <div class="col mt-4 mt-lg-0 text-center">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Po??etna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Izazov</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rezultati</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Paketi i cijene</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontakt</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-2 mt-4 mt-lg-0 text-lg-right">
                    <a href="#">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>&nbsp;&nbsp;
                    <a href="#">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>&nbsp;&nbsp;
                    <a href="#">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>&nbsp;&nbsp;
                    <a href="#">
                        <i class="fab fa-pinterest" aria-hidden="true"></i>
                    </a>&nbsp;&nbsp;
                    <a href="#">
                        <i class="fab fa-google" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    ?? 2021 ?? 4FitLIFE.com ??? Sva prava pridr??ana. Zabranjeno neovla??teno kopiranje sadr??aja.
                </div>
            </div>
        </div>
    </footer>
</section>

<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">

    <form action="new.php"  method="post" class="form-container">
        <h1>REZERVIRAJ TERMIN</h1>

        <label for="txtName"><b>Ime i Prezime</b></label>
        <input type="text" id="txtName" placeholder="Upi??ite ime i prezime"  required >

        <label for="txtPhoneNum"><b>Broj telefona</b></label>
        <input type="number" id="txtPhoneNum" placeholder="Upi??ite broj telefona"  required >

        <label for="txtEmail"><b>Email</b></label>
        <input type="text" id="txtEmail" placeholder="Upi??ite E-mail" required>

        <label >Dr??ava</label><br />
        <select>
            <option selected="selected" value="bih">Bosna i Hercegovina</option>
            <option value="hrv">Hrvatska</option>
            <option value="srb">Srbija</option>
        </select><br />

        <button type="submit" class="btn">Po??alji</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Zatvori</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy"
        crossorigin="anonymous"></script>


<script type="text/javascript">
    window.onload = function () {
        setTimeout(function () {
            document.getElementById("loader").remove();
        }, 2000);
    };
</script>

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

</script>

</body>

</html>