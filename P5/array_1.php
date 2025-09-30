<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        $jumlah_dosen = count($Listdosen);

        for ($i = 0; $i < $jumlah_dosen; $i++) {
            echo $Listdosen[$i] . "<br>";
        }
    ?>
</body>
</html>