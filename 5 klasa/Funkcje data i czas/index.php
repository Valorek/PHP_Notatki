<?php
// echo time();
// echo "<br>";
// $data=getdate();
// $dzien=$data["mday"];
// $miesiac=$data["mon"];
// $rok=$data["year"];
// $godzina=$data["hours"];
// $minuta=$data["minutes"];
// $sekunda=$data["seconds"];
// if($dzien<10) $dzien="0".$dzien;
// if($miesiac<10) $miesiac="0".$miesiac;
// if($godzina<10) $godzina="0".$godzina;
// if($minuta<10) $minuta="0".$minuta;
// if($sekunda<10) $sekunda="0".$sekunda;

// echo "Biezaca data to: $dzien-$miesiac-$rok r. <br>";
// echo "Aktualna godzina  to: $godzina:$minuta:$sekunda";

// echo date("y-m-d"),"<br>";
// echo date("d-m-Y"),"<br>";
// echo date("G-i-s"),"<br>";
// echo date("H-i-s a"),"<br>";
// echo date("Y-m-d G-i-s"),"<br>";
// $dzien = date("D");
// switch ($dzien) {
//     case 'Mon':
//         echo "Dzis jest Poniedzialek";
//         break;
//     case 'Tue':
//         echo "Dzis jest Wtorek";
//         break;
//     case 'Wed':
//         echo "Dzis jest Sroda";
//         break;
//     case 'Thu':
//         echo "Dzis jest Czwartek";
//         break;
//     case 'Fri':
//         echo "Dzis jest Piatek";
//         break;
//     case 'Sat':
//         echo "Dzis jest Sobota";
//         break;
//     case 'Sun':
//         echo "Dzis jest Niedziela";
//         break;
//     default:
//         echo "Bledne dane!";
//         break;
// }

// echo "<br>" . date("d");

// $miesiac = date("M");
// switch ($miesiac) {
//     case 'Jan':
//         echo "Styczeń ";
//         break;
//     case 'Feb':
//         echo "Luty ";
//         break;
//     case 'Mar':
//         echo "Marzec ";
//         break;
//     case 'Apr':
//         echo "Kwiecień ";
//         break;
//     case 'May':
//         echo "Maj ";
//         break;
//     case 'Jun':
//         echo "Czerwiec ";
//         break;
//     case 'Jul':
//         echo "Lipiec ";
//         break;
//     case 'Aug':
//         echo "Sierpień ";
//         break;
//     case 'Sep':
//         echo "Wrzesień ";
//         break;
//     case 'Oct':
//         echo "Październik ";
//         break;
//     case 'Nov':
//         echo "Listopad ";
//         break;
//     case 'Dec':
//         echo "Grudzień ";
//         break;
//     default:
//         echo "Błędne dane!";
//         break;
// }

// echo date("Y") . "r.";

// echo "<br> Jest to " . (date("z") + 1) . " dzien roku"; // Poprawiono nawiasy

$czas=mktime(16,30,0,10,24,2020);
echo "Data: dzie, miesiac, rok,godzina:minuta <br>";
echo date("d-m-Y G:i",$czas),"<br>";
echo "Data: rok,miesiac,dzien,godzina:minuta:sekunda <br>";
echo date("Y-m-d G:i:s",$czas);

?>
