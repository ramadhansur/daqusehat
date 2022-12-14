<?php
require_once("auth.php"); 

$keterangan = $_SESSION["keterangan"];
    if($keterangan != "poligigi") {
        header("Location: ../configuser.php");
    }
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="shortcut icon" href="../assets/Proyek Baru.png">
    <title>Klinik Daqu Sehat</title>

</head>

<body onload="initcalender(), hide_loading()">
    <!-- Loading First -->
    <div class="loading overlayer">
        <div class="spinner"></div>
    </div>
    <!-- Loading End -->
    <div class="contain">
        <div class="navigasi">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="../assets/Proyek Baru.png" alt="">
                        </span>
                        <span class="judul1">DAQU Sehat</span>
                    </a>
                </li>
                <li>
                    <a href="poligigi">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="judul">Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="judul">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="pasien">
                        <span class="icon"><i class="far fa-plus-square"></i></span>
                        <span class="judul">Pasien Baru</span>
                    </a>
                </li>
                <li>
                    <a href="datapasien">
                        <span class="icon"><i class="fas fa-file-medical"></i></span>
                        <span class="judul">Data Pasien</span>
                    </a>
                </li>
                <!-- <h3>Admin</h3>
                <li>
                    <a href="#">
                        <span class="icon"><i class='far fa-address-book'></i></span>
                        <span class="judul">Data User</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-user-plus"></i></span>
                        <span class="judul">Tambah User</span>
                    </a>
                </li> -->
            </ul>
            <div class="bottom-content">
                <li class="mode">
                    <div class="bulan-bintang">
                        <i class='fas fa-sun sun'></i>
                        <i class='fas fa-moon moon'></i>
                    </div>
                    <span class="mode-text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </div>

    <!-- ISI DARI KENYATAAN -->
    <div class="main">
        <div class="topbar">
            <div class="">
                <div class="kotak">
                    <i class='fas fa-list-ul bar'></i>
                </div>
                <span class="title-main">Dashboard<span>
            </div>
            <!-- Mesin Pencari -->
            <!-- <div class="search">
                <label>
                    <input type="text" placeholder="Search">
                    <i class='fas fa-search'></i>
                </label>
            </div> -->
            <!-- User -->
            <div class="profile">
                <div class="info">
                    <button class="profilemenu"><?php $long = 11;
                                        $nama = $_SESSION['nama_pengguna'];
                                        echo substr($nama,0,$long).'...'; ?></button>
                    <div class="sub">
                        <div class="prof">
                            <img src="../assets/Ellipse 8.png" alt="">
                            <p>Hey, <b><?php $long = 8;
                                        $nama = $_SESSION['nama_pengguna'];
                                        echo substr($nama,0,$long).'...'; ?></b></p>
                            <small class="text-mode"><?php 
                                        echo $_SESSION['keterangan']; ?></small>
                        </div>
                        <a href="editprofile"><button class="links sub1"><i class="fas fa-user-alt"></i>Edit Profile</button></a>
                        <a href="../logout"><button class="links sub2"><i class="fas fa-sign-out-alt"></i>Logout</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card -->
        <div class="cardbox3">
            <a href="notfound.html" class="card-2">
                <div>
                    <div class="number">15</div>
                    <div class="keterangan">Total Pasien Harian</div>
                </div>
                <div class="iconCard">
                    <i class='fas fa-hand-holding-medical'></i>
                </div>
            </a>
            <a href="notfound.html" class="card-2">
                <div>
                    <div class="number">150</div>
                    <div class="keterangan">Total Pasien</div>
                </div>
                <div class="iconCard">
                    <i class='fas fa-hospital-user'></i>
                </div>
            </a>
            <a href="notfound.html" class="card-2">
                <div>
                    <div class="number">25</div>
                    <div class="keterangan">User Active</div>
                </div>
                <div class="iconCard">
                    <i class='fas fa-users'></i>
                </div>
            </a>
        </div>

        <!-- data preview dashboard -->
        <div class="dataDetail">
            <div class="pasien">
                <div class="headeer">
                    <h2>Daftar Tabel Pasien Terakhir</h2>
                    <a href="#" class="tombol">View All</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>No. Reg</td>
                            <td align="center">Nama</td>
                            <td align="center">Alamat</td>
                            <td>No. Telp</td>
                            <td>Tanggal Periksa</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A0121</td>
                            <td>Nania Yusuf</td>
                            <td>Wonorejo Permai Timur</td>
                            <td>08123763422</td>
                            <td>5/27/15</td>
                        </tr>
                        <tr>
                            <td>A0122</td>
                            <td>Adika Priatama</td>
                            <td>House Lane</td>
                            <td>08128563433</td>
                            <td>1/31/14</td>
                        </tr>
                        <tr>
                            <td>A0123</td>
                            <td>Danar Indra</td>
                            <td>Ampera Daerah Khusus</td>
                            <td>08128556406</td>
                            <td>5/30/14</td>
                        </tr>
                        <tr>
                            <td>A0124</td>
                            <td>Winda Viska</td>
                            <td>Jl Dr Sam Ratulangi</td>
                            <td>08128786494</td>
                            <td>5/30/14</td>
                        </tr>
                        <tr>
                            <td>A0125</td>
                            <td>Annisa Widya N</td>
                            <td>Jl Sultan Hasanudin</td>
                            <td>08128236467</td>
                            <td>5/20/14</td>
                        </tr>
                        <tr>
                            <td>A0126</td>
                            <td>Arinia Sasmita</td>
                            <td>Graha Cakrawala Selatan</td>
                            <td>08248786486</td>
                            <td>2/12/14</td>
                        </tr>
                        <tr>
                            <td>A0127</td>
                            <td>Roni Supriadi</td>
                            <td>Durian Runtuh 143</td>
                            <td>08528266443</td>
                            <td>3/30/14</td>
                        </tr>
                        <tr>
                            <td>A0124</td>
                            <td>Alvaro Hutapea</td>
                            <td>Jl Kencana Putih</td>
                            <td>08123786472</td>
                            <td>5/12/14</td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Preview Jam Pengingat -->
            <div class="clock">
                <div class="container-clock">
                    <div class="ClockHolder">
                        <div class="WeekDays">
                            <span>sabtu</span>
                            <span>minggu</span>
                            <span>senin</span>
                            <span>selasa</span>
                            <span>rabu</span>
                            <span>kamis</span>
                            <span>jumat</span>
                        </div>
                    <div class="TimeHolder">
                        <div class="TimeOptions">
                            <span id="hari" class="hari">Day</span>
                            <span id="tanggal" class="tanggal">Tanggal</span>
                            <span id="bulan" class="bulan">Month</span>
                            <span id="tahun" class="tahun">Years</span>
                        </div>
                        <div class="Numbers">
                            <div class="NumberHolder H1">
                                <span class="d1"></span>
                                <span class="d2"></span>
                                <span class="d3"></span>
                                <span class="d4"></span>
                                <span class="d5"></span>
                                <span class="d6"></span>
                                <span class="d7"></span>
                            </div>  
                            <div class="NumberHolder H2">
                                <span class="d1"></span>
                                <span class="d2"></span>
                                <span class="d3"></span>
                                <span class="d4"></span>
                                <span class="d5"></span>
                                <span class="d6"></span>
                                <span class="d7"></span>
                            </div>
                            <span>:</span>
                            <div class="NumberHolder M1">
                                <span class="d1"></span>
                                <span class="d2"></span>
                                <span class="d3"></span>
                                <span class="d4"></span>
                                <span class="d5"></span>
                                <span class="d6"></span>
                                <span class="d7"></span>
                            </div>
                            <div class="NumberHolder M2">
                                <span class="d1"></span>
                                <span class="d2"></span>
                                <span class="d3"></span>
                                <span class="d4"></span>
                                <span class="d5"></span>
                                <span class="d6"></span>
                                <span class="d7"></span>
                            </div>
                            <span>:</span>
                            <div class="NumberHolder S1">
                                <span class="d1"></span>
                                <span class="d2"></span>
                                <span class="d3"></span>
                                <span class="d4"></span>
                                <span class="d5"></span>
                                <span class="d6"></span>
                                <span class="d7"></span>
                            </div>
                            <div class="NumberHolder S2">
                                <span class="d1"></span>
                                <span class="d2"></span>
                                <span class="d3"></span>
                                <span class="d4"></span>
                                <span class="d5"></span>
                                <span class="d6"></span>
                                <span class="d7"></span>
                            </div>
                        </div>
                        <div class="TimeFormat">
                            <div class="Type">
                                <span>12hr</span>
                                <span class="active">24hr</span>
                            </div>
                            <div class="Formats">
                                <span>am</span>
                                <span>pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- teks slide -->
        <div class="teks-slide">
          <marquee behavior="" direction="" style="color: red;"> PERINGATAN !!!  Selalu Displin dan Mematuhi Protokol Kesehatan Dalam Pencegahan Covid-19 Patuhi 5M </marquee>
        </div>
        <footer>
                <p>Copyright ?? 2022, Powered by Smiley Cloud ??? All rights reserved.</p>
        </footer>

    </div>

    <script src="../js/script.js"></script>
    <script src="../js/load.js"></script>
    <script src="../js/clock.js"></script>


    <script>
        // ToggleMenu
        let toggle = document.querySelector('.bar');
        let menu = document.querySelector('.navigasi');
        let main = document.querySelector('.main');

        toggle.onclick = function () {
            navigasi.classList.toggle('active');
            main.classList.toggle('active');
        }

        // script buat hover stuck
        let list = document.querySelectorAll(".navigasi li");

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));
    </script>
</body>

</html>