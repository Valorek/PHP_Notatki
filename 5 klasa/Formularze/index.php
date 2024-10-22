<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
        <label for="imie">Imie</label>
        <input type="text" name="imie">
        <br>
        <br>
        <label for="wiek">Wiek</label>
        <input type="number" name="wiek" id="wiek">
        <br>
        <label for="plec">Plec</label>
        <br>
        <input type="radio" name="plec" value="mezczyzna">Mezczyzna
        <br>
        <input type="radio" name="plec" value="kobieta">kobieta
        <br>
        <label for="kolor">Ulubiony kolor</label>
        <br>
        <select id="kolor" name="kolor">
            <option value="--wybierz--"></option>
            <option value="zielony">zielony</option>
            <option value="zolty">zolty</option>
            <option value="niebieski">niebieski</option>
        </select>
        <br>
        <label for="gry">Ulubiona seria gier</label>
        <br>
        <input type="checkbox" name="gry[]" value="GTA">GTA
        <input type="checkbox" name="gry[]" value="FIFA">FIFA
        <input type="checkbox" name="gry[]" value="Battlefield">Battlefield
        <br>
        <input type="submit" value="wyslij">

    </form>
    
</body>
</html>

<?php
$imie=$_POST["imie"];
echo $imie;

$wiek=(int)$_POST['wiek'];
echo $wiek;

if($_POST["plec"]=="mezczyzna"){
    echo "Wybrana plec: mezczyzna";
}else
{
    echo "Wybrana plec: Kobieta";
}

echo "Wybrany kolor: ".$_POST['kolor'];

$gry=$_POST['gry'];
foreach($gry as $game){
    echo "$game, ";
}

?>
