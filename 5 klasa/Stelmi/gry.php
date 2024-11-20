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
    <table>
        <tr>
            <th>Tytuł</th>
            <th>Gatunek</th>
            <th>Rok produkcji</th>
        </tr>
        <?php
        $zapytanie='SELECT Tytul,Gatunek,Rok_Produkcji FROM gry';
        $sql=mysqli_query($conn,$zapytanie);

        while($wiersz=mysqli_fetch_array($sql))
        {
            echo "<tr>";
                echo "<td>".$wiersz['0']."</td>";
                echo "<td>".$wiersz['1']."</td>";
                echo "<td>".$wiersz['2']."</td>";
            echo "</tr>";
        }
        mysqli_close($conn);
        ?>

    </table>
    <h3><a href='index.php'>Powrót</a></h3>
    
</body>
</html>