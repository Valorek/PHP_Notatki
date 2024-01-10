<h1>Formularz</h1>
<form method="post">
    <input type="submit" name="klik" value="klik">
</form>

<?php
$liczba_klikniec = 0;

if(isset($_COOKIE['liczba_klikniec'])){
    $liczba_klikniec = $_COOKIE['liczba_klikniec'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $liczba_klikniec++;
    setcookie('liczba_klikniec', $liczba_klikniec, time() + 3600);
    echo($liczba_klikniec);
}
?>
