<?php 
//Birden fazla koşulu kontrol etmek için kullanılır.​

//Bir koşul doğruysa (true) if kod bloğunu çalıştırır değilse elseif diğer bir koşulu kontrol eder, 
//eğer elseif blok(ları) doğru koşulu sağlamaz ise else bloğuna ait kod bloğunu çalıştırır.

$ogr_not = 75;

if ($ogr_not >= 90) {
    echo "Notunuz: AA";
} elseif ($ogr_not >= 80) {
    echo "Notunuz: BA";
} elseif ($ogr_not >= 70) {
    echo "Notunuz: BB";
} else {
    echo "Kaldınız.";
}


?>