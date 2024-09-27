<?php
session_start();

// Controleer of de winkelwagen niet leeg is
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header('Location: winkelwagen.php'); // Stuur gebruiker terug naar winkelwagen als deze leeg is
    exit;
}

// Voorbeeld productgegevens
$products = [
    1 => ["name" => "Tom Ford Oud Wood", "price" => 50.00],
    2 => ["name" => "Jean Paul", "price" => 75.00],
];

// Bereken het totaal van de winkelwagen
$total_price = 0.00;
foreach ($_SESSION['cart'] as $id => $quantity) {
    if (isset($products[$id])) {
        $total_price += $products[$id]['price'] * $quantity;
    }
}

// Kortingscode logica
$discount = 0;
if (isset($_POST['discount_code']) && $_POST['discount_code'] === 'CODE24') {
    $discount = 35.00;
    $total_price -= $discount;
    if ($total_price < 0) {
        $total_price = 0; // Voorkom negatieve totaalprijs
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afrekenen - Le Fragrance</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f3ef; /* Lichtbruine achtergrondkleur */
        }

        .navbar {
            background-color: #8B4513;
        }

        .navbar a {
            color: white !important;
        }

        .announcement-bar {
            background-color: #f5deb3;
            color: #5d4037;
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        .checkout {
            padding: 50px 0;
        }

        .checkout h2 {
            color: #4b3621;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group label {
            color: #4b3621;
        }

        .btn-primary {
            background-color: #8B4513;
            border: none;
        }

        .btn-primary:hover {
            background-color: #A0522D;
        }

        .footer {
            background-color: #d2b48c;
            color: #4b3621;
            text-align: center;
            padding: 15px 0;
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
        🎉 Gebruik de code 'CODE24' voor €35 korting! 🎉
    </div>

    <!-- Checkout Section -->
    <section class="checkout py-5">
        <div class="container">
            <h2>Afrekenen</h2>
            <form action="bevestiging.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Persoonlijke informatie -->
                        <div class="form-group">
                            <label for="name">Naam</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Adres</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Stad</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Winkelwagen samenvatting -->
                        <h4>Jouw Bestelling</h4>
                        <p>Subtotaal: €<?php echo number_format($total_price + $discount, 2, ',', '.'); ?></p>
                        <p>Korting: €<?php echo number_format($discount, 2, ',', '.'); ?></p>
                        <h5>Totaal: €<?php echo number_format($total_price, 2, ',', '.'); ?></h5>

                        <!-- Kortingscode -->
                        <div class="form-group">
                            <label for="discount_code">Kortingscode</label>
                            <input type="text" class="form-control" id="discount_code" name="discount_code" placeholder="Voer kortingscode in...">
                        </div>

                        <!-- Betaalmethoden -->
                        <h4>Betaalmethoden</h4>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="creditcard" value="creditcard" required>
                                <label class="form-check-label" for="creditcard">
                                    Creditcard
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="paypal" value="paypal">
                                <label class="form-check-label" for="paypal">
                                    PayPal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="ideal" value="ideal">
                                <label class="form-check-label" for="ideal">
                                    iDEAL
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Bestelling Bevestigen</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Le Fragfrance. Alle rechten voorbehouden.</p>
    </footer>

    <!-- Bootstrap JS en dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
