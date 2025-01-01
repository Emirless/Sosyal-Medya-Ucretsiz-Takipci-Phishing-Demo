<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onaylandı</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            text-align: center;
        }

        .content .icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #4CAF50;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .content .icon i {
            color: white;
            font-size: 50px;
        }

        footer {
            background-color: #fff;
            color: #000;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            position: relative;
            bottom: 0;
        }

        footer .footer-links {
            margin-bottom: 10px;
        }

        footer .footer-links a {
            color: #007bff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        footer .footer-links a:hover {
            text-decoration: underline;
        }

        footer p {
            margin: 0;
            font-weight: 400;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="icon">
            <i class="fas fa-check"></i>
        </div>
        <h1>İşlem Başarıyla Tamamlandı!</h1>
        <p>Yaptığınız işlem başarıyla gerçekleştirilmiştir.</p>
    </div>

    <footer>
        <div class="footer-links">
            <a href="main.php">Ana Sayfa</a>
            <a href="main.php">Paketler</a>
        </div>
        <p>&copy; 2024 Takipçi Botu | Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
