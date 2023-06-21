@extends('template')
 @section('content')

<body><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MY PORTOFOLIO | EVITA SELVIANI</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <style type="text/css">
            body{
                font-family: Arial;
            }
            #projects{
                background-color: rgb(33, 171, 196);
            }
            #about{
                background-color: rgb(90, 129, 214);
            }
            #contact{
                background-color: rgb(122, 250, 96);
            }
            .form-label>span{
                color: rgb(116, 71, 221);
            }
        </style>
    </head>
    <body>

        <!--NavBar-->
        <nav class=" navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">EVITA SELVIANI</a>
                <button class="navbar-toggle" type="button" data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar_toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
      <!--Akhie navbar-->
      <!-- home -->
      <section id="home" class="pt-5">
        <div class="container-fluid p-0">
            <div class="p-5 text-bg-light text-center">
                <img src="img/vita.jpeg" alt="evita selviani" width="200" class="rounded-circle img-thumbnail">
                <h2 class="mt-3 fw-bold">Evita</h2>
                <p class="fs-5">Student </p>
            </div>
        </div>
    </section>
      <!-- Akhir home -->
  <!-- aboutme -->
  <section id="about" class="pt-5">
    <div class="container">
        <div class="p-5 text-center">
            <h3 class="pw-bold mb-3">About Me</h3>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    {{-- <p>Richeese Factory merupakan QSR (Quick Service Restaurant) atau restoran cepat saji, di mana hampir semua menu kami disajikan dengan saus keju yang lezat (cheese sauce).

                    Restoran kami didesain unik agar menjadi tempat santai yang nyaman untuk semua usia dan kalangan. Anda dapat merayakan kebersamaan dan keceriaan bersama sambil menikmati berbagai menu yang disajikan lengkap oleh kami.</p> --}}
                </div>
                <div class="col-md-4">
                    {{-- <p>Richeese Factory hadir pertama kali di Indonesia pada tanggal tanggal 8 Februari 2011, bertempat di Paris Van Java Mal, Kota Bandung, Jawa Barat. Seiring dengan makin berkembangnya outlet kami, kini Richeese Factory telah hadir di kota – kota besar di Indonesia dengan total 162 outlet di seluruh Indonesia pada tahun 2019, dan akan bertambah terus di tahun mendatang.</p> --}}
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- akhir about -->
  <!-- my Project -->
  <section id="projects" class="pt-5">
    <div class="container">
        <div class="p-5 text-bg-light text-center">
            <h3 class="fw-bold mb-3"> My Projects</h3>
            <div class="row justify-content-center">
             @foreach ($portofolio as  $item)

                <div class="col-md-4 mb-3">
                    <div class="card">
                    <img src="/storage/{{$item->foto}}" width="150">

                        {{-- <img src="img/Fire-Chicken.jpg" class="card-img-top" alt="gambar1"> --}}
                        <div class="card-body">
                            <td>{{$item->nama}}</td>
                             <td>{{$item->kategori}}</td>
                            <td>{{$item->deskripsi}}</td>
                            {{-- <p>Ayam goreng yang satu ini lain dari pada yang lain karena dicelup ke dalam saus BBQ. Tak tanggung-tanggung, saus BBQ tersebut menawarkan cita rasa pedas. Ada level saus BBQ yang bisa kamu pilih, yakni mulai level 1 sampai 5. Semakin besar jumlah angkanya semakin pedas pula rasa sausnya.
                                Untuk menetralisir rasa pedasnya, Fire Chicken disajikan dengan saus keju yang gurih. Cocol Fire Chicken-nya ke dalam saus keju yang tersedia dan nikmati bersama dengan nasi putih hangat.</p> --}}
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/rich-burger_.webp" alt="gambar 2">
                        <div class="card-body">
                            <p>Burger a la Richeese Factory ini terdiri dari dua roti berukuran cukup besar, dengan filling beef patty, keju dan sayuran. Burger ini pas disantap saat makan siang atau pun makan malam.
                                Ukurannya tidak terlalu besar, namun juga tidak begitu kecil. Menurut kami, burger ini cukup membuat perut kenyang. Nah, kalau kamu mau lebih kenyang lagi, kamu bisa tambah menu lain seperti kentang goreng.
                                Menu Rich Burger ini tidak kalah enak dari menu Richeese Factory lainnya.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
  </section>
</body>
</html>
