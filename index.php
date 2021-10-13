<?php

$artikel = array(
    (object) array(
        "judul" => "Jong Kreatif Academy Berikan Solusi Buat Kamu yang Ingin Berkarir Di Industri Digital Kreatif",
        "text" => "Berkarir di industry digital kreatif menjadi sebuah pilihan bijak untuk saat ini. Peralihan aktivitas kegiatan bisnis ke arah digital memerlukan banyak talenta sumber daya manusia untuk memenuhi permintaan industri. Sehingga nilai yang dimiliki oleh talenta digital kreatif menjadi tinggi di industry tenaga kerja.",
        "image" => "image/berita1.jpg"
    ),
    (object) array(
        "judul" => "Sebagai Langkah Pemanfaatan Infrastruktur Di Daerah, Bakti-Kominfo Selenggarakan Sosialisasi Program Pelatihan Online Gratis",
        "text" => "Kemajuan teknologi yang sangat pesat menuntut adanya kecepatan adaptasi dalam menyerap beragam perubahan dalam keseharian masyarakat. Tersedianya jaringan internet mendorong pola hidup masyarakat mengalami perubahan.",
        "image" => "image/berita2.jpg"
    ),
    (object) array(
        "judul" => "Syarat Agar Bisa Mengikuti Kegiatan Jong Kreatif ",
        "text" => "Yang pertama, kamu harus berdomisili di lima wilayah yang sudah kita sebutkan sebelumnya. Kedua, kamu adalah lulusan SMA/SMK/Sederajat, komunitas, atau pekerja kerah biru. Artinya kamu harus fokus di kegiatan pembelajaran ini loh. Karena waktu pembelajarannya cukup padat dan dilaksanakan selama 3 bulan.",
        "image" => "image/berita3.png"
    ),
    (object) array(
        "judul" => "Program Pelatihan Jong Koding",
        "text" => "Program pelatihan pemrograman dasar untuk website mulai dari HTML, CSS dan PHP sampai dengan penggunaan framework.",
        "image" => "image/berita4.jpg"
    ),
    (object) array(
        "judul" => "Program Pelatihan Jong Desain",
        "text" => "Program pelatihan desain grafis, dan pelatihan untuk membangun brand sebagai freelancer yang mengasah daya cipta dan kreativitas.",
        "image" => "image/berita5.jpg"
    ),
    (object) array(
        "judul" => "Program Pelatihan Jong Agensi",
        "text" => "Program pelatihan produksi konten digital berupa foto, video, dan pemasaran digital, dilengkapi dengan ilmu komunikasi.",
        "image" => "image/berita6.jpg"
    ),
);
$carousel = array(
    (object) array(
        "image" => "image/berita2.jpg"
    ),
    (object) array(
        "image" => "image/berita1.jpg"
    ),
);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logika Perulangan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow">
            <div class="container-fluid">

                <!-- navbar brand -->
                <a href="#" class="navbar-brand" JongKoding>
                    <img src="image/logo-jongkreatif.png">
                </a>

                <!-- navbar toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- navbar collapse -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="blog" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col col-12 pt-5 pb-4">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid d-block w-100 carousel-img" src="image/berita1.jpg" alt="First slide">
                            </div>
                            <?php foreach ($carousel as $carousel) { ?>
                                <div class="carousel-item">
                                    <img class="img-fluid d-block w-100 carousel-img" src="<?= $carousel->image ?>" alt="Second slide">
                                </div>
                            <?php
                            } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col col-6 pt-5 pb-4">
                    <div class="card mb-3">
                        <img src="image/walpaper1.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jong Kreatif Academy</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-6 pt-5">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="card-title">About Us</h3>
                            <p class="card-text text-justify">Jong Kreatif Academy merupakan Program pelatihan gratis bersertifikasi, berbasis project based learning dilengkapi dengan kurikulum yang relevan dan efektif yang diselenggarakan secara online oleh Bakti Kementrian Komunikasi dan Informatika bersama Alkademi Karya Bangsa. <br>
                                Tahun ini, pelatihan diadakan khusus bagi kamu yang berada di Kabupaten Natuna, Kota Mataram, Kabupaten Pandeglang, Kabupaten Situbondo, dan Kabupaten Manggarai Barat.
                            </p>
                        </div>
                    </div>
                </div>
                <?php foreach ($artikel as $data) { ?>
                    <div class="col col-4 py-4">
                        <div class="card mb-3">
                            <img src="<?= $data->image ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $data->judul ?></h5>
                                <p class="card-text text-justify"><?= $data->text ?></p>
                                <p class="card-text"> <small class="text-muted">Last Updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>

    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Program Jong Kreatif
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <p>
                        <strong> Dalam program pelatihan “Jong Kreatif” kita bisa memilih salah satu dari 3 pelatihan
                            yang
                            disediakan, yaitu : </strong>
                    <ol type="1">
                        <li>Jong Koding</li>
                        <p>
                            Pelatihan ini disediakan buat kamu yang tertarik dengan komputer dan teknologi terbaru,
                            tidak mudah putus asa ketika gagal, dan pandai memecahkan masalah, maka kamu sangat
                            cocok dengan program ini. Di program ini kamu akan belajar pemrograman dasar untuk
                            website mulai dari HTML, CSS dan PHP sampai dengan penggunaan framework hingga kamu bisa
                            membuat website.
                        </p>

                        <li>Jong Desain</li>
                        <p>
                            Jong Desain merupakan tempat yang sangat cocok untuk menjembatani kamu mengenal dunia
                            desain grafis pada industri kreatif. Kamu akan dilatih untuk mulai penguasaan tools,
                            berbagai macam keahlian desain grafis, sampai dengan pengetahuan tentang bagaimana
                            melakukan branding. Pada pelatihan desain grafis kamu akan belajar untuk membangun brand
                            sebagai freelancer yang mengasah daya cipta dan kreativitas.
                        </p>

                        <li>Jong Agensi Kreatif</li>
                        <p>
                            Saat ini hampir semua orang berjualan dan jualan mereka kebanyakan memanfaatkan
                            fasilitas digital. Kamu tahu apa yang harus kamu lakukan, namun tidak memiliki
                            pengetahuan yang cukup di bidang tersebut ?. Di Jong Agensi Kreatif, kamu akan
                            mempelajari semua keahlian yang kamu butuhkan untuk dapat memanfaatkan peluang tersebut.
                            Program pelatihannya berupa produksi konten digital seperti foto, video, dan pemasaran
                            digital, dilengkapi dengan ilmu komunikasi menghadapi klien.
                        </p>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Tentang Kami
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <strong>Jong Kreatif Academy </strong>merupakan Program pelatihan gratis bersertifikasi, berbasis
                    project
                    based learning dilengkapi dengan kurikulum yang relevan dan efektif yang diselenggarakan
                    secara online oleh Bakti Kementrian Komunikasi dan Informatika bersama Alkademi Karya
                    Bangsa.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Kontak Kami
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <strong>Whatsapp : </strong> 0123456789 <br>
                    <strong>Instagram : </strong> @rehany_321 <br>
                </div>
            </div>
        </div>
    </div>


    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>