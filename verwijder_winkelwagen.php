<?php
// databaseconfiguratie
try {
    $pdo = new PDO('mysql:host=localhost;dbname=1', 'root', ''); // Pas aan naar jouw databaseconfiguratie
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Verbinding mislukt: ' . $e->getMessage();
}

// Verwijder artikel uit de winkelwagen
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = $_POST['item_id'];

    $stmt = $pdo->prepare("DELETE FROM winkelwagen WHERE id = ?");
    $stmt->execute([$item_id]);

    header('Location: winkelwagen.php'); // Redirect terug naar winkelwagenpagina
    exit;
}
?>
