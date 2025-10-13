<!DOCTYPE html>
<html>
<head>
    <title>Formulir Input Aman</title>
</head>
<body>
    <h2>Masukkan Nama</h2>

    <form method="post" action="html_aman.php">
        <input type="text" name="input">
        <input type="submit" name="submit" value="Kirim">
    </form>
    
    <br>

    <?php
        if (isset($_POST['input'])) {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            
            echo "<b>Teks yang Anda masukkan (versi aman):</b><br>";
            echo $input;
        }
    ?>
</body>
</html>