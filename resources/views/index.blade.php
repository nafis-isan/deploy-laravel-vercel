<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Biodata 5 Orang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
        }
        header {
            text-align: center;
            padding: 20px;
            background: #4CAF50;
            color: white;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            padding: 30px;
        }
        .card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }
        .card h3 {
            margin: 10px 0;
        }
        .card a {
            display: inline-block;
            margin: 10px 0 20px;
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
        .card a:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Biodata 5 Orang</h1>
        <p>Pilih salah satu untuk melihat detail biodatanya</p>
    </header>

    <div class="container">
        <!-- Orang 1 -->
        <div class="card">
            <img src="img/img.jpeg.jpeg" alt="Foto Orang 5">
            <h3>zefi</h3>
            <a href="/zefi">Lihat Biodata</a>
        </div>

        <!-- Orang 2 -->
        <div class="card">
            <img src="img/dhiya.jpg" alt="Foto Orang 2">
            <h3>Orang 2</h3>
            <a href="/dhiya">Lihat Biodata</a>
        </div>

        <!-- Orang 3 -->
        <div class="card">
            <img src="img/Gibran.png" alt="Foto Orang 3">
            <h3>M Gibran</h3>
            <a href="/Gibran">Lihat Biodata</a>
        </div>

        <!-- Orang 4 -->
        <div class="card">
            <img src="{{asset(img/profilegazlan.gif)}}" alt="Foto Orang 4">
            <h3>Gazlan Hazieq El Akbar</h3>
            <a href="/gazlan">Lihat Biodata</a>
        </div>

        <!-- Orang 5 -->
        <div class="card">
            <img src="img/nafis.jpg" alt="Foto Orang 5">
            <h3>Nafis Ikhsan</h3>
            <a href="/Nafis">Lihat Biodata</a>
        </div>
    </div>
</body>
</html>
