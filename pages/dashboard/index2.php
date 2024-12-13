<?php
    require 'config/koneksi.php';
    $id_poli = $_SESSION['id_poli'];

    $query_poli = "SELECT nama_poli FROM poli WHERE id = $id_poli";
    $result = mysqli_query($mysqli, $query_poli);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $nama_poli = $row['nama_poli'];
    } else {
        $nama_poli = "Tidak dapat mendapatkan nama poli";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .content-header {
            background-color: #17a2b8;
            color: white;
            padding: 30px 0;
            position: relative;
            overflow: hidden;
        }

        .content-header h1 {
            font-size: 2.2rem;
        }

        .content-header h4 {
            font-size: 1.5rem;
        }

        .content-header marquee {
            font-size: 1.3rem;
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .icon {
            width: 100%;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3rem;
            background-color: #f8f9fa;
            color: #6c757d;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }

        @media (max-width: 768px) {
            .card-body {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="content-header text-center">
        <marquee>Selamat Datang Dokter <?php echo $username ?> | Anda berada di <?php echo $nama_poli; ?></marquee>
    </div>

    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <!-- Responsive Card Section -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jadwal Pemeriksaan</h5>
                            <p class="card-text">Kelola jadwal pemeriksaan pasien dengan mudah dan efisien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="icon">
                            <i class="bi bi-thermometer"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Periksa Pasien</h5>
                            <p class="card-text">Lakukan pemeriksaan dengan pasien untuk diagnosis lebih mendalam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="icon">
                            <i class="bi bi-file-earmark-medical"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Riwayat Pasien</h5>
                            <p class="card-text">Akses data riwayat pasien untuk informasi yang akurat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Link to Bootstrap JS and Bootstrap Icons -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
