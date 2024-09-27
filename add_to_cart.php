<?php
session_start();
include 'config.php'; // Zorg ervoor dat je database.php het correcte pad heeft

if (isset($_POST['product_id'])) {
    $product_id = intval($_POST['product_id']);

    // Voeg product toe aan winkelwagen
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (array_key_exists($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }

    echo 'Product toegevoegd aan winkelwagen';
} else {
    echo 'Geen product ID gespecificeerd';
}
?>
