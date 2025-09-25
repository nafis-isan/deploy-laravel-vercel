
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pribadi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #1a1a1a;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
        }



        .container {
            background-color: #2a2a2a;
            border: 2px solid #ffffff;
            border-radius: 15px;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 1;
        }

        .profile-section {
            margin-bottom: 30px;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid #ffffff;
            margin: 0 auto 20px;
            background-color: #444;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #bbb;
            overflow: hidden;
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .name {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .subtitle {
            font-size: 1.2em;
            color: #cccccc;
            margin-bottom: 30px;
        }

        .bio-info {
            display: grid;
            gap: 15px;
            margin-bottom: 30px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #444;
            transition: background 1.8s cubic-bezier(0.22, 1, 0.36, 1), color 1.8s cubic-bezier(0.22, 1, 0.36, 1), transform 1.8s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 1.8s cubic-bezier(0.22, 1, 0.36, 1);
            cursor: pointer;
        }

        .info-row:hover {
            background: rgba(255,255,255,0.10);
            color: #fff;
            transform: scale(1.03) translateY(-6px);
            box-shadow: 0 8px 24px 0 rgba(255,255,255,0.11);
        }

        .info-row:hover .info-label,
        .info-row:hover .info-value {
            color: #fff;
            transition: color 1.8s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .info-label {
            font-weight: bold;
            color: #ffffff;
            min-width: 120px;
            text-align: left;
        }

        .info-value {
            color: #cccccc;
            flex: 1;
            text-align: right;
        }

        .anime-decoration {
            width: 60px;
            height: 107px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
            display: inline-block;
            position: relative;
        }

        .anime-decoration::before {
            content: "9:16";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 10px;
            color: #888;
        }

        .decorations-container {
            margin-top: 20px;
        }

        .social-links {
            margin-top: 30px;
        }

        .social-link {
            display: inline-block;
            margin: 0 10px;
            padding: 8px 16px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid #fff;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background-color: #fff;
            color: #000;
        }

        /* Responsif untuk mobile */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 10px;
            }

            .name {
                font-size: 2em;
            }

            .info-row {
                flex-direction: column;
                text-align: center;
            }

            .info-label, .info-value {
                text-align: center;
                min-width: auto;
            }

            .decoration {
                width: 60px;
                height: 107px;
            }
        }
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


    <div class="container">
        <div class="profile-section">
            <div class="profile-photo">
                <img src="{{ asset('img/profilegazlan.gif') }}" alt="">
            </div>
            <h1 class="name">Gazlan Hazieq El Akbar</h1>
            <p class="subtitle">Manusia Biasa</p>
        </div>

        <div class="bio-info">
            <div class="info-row">
                <span class="info-label">Nama Panggilan:</span>
                <span class="info-value">Gazlan, Ghuzik, Gaz</span>
            </div>
            <div class="info-row">
                <span class="info-label">Tempat Lahir:</span>
                <span class="info-value">Bungbulang, Garut</span>
            </div>
            <div class="info-row">
                <span class="info-label">Tanggal Lahir:</span>
                <span class="info-value">11/12/2008</span>
            </div>
            <div class="info-row">
                <span class="info-label">Alamat:</span>
                <span class="info-value">Jl.Guntur Indah, Tarogong Kidul</span>
            </div>
            <div class="info-row">
                <span class="info-label">Pendidikan:</span>
                <span class="info-value">Sekolah Menengah Kejuruan</span>
            </div>
            <div class="info-row">
                <span class="info-label">Hobi:</span>
                <span class="info-value">Menggambar, Bermain game, Mendengarkan musik</span>
            </div>
            <div class="info-row">
                <span class="info-label">Email:</span>
                <span class="info-value">gazlanhazieqelakbar@gmail.com</span>
            </div>
            <div class="info-row">
                <span class="info-label">Telepon:</span>
                <span class="info-value">+62 858-6107-1517</span>
            </div>
        </div>
        <div class="back">
      <a href="index.html">⬅ Kembali ke Halaman Utama</a>
    </div>
    </div>
</body>
</html>