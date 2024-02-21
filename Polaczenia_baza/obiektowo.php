<?php
$link=new mysqli("localhost","root","","Car_rental");
$query="select * from klienci";
$result = $link->query($query);
echo $wynik = $result -> num_rows;

?>
