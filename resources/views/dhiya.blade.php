<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Biodata Dhiya Ali Malik Dzulfiqar</title>
  <style>
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      margin: 0;
      padding: 40px;
      background: linear-gradient(135deg, #004d25, #002e1c);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .card {
      max-width: 780px;
      background: #ffffff;
      border-radius: 18px;
      padding: 30px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.3);
      animation: fadeIn 1s ease;
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }
    .header {
      display: flex;
      align-items: center;
      border-bottom: 3px solid #2e7d32;
      padding-bottom: 20px;
      margin-bottom: 25px;
    }
    .header img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #43a047;
      margin-right: 25px;
      box-shadow: 0 0 12px rgba(67,160,71,0.6);
    }
    .header h2 {
      margin: 0;
      font-size: 2rem;
      color: #1b5e20;
    }
    .header p {
      margin: 6px 0 0;
      font-style: italic;
      color: #388e3c;
      font-weight: 500;
    }
    .info table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
    }
    .info tr:nth-child(even) {
      background: #f5f5f5;
    }
    .info td {
      padding: 12px 10px;
      font-size: 15px;
    }
    .info td:first-child {
      font-weight: bold;
      width: 38%;
      color: #2e7d32;
    }
    .info td:last-child {
      color: #333;
    }
    .footer {
      text-align: center;
      margin-top: 25px;
      font-size: 14px;
      color: #2e7d32;
    }
    .back {
      text-align: center;
      margin-top: 30px;
    }
    .back a {
      display: inline-block;
      padding: 12px 28px;
      background: linear-gradient(90deg, #43a047, #2e7d32);
      color: white;
      text-decoration: none;
      border-radius: 40px;
      font-size: 1rem;
      font-weight: bold;
      box-shadow: 0 4px 12px rgba(0,0,0,0.25);
      transition: all 0.3s ease;
    }
    .back a:hover {
      background: linear-gradient(90deg, #388e3c, #1b5e20);
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(0,0,0,0.35);
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="header">
      <img src="{{ asset('img/dhiya.jpg') }}" alt="Foto Profil">
      <div>
        <h2>Dhiya Ali Malik Dzulfiqar</h2>
        <p>Siswa XI PPL 1 | SMKN</p>
      </div>
    </div>
    <div class="info">
      <table>
        <tr><td>Tempat, Tanggal Lahir</td><td>Garut, 20 Februari 2009</td></tr>
        <tr><td>Jenis Kelamin</td><td>Laki-laki</td></tr>
        <tr><td>Alamat</td><td>Perum Puri Griya Gandasari</td></tr>
        <tr><td>Agama</td><td>Islam</td></tr>
        <tr><td>Pendidikan</td><td>SMKN — XI PPL 1</td></tr>
        <tr><td>Tinggi / Berat Badan</td><td>170 cm / 55 kg</td></tr>
        <tr><td>Hobi</td><td>Main, Bobo, Belajar</td></tr>
        <tr><td>Cita-cita</td><td>Keliling Dunia</td></tr>
        <tr><td>Motivasi</td><td>“Saya ingin mengembangkan diri, menimba ilmu, dan memberi manfaat bagi orang lain.”</td></tr>
      </table>
      <div class="back">
        <a href="/">⬅ Kembali ke Halaman Utama</a>
      </div>
    </div>
    <div class="footer">
      &copy; 2025 — Biodata Pribadi Dhiya Ali Malik Dzulfiqar
    </div>
  </div>
</body>
</html>
