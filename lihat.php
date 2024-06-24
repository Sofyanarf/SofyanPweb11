<?php
echo "<head><title>Form PHP</title></head>";

$fp = fopen("formulir.txt", "r");
if ($fp) {
    echo "<table border='1'>";
    while ($isi = fgets($fp)) {
        $pisah = explode("|", $isi);
        echo "<tr><td>Nama</td><td>: $pisah[0]</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td>: $pisah[1]</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>: $pisah[2]</td></tr>";
        echo "<tr><td>Alamat</td><td>: $pisah[3]</td></tr>";
        echo "<tr><td colspan='2'><hr></td></tr>";
    }
    echo "</table>";
    fclose($fp);
} else {
    echo "Gagal membuka file formulir.txt";
}
?>
