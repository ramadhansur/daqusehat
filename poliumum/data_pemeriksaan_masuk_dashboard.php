<?php
    include("../koneksi.php");

    $tanggal_sekarang = date("Y-m-d");

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_pemeriksaan_poliumum where tanggal_masuk = '$tanggal_sekarang' ORDER BY id DESC LIMIT 10");
    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));
?>
