<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STT CIPASUNG</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="{{ asset('image/STTC.png') }}" class="putih" /></a>
          <a href=""><img src="{{ asset(`image/STTC.png`)}}" class="hitam" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a style="color: black;" href="#home" >Home</a></li>
            <li><a style="color: black;" href="#aboutus">Akademik</a></li>
            <li><a style="color: black;" href="/tentang">Profile</a></li>
            <li><a style="color: black;" href="#penghargaan">Penghargaan</a></li>
            <li><a style="color: black;" href="#contact">Layanan</a></li>
            <li><a style="color: black;" href="fasilitas.html">Fasilitas</a></li>
            <li><a style="color: black;" href="#contact">PMB</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class="logo"></div>
        <video autoplay muted loop>
          <source src="video/video-Indonesia.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>Sekolah Tinggi Teknologi Cipasung</h3>
          <p>
            Sekolah yang mampu bersaing di dunia Industri.
          </p>
        
          <p>
            <a href="" class="tombol">MORE INFO</a>
          </p>
        </div>
      </header>
      <main>
        <section id="aboutus">
          <div class="layar-dalam">
            <h3>Akademik</h3>
            <p class="ringkasan">
              Akademik yang ada di STT Cipasung apa aja..?
            </p>
            <div class="konten-isi">
              <p>
                Di STT Cipasung, terdapat beberapa program akademik yang dirancang untuk memenuhi kebutuhan dunia industri dan perkembangan teknologi. Berikut adalah beberapa program studi yang ada di STT Cipasung,
                yaitu program studi informatika dan industri.
              </p>
            </div>
          </div>
        </section>
        <section class="abuabu" id="support">
          <div class="layar-dalam support">
            <div>
              <img src="{{ asset('image/Gedung.jpg')}}" />
              <h6>Aktivitas</h6>
              <p>
                (09/09/2023) Sekolah Tinggi Teknologi Cipasung mengadakan Kuliah Ta’aruf Mahasiswa Baru atau KTMB me..
                <a href="fasilitas.html">Read more</a>
            </div>
            <div>
              <img src="image/profile.jpg" />
              <h6>Organisasi</h6>
              <p>
                Sekolah Tinggi Teknologi Cipasung mendapatkan ijin resmi dari Menteri Pendidikan dan Kebudayaan, berdasarkan surat keputusan ..
                <a href="tentang_sttc.html">Read more</a>
              </p>
            </div>
            <div>
              <img id="penghargaan" src="image/perhargaan.jpeg" width="20px" />
              <h6>Penghargaan</h6>
              <p>
                Pada Hari Minggu Tanggal 06 Oktober 2024 H. Sandiaga Salahuddin Uno, B.B.A., M.B.A.  dari Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf) mengundang para talenta digital dari berbaga
                <a href="">Read more..</a>
              </p>
            </div>
          </div>
        </section>
        
        <section class="quote">
          <div class="layar-dalam">
            <p style="background-color: rgb(3, 68, 27);">Kampus STT Cipasung Tempat Mencari Ilmu, dimana kita didik dan dilatih agar kita bisa lebih baju dan berkembang.</p>
          </div>
        </section>
        
        <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3>Fasilitas</h3>
            <p class="ringkasan">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
              fugit.
            </p>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('https://sttcipasung.ac.id/wp-content/uploads/2017/02/wisuda-5.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Gedung Kampus STT Cipasung</a></h4>
                    <p>
                      Gedung ini dibangun sebagai sarana utama untuk mendukung kegiatan akademik, administratif, maupun operasional, dengan fasilitas lengkap yang memenuhi kebutuhan pengguna selengkapnya..
                    </p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('https://sttcipasung.ac.id/wp-content/uploads/2023/07/IMG_0027-1536x1024.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Program Studi STTC</a></h4>
                    <p>
                      Program Studi merupakan unit akademik dalam perguruan tinggi yang dirancang untuk memberikan pendidikan, pelatihan, dan pengembangan kompetensi dalam bidang tertentu, guna mempersiapkan lulusan ya selengkapnya..
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            Ig : sttc_official
            Tiktok : sttcipasung
            
            
          </div>
          <div>
            <h5>Contact</h5>
            Whtas'App : 0839738718972
            Telepon   : 923908109289
          </div>
          <div>
            <h5>Help</h5>
            Comment at contact
          </div>
          <div>
            <h5>Sitemap</h5>
          <a href="#"></a> https://sttcipasung.ac.id/
          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; 2024 Kelompok 1</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>