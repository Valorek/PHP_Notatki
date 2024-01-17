<?php
$txt=fopen("licznik.txt","r");
$txt_drugi=fgets($txt);
fclose($txt);
$txt_drugi++;
$txt=fopen("licznik.txt","w");
fwrite($txt,$txt_drugi);
fclose($txt);

?>



<?php
$dane=fopen("dane.txt","r");
$id=fgets($dane);
fclose($dane);
echo("Twoje dane to:".$id);
?>


<form method="post">
    <label for="login">Login:</label>
    <input type="text" name="login" placeholder="wprowadz login">
    <label for="password">Hasło:</label>
    <input type=text name="haslo" placeholder="wprowadz haslo">
    <label for="date">Data:</label>
    <input type="date" name="data">
    <input type="submit" name="dodaj" value="dodaj">
</form>

<?php
if(isset($_POST['dodaj']))
{
    $nowy_wiersz ="";
    $nowy_wiersz .=$_POST['login'];
    $nowy_wiersz .=",";
    $nowy_wiersz .=$_POST['haslo'];
    $nowy_wiersz .=",";
    $nowy_wiersz .=$_POST['data'];
    $nowy_wiersz .="\n";

    $plik=fopen("users.txt","a");
    fwrite($plik,$nowy_wiersz);
    fclose($plik);
}

?>



<?php

//przyklad zastosowania funkcji file() która zamienia poszczególną linijke pliku tekstowego na tablice o ilosci indeksow rownej ilosci linijek

$test=file("users.txt");

echo "testowanie: ".$test[5];

// foreach($test as $wartosc){
//     echo $wartosc."<br>";
// }

// ======================================================


//przyklad zastosowania funkcji explode() rozkłada podane dane na tablice
echo("<br>");
$zm="ANKA MA KOTA I KOSA";
$tab=explode('K',$zm);

echo $tab[3]."<br>";
foreach($tab as $wynik){
    echo($wynik."<br>");
}

//==========================================================


?>
