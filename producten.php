<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten - Le Fragrance</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
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

        /* Product kaart styling */
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            background-color: #fff; /* Witte achtergrond voor kaarten */
        }

        .card:hover {
            transform: scale(1.05);
        }

        /* Knop styling */
        .btn-primary {
            background-color: #8B4513; /* Donkerbruine kleur voor de knop */
            border: none;
        }

        .btn-primary:hover {
            background-color: #A0522D; /* Lichtere bruine kleur bij hover */
        }

        /* Footer styling */
        .footer {
            background-color: #8B4513; /* Donkerbruine kleur voor de footer */
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 50px; /* Ruimte boven de footer */
        }

        .footer h5 {
            margin: 0;
            font-weight: bold;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer a {
            color: white; /* Witte kleur voor links in de footer */
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline; /* Onderstreep link bij hover */
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
    🎉 CODE24 voor €35 korting! 🎉
    </div>

    <!-- Products Section -->
    <section class="products py-5">
        <div class="container">
            <h2 class="text-center mb-4">Onze Producten</h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/tomford.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Tom ford</h5>
                            <p class="card-text">€50.00</p>
                            <a href="product1-info.php" class="btn btn-primary">Meer info</a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/jean paul1.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Jean Paul</h5>
                            <p class="card-text">€75.00</p>
                            <a href="product2-info.php" class="btn btn-primary">Meer info</a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/bif.jpg" class="card-img-top" alt="Product 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Gisada</h5>
                            <p class="card-text">€100.00</p>
                            <a href="product3-info.php" class="btn btn-primary">Meer info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="footer">
        <h5>Bedrijf Informatie</h5>
        <p>Adres: Tilted Towers</p>
        <p>Telefoon: +31 6 12345678</p>
        <p>Email: info@parfumboutique.nl</p>
        
        <h5>Volg Ons</h5>
        <p>
            <a href="#">Facebook</a> | 
            <a href="#">Instagram</a> | 
            <a href="#">Twitter</a>
        </p>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
