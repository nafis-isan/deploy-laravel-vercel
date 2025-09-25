<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata Orang 3</title>
  <style>
    /* Reset & Font */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #e8f5e9, #f9f9f9);
      color: #333;
      line-height: 1.6;
    }

    /* Header */
    header {
      background: linear-gradient(90deg, #43a047, #2e7d32);
      color: white;
      padding: 40px 20px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    header h1 {
      font-size: 2rem;
      letter-spacing: 1px;
    }

    /* Container */
    .container {
      max-width: 900px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .container:hover {
      transform: translateY(-5px);
    }

    /* Foto */
    .foto {
      text-align: center;
      margin-bottom: 20px;
    }
    .foto img {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 50%;
      border: 6px solid #43a047;
      box-shadow: 0 6px 16px rgba(0,0,0,0.2);
      transition: transform 0.3s ease;
    }
    .foto img:hover {
      transform: scale(1.05);
    }

    /* Nama */
    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.6rem;
      color: #2e7d32;
    }

    /* Biodata */
    .biodata {
      display: grid;
      grid-template-columns: 1fr 2fr;
      row-gap: 12px;
      column-gap: 20px;
      padding: 10px 20px;
    }
    .biodata strong {
      color: #555;
    }
    .biodata p {
      margin: 0;
      font-size: 1rem;
      border-bottom: 1px solid #eee;
      padding-bottom: 6px;
    }

    /* Tombol Back */
    .back {
      text-align: center;
      margin-top: 30px;
    }
    .back a {
      display: inline-block;
      padding: 12px 24px;
      background: linear-gradient(90deg, #43a047, #2e7d32);
      color: white;
      text-decoration: none;
      border-radius: 30px;
      font-size: 1rem;
      font-weight: bold;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
    }
    .back a:hover {
      background: linear-gradient(90deg, #388e3c, #1b5e20);
      transform: translateY(-3px);
      box-shadow: 0 6px 14px rgba(0,0,0,0.3);
    }
  </style>
</head>
<body>
  <header>
    <h1>Biodata M Gibran</h1>
  </header>

  <div class="container">
    <div class="foto">
      <img src="img/Gibran.png" alt="Foto Orang 3">
    </div>
    <h2>M Gibran</h2>
    <div class="biodata">
      <p><strong>Nama:</strong></p>
      <p>M Gibran Rasyad Bais Sukmana</p>
      <p><strong>Tempat, Tanggal Lahir:</strong></p>
      <p>Garut, 17 April 2009</p>
      <p><strong>Alamat:</strong></p>
      <p>karangpawitan</p>
      <p><strong>Hobi:</strong></p>
      <p>Membaca, dan Coding</p>
      <p><strong>Cita-cita:</strong></p>
      <p>Menjadi Software Engineer</p>
    </div>
    <div class="back">
      <a href="index.html">⬅ Kembali ke Halaman Utama</a>
    </div>
  </div>
</body>
</html>
