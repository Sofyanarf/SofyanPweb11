<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama = $_POST['Nama'];
    $Tl = $_POST['Tl'];
    $Jk = $_POST['Jk'];
    $alamat = $_POST['alamat'];

 
    $fp = fopen("formulir.txt", "a+");
  
    fputs($fp, "$Nama|$Tl|$Jk|$alamat\n");
    fclose($fp);

    echo "Terima kasih sudah mengisi formulir.<br>";
    echo "<a href='lihat.php'>Lihat Isi Formulir</a><br>";
} else {
   
    header("Location: index.html");
    exit();
}
?>
