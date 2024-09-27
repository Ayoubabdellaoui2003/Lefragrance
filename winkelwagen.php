<?php
session_start(); // Start de sessie

// Voeg producten toe aan de winkelwagen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Controleer of de winkelwagen al is aangemaakt
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Voeg het product toe aan de winkelwagen of update de hoeveelheid 
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = $quantity;
    }
}

// Verwijder een product uit de winkelwagen
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    if (isset($_SESSION['cart'][$remove_id])) {
        unset($_SESSION['cart'][$remove_id]);
    }
}

// Bereken het totaal aantal artikelen en de totale prijs
$total_items = 0;
$total_price = 0.00;

// Voorbeeld van productgegevens
$products = [
    1 => ["name" => "Tom Ford Oud Wood", "price" => 50.00, "image" => "images/tomford.jpg"],
    2 => ["name" => "Jean Paul", "price" => 75.00, "image" => "images/jean paul1.jpg"],
    3 => ["name" => "Gisada", "price" => 100, "image" => "images/bif.jpg"],
    // Voeg meer producten toe als dat nodig is
];

// Controleer of de winkelwagen leeg is
$cart_empty = empty($_SESSION['cart']);

// Bereken het totaal aantal artikelen en de totale prijs
foreach ($_SESSION['cart'] as $id => $quantity) {
    if (isset($products[$id])) { // Zorg ervoor dat het product bestaat
        $total_items += $quantity;
        $total_price += $products[$id]['price'] * $quantity;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen - Fragrance Store</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f3ef; /* Lichtbruin achtergrondkleur */
        }

        /* Navigatiebalk styling */
        .navbar {
            background-color: #8B4513; /* Donkerbruine kleur voor de navigatiebalk */
        }

        .navbar a {
            color: white !important;
        }

        /* Aankondigingsbalk styling */
        .announcement-bar {
            background-color: #d2b48c; /* Bruinige kleur */
            color: white;              /* Witte tekstkleur */
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        .cart-header {
            background-color: #d2b48c; /* Bruinige achtergrondkleur */
            color: #4b3621; /* Donkerbruine tekstkleur */
            padding: 20px;
        }

        .cart-header h2 {
            color: #4b3621;
        }

        .cart-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .cart-item img {
            max-width: 80px;
        }

        .cart-item .product-details {
            flex-grow: 1;
            padding-left: 20px;
        }

        .cart-summary {
            border-top: 2px solid #ddd;
            margin-top: 20px;
            padding-top: 20px;
        }

        .btn-remove {
            background-color: #8B4513;
            color: white;
        }

        .btn-remove:hover {
            background-color: #A0522D;
        }

        .btn-checkout {
            background-color: #4b3621;
            color: white;
        }

        .btn-checkout:hover {
            background-color: #6b4f31;
        }

        .cart-item p {
            color: #4b3621;
        }

        .cart-summary h4 {
            color: #4b3621;
        }

        .form-control {
            border-color: #4b3621;
        }

        .btn-discount {
            background-color: #8B4513; /* Bruine kleur voor de kortingscode knop */
            color: white;
        }

        .btn-discount:hover {
            background-color: #A0522D; /* Lichtere bruine kleur bij hover */
        }
    </style>
</head>
<body>

    <!-- Navigatiebalk -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="producten.php">Producten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="winkelwagen.php">Winkelwagen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="afrekenen.php">Afrekenen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="track-order.php">Track Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Aankondigingsbalk -->
    <div class="announcement-bar">
        🎉 CODE24 voor  €35 korting! 🎉
    </div>

    <!-- Winkelwagen gedeelte -->
    <div class="container mt-5">
        <div class="cart-header">
            <h2 class="text-center">Jouw Winkelwagen</h2>
        </div>
        <div class="cart-body">
            <?php if ($cart_empty): ?>
                <p class="text-center">Je winkelwagen is leeg.</p>
                <a href="producten.php" class="btn btn-primary">Bekijk Producten</a>
            <?php else: ?>
                <?php foreach ($_SESSION['cart'] as $id => $quantity): ?>
                    <?php
                    if (isset($products[$id])) { // Controleer of het product bestaat
                        $product_name = $products[$id]['name'];
                        $product_price = $products[$id]['price'];
                        $total_price_per_product = $product_price * $quantity;
                    ?>
                    <div class="cart-item row align-items-center">
                        <div class="col-md-2">
                            <img src="<?php echo $products[$id]['image']; ?>" alt="<?php echo $product_name; ?>">
                        </div>
                        <div class="col-md-4 product-details">
                            <h5><?php echo $product_name; ?></h5>
                            <p>€<?php echo number_format($product_price, 2, ',', '.'); ?></p>
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control quantity" value="<?php echo $quantity; ?>" min="1">
                        </div>
                        <div class="col-md-2">
                            <p class="text-right item-price">€<?php echo number_format($total_price_per_product, 2, ',', '.'); ?></p>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="?remove=<?php echo $id; ?>" class="btn btn-remove btn-sm">Verwijderen</a>
                        </div>
                    </div>
                    <?php } // Einde van de if ?>
                <?php endforeach; ?>

                <!-- Kortingcode -->
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" id="discount-code" class="form-control" placeholder="Voer kortingscode in...">
                    </div>
                    <div class="col-md-4 text-right">
                        <button class="btn btn-discount" onclick="applyDiscount()">Toepassen</button>
                    </div>
                </div>

                <!-- Samenvatting -->
                <div class="cart-summary row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4 text-right">
                        <h4 id="total-price">Totaal: €<?php echo number_format($total_price, 2, ',', '.'); ?></h4>
                        <a href="afrekenen.php" class="btn btn-checkout btn-lg btn-block">Afrekenen</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS en dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Functie om de totale prijs bij te werken
        function updateTotal() {
            let total = 0;
            const cartItems = document.querySelectorAll('.cart-item');
            cartItems.forEach(item => {
                const price = parseFloat(item.querySelector('.item-price').innerText.replace('€', '').replace(',', '.'));
                const quantity = item.querySelector('.quantity').value;
                total += price * quantity;
            });

            const discount = parseFloat(document.getElementById('discount-code').dataset.discount || 0);
            total -= discount; // Pas de korting toe

            // Update de weergegeven totaalprijs
            document.getElementById('total-price').innerText = `Totaal: €${total.toFixed(2).replace('.', ',')}`;
        }

        // Functie om de korting toe te passen
        // USER STORY 7 (Ayoub)
        function applyDiscount() {
            const discountCode = document.getElementById('discount-code').value;
            if (discountCode === 'CODE24') {
                const discountAmount = 35;
                document.getElementById('discount-code').dataset.discount = discountAmount;
                updateTotal();
                alert(`Korting van €${discountAmount} toegepast!`);
            } else {
                alert('Ongeldige kortingscode!');
            }
        }

        // Event listener voor hoeveelheid aanpassing
        document.querySelectorAll('.quantity').forEach(input => {
            input.addEventListener('change', updateTotal);
        });

        // Initieel totaal bijwerken
        updateTotal();
    </script>
</body>
</html>
