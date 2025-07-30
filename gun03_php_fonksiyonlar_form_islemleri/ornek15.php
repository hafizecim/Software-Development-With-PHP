<?php

/*
Php'de hazır fonksiyonlar
dosya işlemleri
    */

// readfile ile dosyanın içeriğini okur ve kaç byte olduğunu yazdırır
$a =  readfile("deneme.txt"); // dosyanın içeriğini okur kaç byte olduğunu yazdırır
echo "<br>"."Byte: ";
echo $a;

echo"<hr>";

// fopen ile dosya açma ve okuma işlemleri
// fread ile dosyanın içeriğini okur ve kaç bayt olduğunu yazdırır
// fclose ile dosyayı kapatır
// dosya açtıktan sonra mutlaka kapatmalısınız
$myfile = fopen("deneme.txt", "r") or die("Dosyaya erişelemiyor - Unable to open file!"); //dosya açmak için
echo fread($myfile,filesize("deneme.txt")); //okumak için
echo fread($myfile,10); //10 karakter okur
fclose($myfile); // iş bitince kapatmak için

echo"<hr>";

// fgets ile dosyadan satır satır okuma işlemi
$myfile = fopen("deneme.txt", "r") or die("Unable to open file!");
echo fgets($myfile); // satır olur 
echo "<br>";
echo fgets($myfile);

fclose($myfile);

echo"<hr>";

// dosyanın sonuna kadar sırayla satıları yazdırır
$myfile = fopen("deneme.txt", "r") or die("Unable to open file!");
// dosyanın sonuna kadar sırayla satıları yazdırır
while(!feof($myfile)) { //dosyanın sonuna kadar okundu mu?
  echo fgets($myfile) . "<br>";
}
fclose($myfile);


echo"<hr>";


//dosya oluşturmak için
// w modunda açarsanız dosya varsa içeriğini siler ve yeni bir dosya oluşturur
$myfile = fopen("testdosyasi.txt", "w");

// dosyaya yazma işlemi
$myfile = fopen("testdosyasi.txt", "w") or die("Unable to open file!");
$txt = "Hafize Şenyıl\n";
fwrite($myfile, $txt);
$txt = "Php Atolyesi\n";
fwrite($myfile, $txt);
fclose($myfile);

?>
