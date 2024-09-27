<?php
// Haal de zoekopdracht en categorie op
$query = isset($_GET['query']) ? strtolower(trim($_GET['query'])) : '';
$categorie = isset($_GET['categorie']) ? strtolower(trim($_GET['categorie'])) : '';

// Verwijder spaties en maak lowercase voor eenvoudiger matching
$query = preg_replace('/\s+/', '-', $query);
$categorie = preg_replace('/\s+/', '-', $categorie);

// Redirect logica afhankelijk van zoekopdracht en de categorie
if ($query === 'tom-ford' || $categorie === 'tom-ford') {
    header("Location: product1-info.php");
    exit();
} elseif ($query === 'jean-paul' || $categorie === 'jean-paul') {
    header("Location: product2-info.php");
    exit();
} elseif ($query === 'gisada' || $categorie === 'gisada') {
    header("Location: product3-info.php");
    exit();
} elseif (empty($query)) {
    // Als er geen zoekopdracht is, redirect naar de errorpagina
    header("Location: error-zoeken.php");
    exit();
} else {
    // Als geen resultaten worden gevonden, redirect naar de errorpagina
    header("Location: error-zoeken.php");
    exit();
}
?>
