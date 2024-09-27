<?php
// search-results.php
if (isset($_GET['query']) && isset($_GET['category'])) {
    $query = $_GET['query'];
    $category = $_GET['category'];

    // Hier zou je de database query uitvoeren met de opgegeven zoekterm en categorie
    echo "Zoekresultaten voor: " . htmlspecialchars($query) . "<br>";
    echo "Categorie: " . htmlspecialchars($category);
} else {
    echo "Geen zoekterm of categorie opgegeven.";
}
?>
