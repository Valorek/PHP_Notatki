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
