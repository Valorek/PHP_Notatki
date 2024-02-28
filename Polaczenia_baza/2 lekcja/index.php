<?php
$link=new mysqli("localhost","root","","Car_rental");
mysqli_set_charset($link,"utf8");
$query="INSERT INTO `Klienci` (`klient_id`, `imie`, `nazwisko`, `nr_telefonu`, `email`) VALUES ('5', 'Testowny', 'Tester', '420-420-420', 'essaleczu@gmail.com')";
$e=mysqli_query($link,$query) or die(mysqli_error($e));
mysqli_close($link);
?>

==================================================================

<form method='post'>
    <label for='id'>klient_id</label>
    <input type='text' name='klient_id' placeholder='klient_id'>
    <label for='name'>imie</label>
    <input type='text' name='name' placeholder='imie'>
    <label for='nazwisko'>nazwisko</label>
    <input type='text' name='nazwisko' placeholder='nazwisko'>
    <label for='telefon'>nr_telefonu</label>
    <input type='text' name='telefon' placeholder='nr_telefonu'>
    <label for='email'>email</label>
    <input type='text' name='email' placeholder='email'>
    <input type='submit'>
</form>


<?php
$link=new mysqli("localhost","root","","Car_rental");
mysqli_set_charset($link,"utf8");
$id=$_POST['klient_id'];
$imie=$_POST['name'];
$nazwisko=$_POST['nazwisko'];
$telefon=$_POST['telefon'];
$email=$_POST['email'];
$query="INSERT INTO `Klienci` (`klient_id`, `imie`, `nazwisko`, `nr_telefonu`, `email`) VALUES ('$id', '$imie', '$nazwisko', '$telefon', '$email')";
$myQuery=mysqli_query($link,$query);
if($myQuery==false)
{
    echo('QUERY NON SENS');
}
else
{
    echo("Wpis duany");
}
mysqli_close($link);
?>

=========================================================

<?php
$link = new mysqli("localhost", "root", "", "Car_rental");
mysqli_set_charset($link, "utf8");

$query = "UPDATE `Klienci` SET `klient_id` = '20' WHERE `nazwisko` = 'Ohman'";
$myQuery= mysqli_query($link, $query);
if($myQuery==false)
{
    echo('QUERY NON SENS');
}
else
{
    echo('Wpis udany');
}

mysqli_close($link);
?>


===========================================================


<?php
$link = new mysqli("localhost", "root", "", "Car_rental");
mysqli_set_charset($link, "utf8");

$query = "DELETE FROM `Klienci` WHERE `klient_id` = '6'";
$myQuery= mysqli_query($link, $query);
if($myQuery==false)
{
    echo('QUERY NON SENS');
}
else
{
    echo('Wpis wyjebany');
}

mysqli_close($link);
?>

=========================================================

<?php
echo '<a href=wf.php?';
echo 'r=';
echo $row[0];
echo '&=';
echo 's=';
echo $row[1];
echo '>';
echo 'Edytuj';
echo '</a>';
?>

