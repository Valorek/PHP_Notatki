<?php
require_once "conn.php";
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Super sklep</title>
</head>
<body>
    <h1>Super sklep!</h1>
    <table>
        <tr>
            <th>Produkt</th>
            <th>Cena</th>
        </tr>
        <?php
        $zapytanie = "SELECT produkt, cena FROM produkty";
        $sql = mysqli_query($conn, $zapytanie);

        while ($wiersz = mysqli_fetch_assoc($sql)) {
            echo "<tr>";
            echo "<td>" . $wiersz["produkt"] . "</td>";
            echo "<td>" . $wiersz["cena"] . " PLN</td>";
            echo "<td>";
            echo "<form action='koszyk.php' method='post' style='display:inline;'>";
            echo "<input type='hidden' name='produkt' value='" . $wiersz["produkt"] . "'>";
            echo "<input type='hidden' name='cena' value='" . $wiersz["cena"] . "'>";
            echo "<input type='submit' value='Kup'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <h3><a href="koszyk.php">Koszyk</a></h3>
</body>
</html>
