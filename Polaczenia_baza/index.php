<?php
$link =@mysqli_connect("localhost","root","","Car_rental");
// if(!$link)
// {
//     echo "Blad";
// }else{
//     echo "Polaczenie ok!";
// }

$query="select * from Klienci";
$result =mysqli_query($link,$query);
echo $wynik = mysqli_num_rows($result);
echo '<br>';
$wynik=mysqli_fetch_assoc($result);
$wynik=mysqli_fetch_row($result);
$wynik=mysqli_fetch_array($result);
print_r($wynik);

// $link1=new mysqli('localhost','root','','Car_rental');
// if($link1->connect_error)
// {
//     echo 'Failed to connect to MySQL:' . $link1 -> connect_error;
//     exit();
// }
// else{
//     echo "Polaczenie ok!";
// }





?>

<?php
//wywolywanie wszystkich rekordow jako tablice
$link =@mysqli_connect("localhost","root","","Car_rental");

$query="select * from Klienci";
$result =mysqli_query($link,$query);
while ($wynik=mysqli_fetch_assoc($result))
{
print_r($wynik);
echo "<br>";
}
?>


<?php
//wywolywanie poszczegolnych danych z rekordu za pomoca assoc 
$link =@mysqli_connect("localhost","root","","Car_rental");

$query="select * from Klienci";
$result =mysqli_query($link,$query);
$wynik=mysqli_num_rows($result);

while ($wynik=mysqli_fetch_assoc($result))
{
    echo ($wynik['imie'].' '.$wynik['nazwisko']);
    echo '<br>';
}
?>
