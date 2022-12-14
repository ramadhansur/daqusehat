<?php require_once("auth.php"); 

$keterangan = $_SESSION["keterangan"];
require_once("authuser.php");
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="fontawesome/css/all.css"> -->
    <link rel="shortcut icon" href="../assets/Proyek Baru.png">
    <title>Klinik Daqu Sehat</title>

</head>

<body onload="hide_loading()">
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
                    <a href="admin">
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
                    <a href="datapasien">
                        <span class="icon"><i class="fas fa-file-medical"></i></span>
                        <span class="judul">Data Pasien</span>
                    </a>
                </li>
                <li>
                    <a href="adddokter">
                        <span class="icon"><i class='fas fa-stethoscope'></i></span>
                        <span class="judul">Tambah Dokter</span>
                    </a>
                </li>
                <li>
                    <a href="adduser">
                        <span class="icon"><i class="fa fa-user-plus"></i></span>
                        <span class="judul">Tambah User</span>
                    </a>
                </li>
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
                <span class="title-main">Tambah Data Dokter<span>
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
        <!-- Form Registration  -->
        <div class="edit">
            <div class="user-profil">
                <h2>Tambah Data Dokter</h2>
                <form action="proses_regis_dokter.php" method="post">
                    <div class="inputan-profil">
                        <div class="inputProfil">
                            <span class="detil">No. KTA</span>
                            <input class="forminput" type="text" id="noKta" name="kta" required>
                        </div>
                        <div class="inputProfil">
                            <span class="detil">Username</span>
                            <input class="forminput" type="text" id="usrnmusr" name="username" required>
                        </div>
                        <div class="inputProfil">
                            <span class="detil">Nama Dokter</span>
                            <input class="forminput" type="text" id="namUs" name="nama_dokter" required>
                        </div>
                        <div class="inputProfil">
                            <span class="detil">E-mail</span>
                            <input class="forminput" type="text" id="mailus" name="email" required>
                        </div>
                        <div class="inputProfil">
                            <span class="detil">Password</span>
                            <input class="forminput formpass" type="password" id="passusr" name="password" required>
                            <span class="matabatin" onclick="matabatinn()">
                                <i id="hide1" class='far fa-eye'></i>
                                <i id="hide2" class='far fa-eye-slash'></i>
                            </span>
                        </div>
                        <div class="inputProfil">
                            <span class="detil">Spesialis Dokter</span>
                            <select name="keterangan" id="role" aria-placeholder="hlao">
                                <option value="">--Pilih Spesialis--</option>
                                <option value="dokter">Poli Umum</option>
                                <option value="poligigi">Poli GIgi</option>
                                <option value="KIA">Kesehatan Ibu dan Anak</option>
                            </select>
                        </div>
                        <div class="inputProfil">
                            <p>*Password Default : "nama depan + 3 digit angka awal KTA"</p>
                        </div>
                    </div>
                    <div class="tombol">
                        <button class="button-submit" type="submit" id="">Submit Profile</button>
                    </div>
                </form>
            </div>
        </div>
        <footer>
                <p>Copyright ?? 2022, Powered by Smiley Cloud ??? All rights reserved.</p>
        </footer>

    </div>

    <script src="../js/script.js"></script>
    <script src="../js/load.js"></script>


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