<?php
$targetDirectory = "uploads/";
$allowedExtensions = array("jpg", "jpeg", "png", "gif"); 
$responses = []; 

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}


if (isset($_FILES['files']['name'][0]) && !empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $targetFile = $targetDirectory . $fileName;

        $file_ext_parts = explode('.', $fileName);
        $file_ext = strtolower(end($file_ext_parts));

        $errors = array();

        if (in_array($file_ext, $allowedExtensions) === false) {
            $errors[] = "($fileName: Ekstensi harus JPG, JPEG, PNG, atau GIF)";
        }

        if ($fileSize > 2097152) {
            $errors[] = "($fileName: Ukuran tidak boleh lebih dari 2 MB)";
        }

        if (empty($errors)) {
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                $responses[] = "File $fileName berhasil diunggah.";
            } else {
                $responses[] = "Gagal mengunggah file $fileName.";
            }
        } else {
            $responses[] = implode(" ", $errors);
        }
    }
} else {
    $responses[] = "Tidak ada file yang diunggah.";
}

echo implode("<br>", $responses);
?>