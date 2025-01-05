<?php
include '../../config/koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $id = $_POST['id'];
    $idPoli = $_SESSION['id_poli'];
    $idDokter = $_SESSION['id'];
    $hari = $_POST["hari"];
    $jamMulai = $_POST["jamMulai"];
    $jamSelesai = $_POST["jamSelesai"];
    $aktif = $_POST['aktif'];

    // Cek apakah sudah ada jadwal pada hari yang sama untuk dokter yang sama
    $queryOverlap = "SELECT * FROM jadwal_periksa WHERE id_dokter = '$idDokter' AND hari = '$hari' AND id != '$id'"; // Menghindari jadwal yang sama saat update

    $resultOverlap = mysqli_query($mysqli, $queryOverlap);
    
    if (mysqli_num_rows($resultOverlap) > 0) {
        echo '<script>alert("Dokter sudah memiliki jadwal pada hari ini!");window.location.href="../../jadwalPeriksa.php";</script>';
    } else {
        // Sebelum meng-update jadwal_periksa, atur semua nilai 'aktif' menjadi 'N' untuk dokter tertentu
        $resetAktifQuery = "UPDATE jadwal_periksa SET aktif='N' WHERE id_dokter='$idDokter'";
        mysqli_query($mysqli, $resetAktifQuery);

        // Hanya satu jadwal yang boleh aktif, atur nilai 'aktif' menjadi 'Y' untuk jadwal yang sedang di-edit
        $setAktifQuery = "UPDATE jadwal_periksa SET aktif='$aktif' WHERE id='$id'";
        mysqli_query($mysqli, $setAktifQuery);

        // Query untuk mengupdate jadwal
        $query = "UPDATE jadwal_periksa SET hari = '$hari', jam_mulai = '$jamMulai', jam_selesai = '$jamSelesai', aktif = '$aktif' WHERE id = '$id'";

        if (mysqli_query($mysqli, $query)) {
            echo '<script>';
            echo 'alert("Jadwal berhasil diubah!");';
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