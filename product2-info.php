<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gisada - Fragrance Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f3ef; /* Lichtbruin achtergrondkleur */
        }

        .navbar {
            background-color: #8B4513; /* Donkerbruine kleur voor de navigatiebalk */
        }

        .navbar a {
            color: white !important;
        }

        .announcement-bar {
            background-color: #d2b48c; /* Bruinige kleur */
            color: white; /* Witte tekstkleur */
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        .product-detail {
            margin-top: 20px;
        }

        .ingredienten-info {
            display: none;
            background-color: #f8f9fa; /* Lichtgrijze achtergrondkleur */
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 15px;
            margin-top: 10px;
        }

        .ingredienten-info p {
            margin: 0;
        }

        .btn-info {
            background-color: #8B4513; /* Donkerbruine kleur voor de info knop */
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-info:hover {
            background-color: #A0522D; /* Lichtere bruine kleur bij de hover */
        }

        .btn-primary {
            background-color: #8B4513; /* Donkerbruine kleur voor de voeg toe knop */
            border: none;
        }

        .btn-primary:hover {
            background-color: #A0522D; /* Lichtere bruine kleur bij hover */
        }

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

        /* Nieuwe klasse voor de button in het midden */
        .center-button {
            display: flex;
            justify-content: center;
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

    <!-- Product Detail Section -->
    <section class="product-detail py-5">
        <div class="container">
            <div class="row">
                <!-- Product Info -->
                <div class="col-md-6">
                    <img src="images/jean paul1.jpg" class="img-fluid" alt="Jean-Paul">
                </div>
                <div class="col-md-6">
                    <h2>Jean Paul Gaultier</h2>
                    <p>€75.00</p>
                    <p>Wanneer zeeman Le Male Elixir aan boord stapt, vallen de verhitte gemoederen niet meer te bedaren! De geur van Le Male Elixir van Jean Paul Gaultier is zo krachtig aan dek dat smeltend goud zijn onweerstaanbare torso in vlammende strepen doet oplaaien. Deze houtachtige aromatische amber parfum doet menig vurig verlangen op het onomkeerbare moment dat deze verslavende geur op zijn lichaam neerstrijkt! De zon draait door. Blakend van verlangen doet dit sensuele elixer onder zijn transparante bruine matrozentopje hemel en aarde bewegen. Houtachtige aromatische ambertoetsen definiëren deze intense geur.</p>
                    <form action="winkelwagen.php" method="post">
                        <div class="form-group">
                            <label for="quantity">Hoeveelheid:</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" min="1" value="1" required>
                            <input type="hidden" name="product_id" value="2"> <!-- Product ID -->
                        </div>
                        <div class="center-button">
                            <button type="submit" class="btn btn-primary">Voeg toe aan winkelwagen</button>
                        </div>
                    </form>
                    <button id="ingredienten-btn" class="btn-info mt-3">Ingredienten</button>
                    <div id="ingredienten-info" class="ingredienten-info">
                        <p>ALCOHOL DENAT., PARFUM (FRAGRANCE), AQUA (WATER), LINALOOL, COUMARIN, LIMONENE, BUTYL, METHOXYDIBENZOYLMETHANE, ALPHA, ISOMETHYL IONONE, CINNAMAL, CITRAL, GERANIOL, BENZYL BENZOATE, BENZYL ALCOHOL</p>
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
    <script>
        document.getElementById('ingredienten-btn').addEventListener('click', function() {
            var info = document.getElementById('ingredienten-info');
            if (info.style.display === 'none' || info.style.display === '') {
                info.style.display = 'block';
            } else {
                info.style.display = 'none';
            }
        });
    </script>
</body>
</html>
