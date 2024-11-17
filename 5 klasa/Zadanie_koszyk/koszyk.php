<?php
session_start();

if (!isset($_SESSION['koszyk'])) {
    $_SESSION['koszyk'] = [];
}

if(!empty($_POST['produkt']))
{
    $produkt = $_POST['produkt'];
 }
else
{
    $produkt='';
}
if(!empty($_POST['produkt']))
{
    $cena = $_POST['cena'];
}
else
{
    $cena='';
}
$_SESSION['koszyk'][] = [
    'produkt' => $produkt,
    'cena' =>$cena
        ];

if (isset($_GET['akcja']) && $_GET['akcja'] === 'wyczysc') {
    $_SESSION['koszyk'] = []; 

}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Koszyk</title>
</head>
<body>
    <h1>Twój koszyk</h1>

    <?php 
    
    if (!empty($_SESSION['koszyk']) && is_array($_SESSION['koszyk'])): 
        
        ?>
        <table>
            <tr>
                <th>Produkt</th>
                <th>Cena</th>
            </tr>
            <?php 
            foreach ($_SESSION['koszyk'] as $pozycja): 
            ?>
                    <tr>
                        <td><?php echo htmlspecialchars($pozycja['produkt']); ?></td>
                        <td><?php echo htmlspecialchars($pozycja['cena']); ?> PLN</td>
                    </tr>
            <?php endforeach; ?>
        </table>
        <h3>Łączna kwota: 
            <?php
            $suma = array_sum(array_column($_SESSION['koszyk'], 'cena'));
            echo $suma . " PLN";
            ?>
        </h3>
        <a href="koszyk.php?akcja=wyczysc" style="color:red;">Wyczyść koszyk</a>
    <?php else: ?>
        <p>Koszyk jest pusty.</p>
    <?php endif; ?>

    <h3><a href="index.php">Wróć do sklepu</a></h3>
</body>
</html>
