
<?php 
$name = 'Anggi Dwi Kurniawan'; 
$ttl = 'Purbolinggo, 17 April 2001';
$alamat = 'Purbolinggo, Lampung Timur';
$pekerjaan = 'Mahasiswa';
$email = 'anggi.dwi102119@students.unila.ac.id';
$smp = 'SMPN 1 Purbolinggo';
$sma = 'SMAN 1 Purbolinggo';
$univ = 'Universitas Lampung ';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $name; ?></title>
    </head>

<body>
    <p>
        <?php 
        echo '<strong><h2>BIODATA</h2></strong>';
        echo "<br></br>";
        echo '<strong>Data diri</strong>';

        echo "<p> Nama: $name </p>"; 
        echo "<p> Tempat, tanggal lahir: $ttl </p>";
        echo "<p> Alamat: $alamat </p>";
        echo "<p> Pekerjaan: $pekerjaan </p>";
        echo "<p> Email: $email </p>";
        echo "<br></br>";

        echo '<strong>Riwayat Pendidikan</strong>';
        echo "<p> SMP: $smp </p>"; 
        echo "<p> SMA: $sma </p>";
        echo "<p> Universitas: $univ </p>";
        ?>
        <a href="https://freecodecamp.com/anggidk">freecodecamp</a>
        <?php
        ?>
        <a href="https://instagram.com/anggi.kur">Instagram</a>
        <?php
        ?>
        <a href="https://github.com/kurniaanggii/">Github</a>
        <?php
        
        ?>
        </p>
    </body>
    </html>