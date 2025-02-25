<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prodi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
        header {
            background: #4caf50;
            color: white;
            text-align: center;
        }
    
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card img {
            width: 100%;
            border-radius: 8px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
    </style>
<div class="body">
    <body>
        <nav class="nav1" style="background-color: white; ">
            <div class="layar-dalam">
              <div class="logo">
                <a href=""><img src="image/STTC.png" class="putih" /></a>
                <a href=""><img src="image/STTC.png" class="hitam" /></a>
              </div>
              <div class="menu">
                <a href="#" class="tombol-menu">
                  <span class="garis"></span>
                  <span class="garis"></span>
                  <span class="garis"></span>
                </a>
                <ul >
                  <li><a style="color: black;" href="index.html" >Home</a></li>
                  <li><a style="color: black;" href="Akademik.html">Akademik</a></li>
                  <li><a style="color: black;" href="tentang_sttc.html">Profile</a></li>
                  <li><a style="color: black;" href="index.html #penghargaan">Penghargaan</a></li>
                  <li><a style="color: black;" href="#contact">Layanan</a></li>
                  <li><a style="color: black;" href="fasilitas.html">Fasilitas</a></li>
                  <li><a style="color: black;" href="#contact">PMB</a></li>
                </ul>
              </div>
            </div>
          </nav>
          </div>
          
    <header>
        <div class="container" style="margin-top: 100px;"></div>
        <h1>Program Studi Informatika dan Industri</h1>
        <p>"Membangun masa depan dengan teknologi dan inovasi industri."</p>
    </header>
    <div class="container1">
        <section id="informatika" class="section1">
            <h2>Informatika</h2>
            <p>Program Studi Informatika berfokus pada pengembangan keahlian dalam bidang teknologi informasi, pemrograman, dan pengelolaan data untuk mendukung kemajuan teknologi global.</p>
            <div class="cards">
                <div class="card">
                    <img src="https://sttcipasung.ac.id/wp-content/uploads/2022/01/IMG_9802-scaled.jpg" alt="Informatika">
                    <h3>Keunggulan</h3>
                    <p>Pemrograman, kecerdasan buatan, dan analisis data.</p>
                </div>
                <div class="card">
                    <img src="https://sttcipasung.ac.id/wp-content/uploads/2023/07/lab-1024x576.jpg" alt="Laboratorium Informatika">
                    <h3>Fasilitas</h3>
                    <p>Laboratorium komputer modern dan pusat penelitian.</p>
                </div>
            </div>
        </div>
        </section>
    

        <section id="industri" class="section1">
            <h2>Industri</h2>
            <p>Program Studi Teknik Industri berorientasi pada pengelolaan sistem industri, optimalisasi proses produksi, dan pengembangan teknologi manufaktur.</p>
            <div class="cards">
                <div class="card">
                    <img src="https://sttcipasung.ac.id/wp-content/uploads/2017/02/wisuda-5.jpg" alt="Teknik Industri">
                    <h3>Keunggulan</h3>
                    <p>Manajemen industri, logistik, dan rekayasa sistem.</p>
                </div>
                <div class="card">
                    <img src="https://kledo.com/blog/wp-content/uploads/2022/02/sistem-produksi.jpg" alt="Fasilitas Industri">
                    <h3>Fasilitas</h3>
                    <p>Laboratorium teknik industri dan simulasi proses.</p>
                </div>
            </div>
        </section>

        
</body>
</html>