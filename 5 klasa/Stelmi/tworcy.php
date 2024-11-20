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
            <th>Twórca</th>
        </tr>
        <?php
        $tworcy_array=[];
        $zapytanie='SELECT Tytul,Twórca FROM twórcy';
        $sql=mysqli_query($conn,$zapytanie);

        while($wiersz=mysqli_fetch_array($sql))
        {
            $tworcy_array[]=$wiersz;
        }
        mysqli_close($conn);

        foreach ($tworcy_array as $wiersz) {
            echo "<tr>";
            echo "<td>" .$wiersz['Tytul'] . "</td>";
            echo "<td>" .$wiersz['Twórca'] . "</td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    <h3><a href='index.php'>Powrót</a></h3>
    
</body>
</html>