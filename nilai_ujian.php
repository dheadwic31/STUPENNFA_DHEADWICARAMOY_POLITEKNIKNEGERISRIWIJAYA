<?php
// Inisialisasi variabel
$nama = $email = $nilai = $hasil = "";

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Ambil dan bersihkan data dari form (Form Processing)
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $nilai = (int)$_POST['nilai_ujian'];

    // 2. Struktur Kendali (If...Else)
    if ($nilai > 70) {
        $hasil = "Lulus";
    } else {
        $hasil = "Remedial";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penentuan Hasil Ujian</title>
    <style>
        /* Gaya CSS agar tampilan lebih rapi */
        body { font-family: Arial, sans-serif; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        .result { margin-top: 20px; padding: 15px; border: 1px solid #4CAF50; background-color: #f0fff0; border-radius: 4px; }
        .remedial { border: 1px solid #f44336; background-color: #fff0f0; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input[type="text"], input[type="email"], input[type="number"] { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; }
        input[type="submit"] { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; margin-top: 15px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Penentuan Hasil Ujian</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required value="<?php echo $nama; ?>">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="<?php echo $email; ?>">
        
        <label for="nilai_ujian">Nilai Ujian:</label>
        <input type="number" id="nilai_ujian" name="nilai_ujian" min="0" max="100" required value="<?php echo $nilai; ?>">
        
        <input type="submit" value="Cek Hasil">
    </form>

    <?php 
    // 3. Tampilkan Output
    if ($hasil != ""): 
    ?>
        <div class="result <?php echo ($hasil == "Remedial" ? 'remedial' : ''); ?>">
            <h3>Hasil Ujian</h3>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Nilai Ujian:</strong> **<?php echo $nilai; ?>**</p>
            <p><strong>Status:</strong> **<?php echo $hasil; ?>**</p>
        </div>
    <?php endif; ?>

</div>
</body>
</html>