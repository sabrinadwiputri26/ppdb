    @extends('layout')
    @section('content')

<header>

    <a href="#" class="logo"><span>PPDB-</span>WIKRAMA</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">Beranda</a></li>
            <li><a href="#jurusan">Jurusan</a></li>  
            <li><a href="#about">about</a></li> 
            <li><a href="#testimoni">Uniform</a></li>
            <a href="/login"><button type="button" class="btn btn-outline-primary" style="font-size: 20px; border-radius:20px; width:100px">log in</button></a>  
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>PPDB TP 2023-2024</h3>
        <h1>SMK WIKRAMA BOGOR</h1>
        <p>Selamat datang di website Pendaftaran Peserta Didik Baru <br> Ayo! segera daftarkan dirimu ke
             SMK Wikrama dengan cara klik PENDAFTARAN PPDB dibawah ini!
            Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah . </p>
            <a href="/daftar"><button type="button" class="btn btn-primary" style="font-size: 20px; border-radius:20px; width:240px">Pendaftaran PPDB</button></a>  
        {{-- <a href="#" class="btn">get started</a> --}}
    </div>

    <div class="image">
        <img src="{{asset('assets/img/animasi.png')}}" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- jurusan section starts  -->

<section class="jurusan" id="jurusan">

 <h1 class="heading"> jurusan<br> <span>Smk wikrama memiliki 7 jurusan</span> </h1>

 <div class="box-container">

    <div class="box">
        <img src="{{asset('assets/img/img1.png')}}" alt="">
        <div class="info">
            <h3>Kuliner </h3>
            <p>Jurusan Tata Boga mempelajari teknik penyajian makanan dengan memperhatikan estetika, kualitas, rasa, dan kebutuhan gizi. Kamu akan belajar mengolah berbagai hidangan daerah dan berbagai negara negara.</p>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/img2.jpeg')}}" alt="">
        <div class="info">
            <h3>Bisnis Daring Pemasaran</h3>
            <p>Kompetensi keahlian Bisnis Daring dan Pemasaran SMK Wikrama Bogor didirikan pada tahun 2014, dan dan memperoleh akreditasi dari Badan Akreditasi Nasional Sekolah/Madrasah BAN-SM dengan nilai A.</p>    
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/img3.jpg')}}" alt="">
        <div class="info">
            <h3>Manajemen Perkantoran dan Layanan Bisnis</h3>
            <p>Program keahlian Manajemen Perkantoran dan Layanan Bisnis, sebelumnya bernama kompetensi keahlian Otomatisasi dan Tata Kelola Perkantoran/Administrasi Perkantoran, didirikan pada tahun 1996 dengan akreditasi A amat baik</p>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/img4.jpg')}}" alt="">
        <div class="info">
            <h3>Teknik Jaringan Komputer dan Telekomunikasi</h3>
            <p>Program keahlian Teknik Jaringan Komputer dan Telekomunikasi sebelumnya bernama kompetensi keahlian Teknik Komputer dan Jaringan didirikan pada tahun 2004 dan sudah memiliki akreditasi A.</p>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/img5.jpg')}}" alt="">
        <div class="info">
            <h3>Desain Komunikasi Visual</h3>
            <p> Pompetensi keahlian Desain Komunikasi Visual atau DKV sebelumnya bernama kompetensi keahlian Multimedia, menjawab tantangan perkembangan komunikasi visual, desain grafis dan multimedia.</p>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/img6.jpg')}}" alt="">
        <div class="info">
            <h3>Perhotelan</h3>
            <p>Pengetahuan pariwisata, layanan telepon operator, layanan bellboy/porter, layanan reservasi, layanan resepsionis, layanan dokumen transaksi keuangan, layanan houskeeping.</p>
        </div>
    </div>

    <div class="box">
        <img src="{{asset('assets/img/img7.jpeg')}}" alt="">
        <div class="info">
            <h3>Pengembangan Perangkat Lunak dan GIM</h3>
            <p>jurusan ini mempelajari dan mendalami  semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas. Bukan hanya itu PPLG juga  berkaitan dengan software computer mulai dari pembuatan website, aplikasi, dan game.</p>
        </div>
    </div>

 </div>

</section>

