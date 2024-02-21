<?php
$link=new mysqli("localhost","root","","Car_rental");
$query="select * from klienci";
$result = $link->query($query);
echo $wynik = $result -> num_rows;
echo "<br>";
print_r($wynik=$result->fetch_assoc());
?>

<?php
$link=new mysqli("localhost","root","","Car_rental");
$query="select * from klienci";
$result = $link->query($query);
while($wynik=$result->fetch_assoc());
{
  print_r($wynik);
  echo '<br>';
}
?>

<?php
$link=new mysqli("localhost","root","","Car_rental");
$query="select * from klienci";


$result = $link->query($query);
while($wynik=$result->fetch_assoc()){
    echo $wynik['imie']." ".$wynik['nazwisko'];
    echo "<br>";
}
?>


<?php
$link=new mysqli("localhost","root","","Car_rental");
$query="select * from klienci";


$result = $link->query($query);
while($wynik=$result->fetch_row()){
    echo $wynik[0]." ".$wynik[1];
    echo "<br>";
}
?>

<?php
$link=new mysqli("localhost","root","","Car_rental");
$query="select * from klienci";


$result = $link->query($query);
while($wynik=$result->fetch_array()){
    echo $wynik[0]." ".$wynik['nazwisko'];
    echo "<br>";
}
?>

