<!DOCTYPE html>
<html>
<head>
    <title>Formulir Input Aman</title>
</head>
<body>
    <h2>Formulir Data Diri</h2>

    <form method="post" action="html_aman.php">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>
    
    <br>

    <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['nama'])) {
                $nama = $_POST['nama'];
                $nama_aman = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
                
                echo "<b>Nama yang Anda masukkan (versi aman):</b><br>";
                echo $nama_aman . "<br><br>";
            } else {
                echo "Nama belum diisi.<br><br>";
            }

            if (!empty($_POST['email'])) {
                $email = $_POST['email'];
                echo "<b>Hasil Validasi Email:</b><br>";
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p>Format email '" . htmlspecialchars($email) . "' adalah valid.</p>";
                } else {
                    echo "<p>Format email '" . htmlspecialchars($email) . "' tidak valid!</p>";
                }
            } else {
                echo "Email belum diisi.<br>";
            }
        }
    ?>
</body>
</html>