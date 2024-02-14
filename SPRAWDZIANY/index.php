<form method='post'>
<label for='fraza'>Twoja fraza:</label>
<input type='text' name="dane" placeholder='Wpisz swoją fraze'>
<button  type='submit' name='dodaj' value='dodaj'>Wyslij</button>



</form>


<?php
if(isset($_POST['dodaj']))
{
    $nowy_wiersz='';
    $nowy_wiersz.=$_POST["dane"];
    $nowy_wiersz.="\n";
    $plik=fopen('dane.txt','a');
    fwrite($plik,$nowy_wiersz);
    fclose($plik);
}

$pliczek=fopen("dane.txt",'r');
while (!feof($pliczek)) {
    $literka=fgetc($pliczek);
    $plik2=fopen('wynik.txt','a');
    fwrite($plik2,$literka."\n");
    fclose($plik2);
}
fclose($pliczek);

?> 


