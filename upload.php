<?php
if (isset($_FILES['fichierExcel'])) {
    $dossier = "uploads/";
    if (!is_dir($dossier)) {
        mkdir($dossier, 0777, true); // Crée le dossier s'il n'existe pas
    }

    $nomFichier = basename($_FILES['fichierExcel']['name']);
    $chemin = $dossier . time() . "_" . $nomFichier;

    if (move_uploaded_file($_FILES['fichierExcel']['tmp_name'], $chemin)) {
        echo "✅ Fichier enregistré avec succès : " . $chemin;
    } else {
        echo "❌ Échec de l'upload.";
    }
}
?>
