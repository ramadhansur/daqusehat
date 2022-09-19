<?php 
    date_default_timezone_set('Asia/Jakarta');

    // Database Hosting
    $koneksi = mysqli_connect("klinikdaqusehatmalang.site", "u1648364_daqusehat", "Daqusehat123.", "u1648364_daqusehat");
    // $db1 = mysqli_connect("sql105.epizy.com", "epiz_31138764", "Zj0ckitl72lu", "epiz_31138764_wilayah");
    
    function query($query){
        global $koneksi;
        // global $db1;
        $result1 = mysqli_query($koneksi, $query);
        // $result2 = mysqli_query($db1, $query);
        $rows1 = [];
        // $rows2 = [];
        while($row1 = mysqli_fetch_assoc($result1)){
            $rows1[] = $row1;
        }
        // while($row2 = mysqli_fetch_assoc($result2)){
        //     $rows2[] = $row2;
        // }
        return $rows1;
        // return $rows2;
    }

    // $user = 'root';
    // $password = 'root';
    // $db = 'db_daqu';
    // $host = 'localhost';
    // $port = 8889;

    // $link = mysqli_init();
    // $success = mysqli_real_connect(
    // $link,
    // $host,
    // $user,
    // $password,
    // $db,
    // $port
    // );

    //Database Localhost
    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    // $database = "db_daqu";

    // $koneksi = mysqli_connect($servername, $username, $password, $database);


    // if(!$koneksi)
    // {
    //     die("Error, Please Try Again:" . mysqli_connect_error());
    // }

   
?>