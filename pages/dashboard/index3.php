<?php
include 'config/koneksi.php';

$query_jml_pasien = "SELECT COUNT(*) as jumlah_pasien FROM pasien";
$query_jml_dokter = "SELECT COUNT(*) as jumlah_dokter FROM dokter";
$query_jml_poli = "SELECT COUNT(*) as jumlah_poli FROM poli";
$query_jml_obat = "SELECT COUNT(*) as jumlah_obat FROM obat";

// Eksekusi query dan ambil hasilnya
$result_pasien = mysqli_query($mysqli, $query_jml_pasien);
$result_dokter = mysqli_query($mysqli, $query_jml_dokter);
$result_poli = mysqli_query($mysqli, $query_jml_poli);
$result_obat = mysqli_query($mysqli, $query_jml_obat);

// Cek apakah query berhasil dieksekusi
if ($result_pasien && $result_dokter && $result_poli && $result_obat) {
    // Ambil hasil query
    $row_pasien = mysqli_fetch_assoc($result_pasien);
    $row_dokter = mysqli_fetch_assoc($result_dokter);
    $row_poli = mysqli_fetch_assoc($result_poli);
    $row_obat = mysqli_fetch_assoc($result_obat);

    // Ambil nilai jumlah dari hasil query
    $jumlah_pasien = $row_pasien['jumlah_pasien'];
    $jumlah_dokter = $row_dokter['jumlah_dokter'];
    $jumlah_poli = $row_poli['jumlah_poli'];
    $jumlah_obat = $row_obat['jumlah_obat'];
} else {
    // Handle kesalahan jika query tidak berhasil
    $jumlah_pasien = "Error";
    $jumlah_dokter = "Error";
    $jumlah_poli = "Error";
    $jumlah_obat = "Error";
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Efek Fade-In */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        /* Style untuk info-box */
        .small-box {
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s forwards;
        }

        .small-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        /* Style umum untuk teks putih */
        .text-white {
            font-weight: 500;
        }

        /* Menyesuaikan ukuran font untuk judul */
        h1.text-white {
            font-size: 2.2rem;
        }

        h4.text-white {
            font-size: 1.6rem;
        }

        h5.text-white {
            font-size: 1.3rem;
        }

        /* Gaya khusus untuk teks pada info-box */
        .info-box-text {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .info-box-number {
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Membuat teks berjalan dengan ukuran yang pas */
        .scrolling-text {
            background-color: #4CAF50; /* Background hijau */
            color: white;
            padding: 10px 30px; /* Padding kiri dan kanan lebih besar untuk tampilan lebih baik */
            font-size: 1.2rem;
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            border-radius: 20px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
            display: inline-block; /* Pastikan hanya selebar teks */
            animation: scroll 10s linear infinite;
        }

        /* Membuat animasi scroll */
        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Margin untuk memindahkan posisi card sedikit lebih bawah */
        .container-fluid {
            margin-top: 20px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .small-box {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php?page=home">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Sambutan Admin Poliklinik -->
    <div class="container-fluid">
        <div class="scrolling-text">
            Selamat datang di Poliklinik Udinus. Kami berkomitmen untuk memberikan pelayanan kesehatan terbaik kepada Anda dan keluarga.
        </div>
    </div>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info fade-in">
                        <div class="inner">
                            <h3><?php echo $jumlah_pasien; ?></h3>
                            <p>Jumlah Pasien</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="pasien.php" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success fade-in">
                        <div class="inner">
                            <h3><?php echo $jumlah_dokter; ?></h3>
                            <p>Jumlah Dokter</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="dokter.php" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning fade-in">
                        <div class="inner">
                            <h3><?php echo $jumlah_poli; ?></h3>
                            <p>Jenis Poli</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="poli.php" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger fade-in">
                        <div class="inner">
                            <h3><?php echo $jumlah_obat; ?></h3>
                            <p>Jenis Obat</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="obat.php" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Link to Bootstrap JS and other necessary scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
