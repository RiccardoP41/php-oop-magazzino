<?php
require_once "classes/Fumetto.php";


$fumetto1 = new Fumetto("La profezia dell'armadillo", "Zerocalcare", "Edizioni Graficart");
$fumetto1->prezzo = 15;
var_dump($fumetto1);
echo $fumetto1->prezzoTotale(4)." euro";
echo  "</br>" .$fumetto1->volumiTotali(4);

$fumetto2 = new Fumetto("Tex", "Giovanni Luigi Bonelli & Aurelio Galleppini", "Sergio Bonelli Editore");
$fumetto2->volumi = 110;
$fumetto2->prezzo = 400;
var_dump($fumetto2);
echo $fumetto2->prezzoTotale(2)." euro";
echo  "</br>" .$fumetto2->volumiTotali(2);



?>
