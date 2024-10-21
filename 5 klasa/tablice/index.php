<?php
// $tab=array(2,4,6,76,89,100);
// for($i=0;$i<6;$i++){
//     echo $tab[$i].", ";
// }

// $licznik=0;
// $tab1 = array();
// $suma = 0;


// for ($i = 0; $i < 5; $i++) {
//     $tab1[$i] = rand(1, 20); 
//     echo "<br>".$tab1[$i].", ";
//     if($tab1[$i]%3==0)
//     {
//         $suma += $tab1[$i];
//         echo "<br>".$tab1[$i].", ";
//         $licznik++;

//     }
   

// }
// echo "<br> Suma elementow tablicy wynosi: ", $suma;
// echo"<br> Liczb podzielnych przez 3 jest: ".$licznik;



// $tab=array();
// for ($i=0;$i<5;$i++){
//     $tab[$i]=rand(1,20);
//     echo $tab[$i].", ";

// }

// $min=$tab[0];

// $max=$tab[0];

// for ($i=0;$i<5;$i++)
// {
//     if($tab[$i]<$min){
//     $min=$tab[$i];
//     }

// }


// for ($i=0;$i<5;$i++)
// {
//     if($tab[$i]>$max){
//     $max=$tab[$i];
//     }
    
// }

// echo "Najwieksza: ".$max;
// echo "Najmniejsza: ".$min;



$tablica["imie"]="Jan";
$tablica["nazwisko"]="Kowalski";
$tablica["adres"]="Polna";
echo $tablica["imie"]." ".$tablica["nazwisko"].", ul. ".$tablica["adres"];


// $tab[0] = array("miejscowosc" => "Warszawa", "zaludnienie" => 2000000);
// $tab[1] = array("miejscowosc" => "Krakow", "zaludnienie" => 600000);  // Poprawiono zaludnienie
// $tab[2] = array("miejscowosc" => "Poznan", "zaludnienie" => 100000);
// $tab[3] = array("miejscowosc" => "Katowice", "zaludnienie" => 600000);  // Poprawiono zaludnienie
// $tab[4] = array("miejscowosc" => "Torun", "zaludnienie" => 500000);
// $tab[5] = array("miejscowosc" => "Bialystok", "zaludnienie" => 650000);  // Poprawiono zaludnienie

// for($i = 0; $i <= 5; $i++) {
//     if ($tab[$i]["zaludnienie"] >= 600000 && $tab[$i]["zaludnienie"] <= 700000) {
//         echo $tab[$i]["miejscowosc"] . "<br>";
//     }
// }


// $tab=array("poniedzialek","wtorek","sroda","czwartek","piatek","sobota","niedziela");

// foreach($tab as $item)
// {
//     echo $item," ";
// }


// $tab=array(
//     "dzien 1"=>"poniedzialek",
//      "dzien 2"=>"wtorek",
//      "dzien 3"=>"sroda",
//      "dzien 4"=>"czwartek",
//      "dzien 5"=>"piatek",
//      "dzien 6"=>"sobota",
//      "dzien 7"=>"niedziela");
//      foreach($tab as $item=>$description)
//      {
//         echo $item,": ", $description,"<br>";
//      }


// $tab=array();
// $a=4;
// for($i=0;$i<10;$i++)
// {
//     $tab[$i]=rand(1,10);
//     echo $i, " = ",$tab[$i], "<br>";
// }
// if(in_array($a,$tab)){echo "jest";}
// else{echo "No nie ma";}



?>
