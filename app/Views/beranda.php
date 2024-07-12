<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #486D72;
        }

        .jumbotron {
            background: linear-gradient(to right, #64A8B1, #64A8B1);
            color: white;
        }

        .navbar {
            background-color: #343a40;
        }

        .btn-custom {
            background-color: #ff7e5f;
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background-color: #feb47b;
        }
    </style>
</head>

<body>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Selamat Datang</h1>
            <p class="lead">Di Website Sistem Informasi Geografis Data Kantor Desa Di Kecamatan Pelaihari.</p>
            <hr class="my-4">
            <p>Explore lebih lanjut dengan mengklik tombol di bawah ini.</p>
            <a class="btn btn-custom btn-lg" href="/kantordesa" role="button">Lihat Data Kantor Desa</a>
            <a class="btn btn-light btn-lg" href="/peta" role="button">Lihat Peta Kantor Desa</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4">
        <p>&copy; 2024 Sistem Informasi Geografis .</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>