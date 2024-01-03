<?php


//ustawianie ciasteczka
$value='co wpisze to mam';
setcookie("TestCookie",$value,time()+3600);
setcookie("TestCookie1",$value,time()+3600);
setcookie("TestCookie2",$value,time()+3600);

//wyswietlanie ciasteczka
echo $_COOKIE["TestCookie"];
print_r($_COOKIE);

//'usuwanie' ciasteczka

setcookie("TestCookie1",false,-3600);



//cwiczenie

$imie = 'Wiktor';

if(isset($_COOKIE['Zadanie'])) {
    $ostatnieWidzenie = $_COOKIE['Zadanie'];
    echo "Witaj $imie, ostatni raz widzieliśmy się $ostatnieWidzenie";
} else {
    echo "Nie było cię tu jeszcze";
    $data = date('Y-m-d H:i:s');
    setcookie('Zadanie', $data, time() + (86400 * 30), "/"); 
}

?>
