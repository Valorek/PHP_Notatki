<?php
$serwer='localhost';
$user='root';
$haslo='';
$dbname='sklep';

$conn=mysqli_connect($serwer,$user,$haslo,$dbname);



if(!$conn){
    echo "błąd połączenia!";
}
else
{
echo "Sukces połączenia!";


}



?>