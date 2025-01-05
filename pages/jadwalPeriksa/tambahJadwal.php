<?php
include '../../config/koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $idPoli = $_SESSION['id_poli'];
    $idDokter = $_SESSION['id'];
    $hari = $_POST["hari"];
    $jamMulai = $_POST["jamMulai"];
    $jamSelesai = $_POST["jamSelesai"];

    // Cek apakah sudah ada jadwal pada hari yang sama untuk dokter yang sama
    $queryOverlap = "SELECT * FROM jadwal_periksa WHERE id_dokter = '$idDokter' AND hari = '$hari'";

    $resultOverlap = mysqli_query($mysqli, $queryOverlap);
    
    if (mysqli_num_rows($resultOverlap) > 0) {
        echo '<script>alert("Dokter sudah memiliki jadwal pada hari ini!");window.location.href="../../jadwalPeriksa.php";</script>';
    } else {
        // Query untuk menambahkan data jadwal ke dalam tabel
        $query = "INSERT INTO jadwal_periksa (id_dokter, hari, jam_mulai, jam_selesai) VALUES ('$idDokter', '$hari', '$jamMulai', '$jamSelesai')";
        
        if (mysqli_query($mysqli, $query)) {
            echo '<script>';
            echo 'alert("Jadwal berhasil ditambahkan!");';
            echo 'window.location.href = "../../jadwalPeriksa.php";';
            echo '</script>';
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
        }
    }
}

mysqli_close($mysqli);
?>