<!-- jurusan section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> wikrama </h1>

    <div class="row">

        <div class="image">
            <img src="{{asset('assets/img/grid.png')}}" alt="">
        </div>

        <div class="content">
            <h3>wikrama untuk Indonesia</h3>
            <p>SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Sekolah Menengah Kejuruan (SMK) Wikrama Kota Bogor, Jawa Barat, dipilih oleh Badan Pendidikan, Keilmuan, dan Kebudayaan PBB (UNESCO) menjadi wakil Indonesia untuk pembuatan film dokumenter sebagai proyek percontohan mengenai program perubahan iklim.</p>
            <p> Sekolah Menengah Kejuruan (SMK) Wikrama Kota Bogor, Jawa Barat, dipilih oleh Badan Pendidikan, Keilmuan, dan Kebudayaan PBB (UNESCO) menjadi wakil Indonesia untuk pembuatan film dokumenter sebagai proyek percontohan mengenai program perubahan iklim.</p>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- testimoni section starts  -->

<section class="testimoni" id="testimoni">

    <h1 class="heading"> <span>Wikrama</span> uniform </h1>

    <div class="box-container">

        <div class="box">
            <img src="{{asset('assets/img/almet.jpg')}}" alt="">
            <div class="info">
                <h3>Seragam Hari senin</h3>
                <span> seluruh siswa siswi wikrama </span>
                <div class="stars">
                </div>
                <p>seluruh siswa-siswi yang terjadwal kbm menggunakan seragam almet lengkap dengan atribut dan name tag, jika tidak akan terkena konsekuensi yang ada</p>
                <a href="#" class="btn">watch online</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('assets/img/selasa.jpg')}}" alt="">
            <div class="info">
                <h3>Seragam Hari selasa</h3>
                <span> seluruh siswa siswi wikrama </span>
                <div class="stars">
                </div>
                <p>menggunakan seragam pramuka lengkap dengan atribut dan name tag, jika tidak akan terkena konsekuensi yang ada</p>
                <a href="#" class="btn">watch online</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('assets/img/rabu.jpg')}}" alt="">
            <div class="info">
                <h3>Seragam Hari rabu</h3>
                <span> seluruh siswa siswi wikrama </span>
                <div class="stars">
                </div>
                <p>menggunakan seragam hijau lengkap dengan atribut dan name tag, jika tidak akan terkena konsekuensi yang ada</p>
                <a href="#" class="btn">watch online</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('assets/img/almet.jpg')}}" alt="">
            <div class="info">
                <h3>Seragam Hari kamis</h3>
                <span> seluruh siswa siswi wikrama </span>
                <div class="stars">
                </div>
                <p>menggunakan seragam almet lengkap dengan atribut dan name tag, jika tidak akan terkena konsekuensi yang ada</p>
                <a href="#" class="btn">watch online</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('assets/img/jumat.jpg')}}" alt="">
            <div class="info">
                <h3>Seragam Hari jumat</h3>
                <span> seluruh siswa siswi wikrama </span>
                <div class="stars">
                </div>
                <p>menggunakan seragam almet dan baju muslim lengkap dengan atribut dan name tag, jika tidak akan terkena konsekuensi yang ada</p>
                <a href="#" class="btn">watch online</a>
            </div>
        </div>

        <div class="box">       
            <img src="{{asset('assets/img/or.png')}}" alt="">
            <div class="info">
                <h3>seragam saat mata pelajaran olahraga</h3>
                <span> seluruh siswa siswi wikrama </span>
                <div class="stars">
                </div>
                <p>menggunakan seragam olahraga lengkap dengan atribut dan name tag, jika tidak akan terkena konsekuensi yang ada</p>
                <a href="#" class="btn">watch online</a>
            </div>
        </div>

    </div>

</section>

<!-- testimoni section ends -->



<div class="footer">

    <div class="share">
        <a href="https://github.com/sabrinadwiputri26"> <i class="fab fa-github"></i> GitHub </a>
        <a href="https://www.instagram.com/sabrina_dpu/"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="https://www.linkedin.com/in/sabrina-dwi-putri-utami-2a3b67260/"> <i class="fab fa-linkedin"></i> linkedin </a>
    </div>

    <h1 class="credit"> created by <a href="#"> Sabrina Dwi Putri Utami </h1>

</div>

<!-- footer section ends -->

<!-- scroll top  -->

<a href="#home" class="scroll-top">
    <img src="images/scroll-img.png" alt="">
</a>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

@endsection