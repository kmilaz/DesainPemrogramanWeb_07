<?php
$targetDirectory = "uploads/"; 
$allowedExtensions = array("jpg", "jpeg", "png", "gif"); 
$maxsize = 5 * 1024 * 1024; 

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files']['name'][0]) && !empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        $tmpName = $_FILES['files']['tmp_name'][$i];

        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $fileSize = $_FILES['files']['size'][$i];

        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxsize) {
            if (move_uploaded_file($tmpName, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName tidak valid (Hanya JPG/PNG/GIF & Max 5MB).<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>