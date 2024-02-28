<?php
$link=new mysqli("localhost","root","","Car_rental");
mysqli_set_charset($link,"utf8");
$query="INSERT INTO `Klienci` (`klient_id`, `imie`, `nazwisko`, `nr_telefonu`, `email`) VALUES ('5', 'Testowny', 'Tester', '420-420-420', 'essaleczu@gmail.com')";
$e=mysqli_query($link,$query) or die(mysqli_error($e));
mysqli_close($link);
?>
