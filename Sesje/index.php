<?php

//tworzenie sesji
session_start();
$_SESSION["login"]="edek";
echo $_SESSION["login"];

//generowanie i wyświetlanie id sesji

session_start();
session_regenerate_id();

echo session_id()."<br>";
session_regenerate_id();
echo session_id();

?>
