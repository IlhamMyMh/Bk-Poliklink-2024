<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: 'Source Sans Pro', Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: aliceblue /* Dark gray background */
        }

        .login-container {
            display: flex;
            max-width: 1200px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
        }

        .left-container {
            flex: 1;
            overflow: hidden;
            border-radius: 8px 0 0 8px;
        }

        .left-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px 0 0 8px;
        }

        .right-container {
            flex: 1;
            padding: 40px;
            border-radius: 0 8px 8px 0;
        }

        .login-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
        }

        .login-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 2px solid #ddd;
            border-radius: 4px;
            outline: none;
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff; /* Blue button background */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .login-form button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #3498db; /* Blue text */
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="left-container">
            <img src="assets/images/pasi1.jpg" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="login-form">
                <h2>Login</h2>
                <form action="pages/loginUser/checkLoginUser.php" method="post">
                    <div class="form-group">
                        <label for="username">Username :</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-block">
                        Masuk
                    </button>
                </form>
            </div>
            <div class="register-link mt-3">
                <p>Belum punya akun?</p>
                <a href="register.php">Registrasi disini</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
