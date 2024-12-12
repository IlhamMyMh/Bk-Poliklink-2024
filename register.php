<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 140vh;
            background-color: #f8f9fa;
        }

        .card-horizontal {
            display: flex;
            flex-direction: row;
            max-width: 700px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background-color: #fff;
        }

        .card-horizontal .card-img {
            flex: 1;
            overflow: hidden;
        }

        .card-horizontal .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-horizontal .card-body {
            flex: 1;
            padding: 20px;
        }

        .form-control {
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .text-center a {
            color: #007bff;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="card-horizontal">
        <div class="card-img">
            <img src="assets/images/logoregister.png" alt="Image">
        </div>
        <div class="card-body">
            <h4 class="text-center">Registrasi Disini</h4>
            <p class="text-center text-muted">Data Diri <span class="text-primary">Pasien</span></p>
            <form action="pages/register/checkRegister.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="form-group">
                    <label for="no_ktp">Nomor KTP</label>
                    <input type="number" class="form-control" name="no_ktp" placeholder="Masukkan nomor KTP" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">Nomor Handphone</label>
                    <input type="number" class="form-control" name="no_hp" placeholder="Masukkan nomor handphone" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
            </form>
            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="loginUser.php">Login</a></p>
            </div>
        </div>
    </div>
</body>

</html>
