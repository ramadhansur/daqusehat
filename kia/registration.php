<?php require_once("auth.php"); 

$keterangan = $_SESSION["keterangan"];
    if($keterangan != "KIA") {
        header("Location: ../configuser.php");
    }
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../assets/Proyek Baru.png">
    <style type="text/css">
        .autocomplete-suggestions { border-color: #5fb4fa; border: 1px solid #999; background: #fff; overflow: auto; border-radius:10px;}
        .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
        .autocomplete-selected { background: #F0F0F0; }
        .autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
        .autocomplete-group { padding: 2px 5px; }
        .autocomplete-group strong { display: block; border-bottom: 1px solid #000; }
    </style>
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
                    <a href="kia">
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
                <span class="title-main">Registration Form<span>
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
                            <p>Hey, <b> <?php $long = 8;
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
        <div class="pendaftaran">
            <div class="head-tab">
                <span class="toggle-tab active-tab">Tab 1</span>
                <span class="toggle-tab">Tab 2</span>
                <span class="toggle-tab">Tab 3</span>
            </div>
            <div class="tab-content active-tab">
                <h2>Data Pemeriksaan</h2>
                <form action="">
                    <div class="input-details">
                        <div class="checkrm">
                            <span class="detil">No.RM</span>
                            <input class="formcheckrm" type="text" id="noRm" name="" required>
                        </div>
                        <div class="inputbox">
                            <span class="detil">No.Register</span>
                            <input class="forminput" type="text" id="noreg" name="" readonly>
                        </div>
                        <div class="inputbox">
                            <span class="detil">Nama Pasien</span>
                            <input class="forminput" type="text" id="nampas" name="" readonly>
                        </div>
                        <div class="inputbox">
                            <span class="detil">Nama Suami</span>
                            <input class="forminput" type="text" id="namsuam" name="" required autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">HPHT</span>
                            <input class="forminput" type="text" id="Hpht" name="" autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">HPL</span>
                            <input class="forminput" type="text" id="Hapal" name="" autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">UK</span>
                            <input class="forminput" type="text" id="United_kingdom" name="" autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">Lila</span>
                            <input class="forminput" type="text" id="lisa" name="" autocomplete="off">
                        </div>
                        
                        <div class="inputbox">
                            <span class="detil">Tinggi Fundus</span>
                            <input class="forminput" type="text" id="Tifus" name="" autocomplete="off">
                        </div>
                        
                        <div class="inputbox">
                            <span class="detil">Letak Janin</span>
                            <input class="forminput" type="text" id="Letjan" name="" autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">Keluhan</span>
                            <textarea name="keluh_kesah" id="keluh_kesah" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="tab-content-2">
                        <h3>Pemeriksaan LAB</h3>
                        <div class="another-card-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Kunjungan</th>
                                        <th>Nama Pasien</th>
                                        <th>Diagnosa</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>18 Sept 2022</td>
                                        <td>Diana Ratih</td>
                                        <td>Hipertensi</td>
                                        <td>
                                            <a href=""><i class='far fa-file-alt' style="color:#4FBDBA"></i></a>
                                            <a href=""><i class='fas fa-trash' style="color:red"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="input-details" >
                            <div class="inputbox">
                                <span class="detil">Konseling</span>
                                <textarea name="konseling" id="konseling" cols="30" rows="5"></textarea>
                            </div>
                            <div class="inputbox">
                                <span class="detil">Diagnosa</span>
                                <input class="forminput" type="text" id="diagnosa_kia" name="" autocomplete="off">
                            </div>
                            <div class="inputbox">
                                    <span class="detil">Terapi/Obat</span>
                                    <input class="forminput obat" type="text" id="obat" name="obat[]" style="width: 50%" placeholder="Nama Obat">
                                    <input class="forminput" type="number" style="width: 15%" placeholder="Jumlah" name="jumlah[]">
                                    <input class="forminput" type="text" style="width: 15%" placeholder="Signa" name="dosis[]">
                                    <input type="button" value="+" class="btn-medicin" id="add">
                            </div>
                        </div>
                        <div class="btnpemeriksaan">
                            <button class="primary" href="">Submit</button>
                            <button class="warning" href="">Bersihkan</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="tab-content">
                <h2>Riwayat Kehamilan</h2>
                <form action="">
                    <div class="input-details">
                        <div class="inputbox-box">
                            <span class="detil text-detil">Gestasi</span>
                            <input class="forminput" type="text" id="gestasi" name="" autocomplete="off">
                        </div>
                        <div class="inputbox-box">
                            <span class="detil text-detil">Partus</span>
                            <input class="forminput" type="text" id="partus" name="" autocomplete="off">
                        </div>
                        <div class="inputbox-box">
                            <span class="detil text-detil">Abortus</span>
                            <input class="forminput" type="text" id="abortus" name="" autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">Jarak Persalinan Terakhir</span>
                            <input class="forminput" type="text" id="jpt" name="" autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">Riwayat Alergi</span>
                            <input class="forminput" type="text" id="riwayat-alergi" name="" autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">Riwayat Penyakit</span>
                            <input class="forminput" type="text" id="riwayat-penyakit" name="" autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">Diagnosa</span>
                            <input class="forminput" type="text" id="diagnosa-rk" name="" autocomplete="off">
                        </div>
                        <div class="inputbox">
                            <span class="detil">Catatan</span>
                            <textarea name="konseling" id="notes" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="tab-content-2">
                        <div class="btnpemeriksaan">
                            <button class="primary" href="">Submit</button>
                            <button class="warning" href="">Bersihkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>
    <script src="../js/load.js"></script>
    <script src="../js/tab-kia.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.11/jquery.autocomplete.min.js"></script>
    
    <!-- Tambah Form Obat -->
    <script type="text/javascript">
        $(document).ready(function(){

            var html = '<div class="inputbox"><span class="detil">Terapi/Obat</span><input class="forminput obat" type="text" id="obat" name="obat[]" style="width: 50%" placeholder="Nama Obat"><input class="forminput" type="number" style="width: 15%; margin-left: 4px" placeholder="Jumlah" name="jumlah[]"><input class="forminput" type="text" style="width: 15%; margin-left: 4px" placeholder="Signa" name="dosis[]"><input type="button" value="x" class="btn-checkit" style="margin-left: 4px" id="remove"></div>';

            var x = 1;
            $(document).ready(function() {
                $( ".obat" ).autocomplete({
                serviceUrl: "autocomplete_obat.php",   
                dataType: "JSON",          
                onSelect: function (suggestion) {
                    $( this ).val(suggestion.nama);
                }
            });
            });

            $("#add").click(function(){
                $("#form-obat").append(html);
                $( ".obat" ).autocomplete({
                    serviceUrl: "autocomplete_obat.php",   
                    dataType: "JSON",          
                    onSelect: function (suggestion) {
                        $( this ).val(suggestion.nama);
                    }
                });
            });
            
            $("#form-obat").on('click','#remove',function(){
                $(this).closest('div').remove();
            });

        });
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