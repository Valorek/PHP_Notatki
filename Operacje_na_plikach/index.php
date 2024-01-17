<?php
$txt=fopen("licznik.txt","r");
$txt_drugi=fgets($txt);
fclose($txt);
$txt_drugi++;
$txt=fopen("licznik.txt","w");
fwrite($txt,$txt_drugi);
fclose($txt);

?>



<?php
$dane=fopen("dane.txt","r");
$id=fgets($dane);
fclose($dane);
echo("Twoje dane to:".$id);
?>
