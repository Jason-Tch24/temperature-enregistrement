<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement des Températures</title>

    <!-- Intégration de Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        /* Ajoutez du style */
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Enregistrement des Températures</h2>

        <?php
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=temperature_database', 'user', 'password');

        // Récupération des enregistrements depuis la base de données
        $stmt = $pdo->query("SELECT * FROM temperatures ORDER BY date_recorded DESC");

        echo "<h3>Liste des enregistrements :</h3>";

        if ($stmt->rowCount() > 0) {
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Date</th>";
            echo "<th>Température (Celsius)</th>";
            echo "<th>Température (Fahrenheit)</th>";
            echo "<th>Température (Kelvin)</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>{$row['date_recorded']}</td>";
                echo "<td>{$row['temperature_celsius']}</td>";
                echo "<td>{$row['temperature_fahrenheit']}</td>";
                echo "<td>{$row['temperature_kelvin']}</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>Aucun enregistrement trouvé.</p>";
        }
        ?>
        <div style="position: relative; width: 100%; height: 0; padding-top: 141.4286%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">

    <!-- Intégration de Bootstrap JS et dépendances -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
