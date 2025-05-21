<?php
// Kullanıcı bilgileri
$dogru_eposta = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

// Form gönderildiğinde kontrol
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    if ($email === $dogru_eposta && $password === $dogru_sifre) {
        $kullanici = explode("@", $email)[0];
        ?>

        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <title>Hoşgeldiniz</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body {
                    background: linear-gradient(135deg, #00b09b, #96c93d);
                    color: white;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }

                .welcome-box {
                    background-color: rgba(0, 0, 0, 0.4);
                    padding: 40px;
                    border-radius: 15px;
                    text-align: center;
                    box-shadow: 0 0 15px rgba(0,0,0,0.5);
                }

                .welcome-box h1 {
                    font-size: 2.5rem;
                    margin-bottom: 20px;
                }

                .btn-anasayfa {
                    margin-top: 20px;
                }
            </style>
        </head>
        <body>
            <div class="welcome-box">
                <h1>Hoşgeldiniz <strong><?php echo htmlspecialchars($kullanici); ?></strong></h1>
                <p>Sisteme başarıyla giriş yaptınız.</p>
                <a href="index.html" class="btn btn-light btn-anasayfa">Anasayfaya Dön</a>
            </div>
        </body>
        </html>

        <?php
    } else {
        header("Location: login.html");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
