<?php
// $link =@mysqli_connect("localhost","root","","rental");
// if(!$link)
// {
//     echo "Blad";
// }else{
//     echo "Polaczenie ok!";
// }


$link1=new mysqli('localhost','root','','Car_rental');
if($link1->connect_error)
{
    echo 'Failed to connect to MySQL:' . $link1 -> connect_error;
    exit();
}
else{
    echo "Polaczenie ok!";
}
?>
