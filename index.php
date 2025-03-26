<?php

if (count($_FILES) !== 0) {
    $file = $_FILES["file"];
    
    // Vérification de l'extension du fichier PDF
    if (in_array(strtolower(pathinfo($file["name"], PATHINFO_EXTENSION)), ['pdf'])) {
        $info = move_uploaded_file($file["tmp_name"], "files/{$file["name"]}") ? 'File uploaded' : 'File not uploaded';
    } else {
        $info = 'Only PDF files are allowed.';
    }
}
include 'index.phtml';
?>