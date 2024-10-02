<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jean Paul - Fragrance Store</title>
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
            background-color: #8B4513; /* Donkerbruine kleur voor info knop */
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-info:hover {
            background-color: #A0522D; /* Lichtere bruine kleur bij hover */
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
        🎉 Korting bij bestellingen boven €35! 🎉
    </div>

    <!-- Product Detail Section -->
    <section class="product-detail py-5">
        <div class="container">
            <div class="row">
                <!-- Product Info -->
                <div class="col-md-6">
                    <img src="images/tomford.jpg" class="img-fluid" alt="Tom ford Oud wood">
                </div>
                <div class="col-md-6">
                    <h2>TomFord</h2>
                    <p>€50.00</p>
                    <p>Tom Ford Tobacco Vanille werd gelanceerd in 2007. Olivier Gillotin is de neus achter deze kruidige compositie. Hij opent de geur met een spicy mix met onder andere tabaksplantblad. Cacao is in het hart samengevoegd met tonkabonen, vanille en tabaksplantbloesem.</p>
                    <form action="winkelwagen.php" method="post">
                        <div class="form-group">
                            <label for="quantity">Hoeveelheid:</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" min="1" value="1" required>
                            <input type="hidden" name="product_id" value="1"> <!-- Product ID -->
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
        <p>Adres: Westcoast</p>
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
