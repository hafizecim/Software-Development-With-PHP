<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = htmlspecialchars($_POST["ad"]); // XSS saldırılarına karşı koruma . htmlspecialchars, özel karakterleri HTML karakterlerine dönüştürür
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL); // E-posta doğrulama. filter_var, değişkeni belirli bir filtreye göre kontrol eder.
    $sifre = password_hash($_POST["sifre"], PASSWORD_DEFAULT); // Şifreyi güvenli bir şekilde hash'ler

    if (!$email) {
        echo "Geçersiz e-mail adresi.";
    } else {
        echo "Hoş geldiniz $ad<br>";
        echo "E-mail: $email";
        // Burada veritabanına kaydetme işlemi yapılabilir
    }

    echo $ad, $email, $sifre;
}
?>