<?php require_once("../auth.php"); 
$keterangan = $_SESSION["keterangan"];
if($keterangan != "Farmasi") {
    header("Location: ../configuser.php");
}
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <a href="farmasi">
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
                        <span class="judul">Rujukan Baru</span>
                    </a>
                </li>
                <li>
                    <a href="datafarmasi">
                        <span class="icon"><i class='fas fa-capsules'></i></span>
                        <span class="judul">Layanan Farmasi</span>
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
                <div class="tabel-dashboard">
                    <table>
                        <thead>
                            <tr>
                                <!-- <td>No</td> -->
                                <td>No.Reg</td>
                                <td>No.RM</td>
                                <td>Nama</td>
                                <td>Jenis Pelayanan</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody id="tampildata">
                        </tbody>
                    </table>
                </div>
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

    <!-- Modal -->
    <div class="modal fade" id="detailobat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Obat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

    <script src="../js/script.js"></script>
    <script src="../js/load.js"></script>
    <script src="../js/clock.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.js"></script>

    <!-- Menampilkan data obat -->
    <script>
        $(function(){
            $(document).on('click','.lihat-obat',function(e){
                e.preventDefault();
                $("#detailobat").modal('show');
                $.post('obat.php',{id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-dialog").html(html);

                    });
            });
        });
    </script>

    <!-- Tampilan data -->
    <script type="text/javascript">
        $(document).ready(function() {
                selesai();
            });
            
            function selesai() {
                setTimeout(function() {
                    update();
                    selesai(); 
                }, 1000);
            }
            
            function update() {
                $.getJSON("data_obat_masuk.php", function(data) {
                    var tampildata = document.getElementById("tampildata");
                    $(tampildata).empty();
                    var no = 1;
                    $.each(data.result, function() {
                        if(this['status_pelayanan'] == "Belum Dilayani"){
                            var statusPelayanan = "btn-pelayanan";
                            var status = " belum";
                            var linkTo = "registration?no_reg="+this['no_reg'];
                            var visible = "";
                        } else if(this['status_pelayanan'] == "Sudah Dilayani"){
                            var statusPelayanan = "btn-pelayanan";
                            var status = " sudah";
                            var linkTo = "#";
                            var visible = "Disable";
                        }

                        $(tampildata).append("<tr><td>"+this['no_reg']+"</td><td>"+this['no_rm']+"</td><td>"+this['nama_pasien']+"</td><td>"+this['jenis_layanan']+"</td><td><a href='#' class='btn-pelayanan lihat-obat' data-id='"+this['no_reg']+"' data-bs-toggle='modal' data-bs-target='#detailobat'>Lihat Obat</a></td></tr>");
                    });
                });
            }
    </script>

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