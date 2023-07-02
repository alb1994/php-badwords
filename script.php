<?php 
$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];
echo "PARAGRAFO: ".$paragrafo." <br/> LUNGHEZZA PARAGRAFO :";
echo strlen($paragrafo);
echo " <br/> PAROLA: ".$parola." <br/> RISULTATO: ";
echo str_replace($parola,"...",$paragrafo);
?>