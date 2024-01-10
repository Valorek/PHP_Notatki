<h1>Formularz</h1>
<form method="post">
<input type="text" name="utworz_nazwa" placeholder='nazwa ciasteczka'>
<br>
<input type="text" name="utworz_wartosc" placeholder='wartosc ciasteczka'>
<br>
<input type="submit" name="utworz_submit" value="Utwórz ciasteczko">
<br>
<br>
<input type="text" name="sprawdz_nazwa" placeholder='nazwa ciasteczka'>
<input type="submit" name="sprawdz_submit" value="Sprawdź zawartość ciasteczka">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['utworz_submit'])){
    $nazwa=$_POST['utworz_nazwa'];
    $wartosc=$_POST['utworz_wartosc'];
    setcookie($nazwa,$wartosc,time()+3600);
    echo("Pomyślnie utowrzyłeś ciasteczko!");
    }
if (isset($_POST['sprawdz_submit'])) {
    $nazwa = $_POST['sprawdz_nazwa'];
        if (isset($_COOKIE[$nazwa])) {
            $wartosc = $_COOKIE[$nazwa];
            echo("Zawartosc ciasteczka: $nazwa=$wartosc");
        }else {
            echo("Blad, ciasteczko nie istnieje");
        }
    }
}
?>
