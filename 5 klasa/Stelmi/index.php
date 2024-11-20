<?php
    $serwer='localhost';
    $user='root';
    $haslo='';
    $baza='gierki';

    $conn=mysqli_connect($serwer,$user,$haslo,$baza);
    if(!$conn)
    {
        echo "blad polaczenia";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h3>Metoda: FETCH ARRAY</h3>
    <?php
        $zapytanie='SELECT count(gry.id) as ile FROM gry; ';

        $sql=mysqli_query($conn,$zapytanie);

        $wiersz=mysqli_fetch_array($sql);
        echo "<p>"."Ilosc "."<a href='gry.php'>". "gatunków"."</a>"." w bazie wynosi ".$wiersz['0']."</p>";

    ?>
   
    <h3>Metoda: FETCH ASSOC</h3>
    <?php
        $zapytanie2='SELECT count(szczegóły.id) as ile FROM szczegóły; ';

        $sql2=mysqli_query($conn,$zapytanie2);

        $wiersz2=mysqli_fetch_assoc($sql2);
        echo "<p>"."Ilosc "."<a href='szczegoly.php'>". "gatunków"."</a>"." w bazie wynosi ".$wiersz2['ile']."</p>";

    ?>
    <h3>Metoda: NUM ROWS</h3>
    <?php
        $zapytanie3='SELECT * FROM `twórcy`;';

        $sql3=mysqli_query($conn,$zapytanie3);

        $wiersz3=mysqli_num_rows($sql3);
        echo "<p>"."Ilosc "."<a href='tworcy.php'>". "gatunków"."</a>"." w bazie wynosi ".$wiersz3."</p>";
    mysqli_close($conn);
    ?>

    
</body>
</html>
