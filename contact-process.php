<?php
// Verbind met de database
$pdo = new PDO('mysql:host=localhost;dbname=1', 'root', '');

// Ontvang ingevoerde gegevens van het formulier
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Informatie naar database sturen
$stmt = $pdo->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
$stmt->execute([$name, $email, $message]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Bedankt - Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f3ef; /* Lichtbruine achtergrondkleur */
        }

        /* Navigatiebalk styling */
        .navbar {
            background-color: #8B4513; /* Donkerbruine kleur voor de navigatiebalk */
        }

        .navbar .navbar-brand, .navbar .nav-link {
            color: white !important; /* Witte tekstkleur voor de links */
        }

        .navbar .nav-link:hover {
            color: #d2b48c !important; /* Lichtbruin bij hover */
        }

        /* Schuif de navigatiebalk naar rechts */
        .navbar .navbar-nav {
            margin-left: auto; /* Zorg ervoor dat de navigatiebalk naar rechts schuift */
        }

        .content {
            padding: 50px 0; /* Ruimte voor de inhoud */
        }

        /* Knop styling */
        .btn-primary {
            background-color: #8B4513; /* Donkerbruine kleur voor de knop */
            border: none;
        }

        .btn-primary:hover {
            background-color: #A0522D; /* Lichtere bruine kleur bij hover */
        }

        /* Tabel styling */
        table {
            width: 100%;
            background-color: #fff; /* Witte achtergrond voor de tabel */
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd; /* Lichte grijze border */
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #8B4513; /* Donkerbruine kleur voor de koppen */
            color: white; /* Witte tekstkleur */
        }

        /* Footer styling */
        .footer {
            background-color: #8B4513; /* Donkerbruine kleur voor de footer */
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 50px; /* Ruimte boven de footer */
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navigatiebalk -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
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
        </div>
    </nav>

    <!-- Content Sectie -->
    <section class="content">
        <div class="container">
            <h2>Bedankt voor uw bericht!</h2>
            <p>We hebben uw bericht ontvangen en zullen zo snel mogelijk contact met u opnemen. Hieronder vindt u een overzicht van de door u ingevoerde gegevens:</p>

            <!-- Tabel met contactgegevens -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Veld</th>
                        <th>Ingevoerde informatie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Naam</td>
                        <td><?php echo htmlspecialchars($name); ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo htmlspecialchars($email); ?></td>
                    </tr>
                    <tr>
                        <td>Bericht</td>
                        <td><?php echo nl2br(htmlspecialchars($message)); ?></td>
                    </tr>
                </tbody>
            </table>

            <a href="index.php" class="btn btn-primary">Terug naar Home</a>
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

    <!-- Bootstrap JS en dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
