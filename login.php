<?php
// Öğrenci numarası örneği: b2412100001
$dogru_eposta = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    if ($email === $dogru_eposta && $password === $dogru_sifre) {
        $kullanici = explode("@", $email)[0];
        echo "<h2 style='text-align:center; margin-top: 100px;'>Hoşgeldiniz <strong>$kullanici</strong></h2>";
    } else {
        header("Location: login.html");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
?>
