<?php
function srednia($suma,$ilosc){
    $srednia=round($suma/$ilosc);
    return $srednia;
}
$a=56;
$b=4;
echo srednia($a,$b);
echo('<br>');
echo srednia($b,$a);
echo('<br>');
echo srednia($a,5);
echo('<br>');

?>

<?php
function sred()
{
    echo('<br>');
    print_r(func_num_args());
}
sred(1,5,42,3);

?>

<?php
function s(){
$total=0;
foreach(func_get_args() as $value)
{
    $total +=(int)$value;
}
return $total;
}
echo('<br>');
echo s(1,3,42)



?>

<?php
function medium(){
$wartosc=0;
foreach(func_get_args() as $element){
    $wartosc +=(int)$element;
}
$wynik = round($wartosc/func_num_args());
return $wynik;  
}


echo('<br>');
echo medium(1,2,3,4,5);
echo('<br>');


?>

<?php
function rownanie($a,$b,$c){
$delta=($b*$b)-(4*$a*$c);
if($delta>0){
    $x1=(-$b-sqrt($delta))/(2*$a);
    $x2=(-$b+sqrt($delta))/(2*$a);
    $wynik=array($x1,$x2);
    return $wynik;

}
else{
    if($delta==0){
    $x0=(-$b)/(2*$a);
    $wynik=$x0;
    return $wynik;
    }
else {
       return null;
    }
}
}

$a=5;
$b=0;
$c=20;
if(is_array(rownanie($a,$b,$c)))
echo("x1= ".round(rownanie($a,$b,$c)[0],2)."<br>" . "x2= ".round(rownanie($a,$b,$c)[1],2 ));
else if(rownanie($a,$b,$c)!=null){
    echo("x0= " . round(rownanie($a,$b,$c),2));
  
}
else{
    echo("brak rozwiązania");
}
?>







<?php
function sortowanie($tablica) {
    $n = count($tablica);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($tablica[$j] > $tablica[$j + 1]) {
                $change = $tablica[$j];
                $tablica[$j] = $tablica[$j + 1];
                $tablica[$j + 1] = $change;
            }
        }
    }
    return $tablica;
}

$tablica = array(2, 5, 6, 32, 6, 7, 3, 9);
$posortowana = sortowanie($tablica);
echo("<br>");
echo("PRZED POSORTOWANIEM: ");
foreach ($tablica as $przed) {
    echo ", ".$przed;
}
echo("<br>");
echo("PO POSORTOWANIU: ");
foreach ($posortowana as $po) {
    echo ", ".$po;
}

echo("<br>");
print_r($tablica);
echo("<br>");
print_r($posortowana);
?>

<?php
function trapez($a,$b,$h,$p)
{
    
if($a<=0||$b<=0||$h<=0){
    return 0;
}
else {
$p=($a+$b)*$h/2;
return array('a'=>$a,'b'=>$b,'h'=>$h,'p'=>$p);
}


}
$a = 6;
$b = 2;
$h = 3;
$p=0;
$wynik = trapez($a, $b, $h,$p);

if($wynik==0){
    echo("blad xpp");
}
else
{
foreach ($wynik as $essa) {
    echo(", ".$essa);
}
}
?>


<?php

function wypis($x,$y)
{
    $table=array();
    $sum=0;
    for($i=$x;$i<=$y;$i++){
        $table[]=$i;
        $sum+=$i;   
    }

    echo("<br>");
    foreach($table as $test){
        echo(', '.$test);
    }
    echo("<br>");
    echo("SUMA: ". $sum);
}

wypis(5,10);


?>
