<?php
require_once "classes/Fumetto.php";
require_once "classes/Estero.php";
require_once "classes/Premium.php";


$fumetto1 = new Fumetto("La profezia dell'armadillo", "Zerocalcare", "Edizioni Graficart");
$fumetto1->prezzo = 15;
var_dump($fumetto1);
echo "Spesa totale: " .$fumetto1->prezzoTotale(4)." euro";
echo  "</br>" ."numero totale volumi ordinati " .$fumetto1->volumiTotali(4);

$fumetto2 = new Fumetto("Tex", "Giovanni Luigi Bonelli & Aurelio Galleppini", "Sergio Bonelli Editore");
$fumetto2->volumi = 110;
$fumetto2->prezzo = 400;
var_dump($fumetto2);
echo "Spesa totale: " .$fumetto2->prezzoTotale(2)." euro";
echo  "</br>" ."numero totale volumi ordinati ".$fumetto2->volumiTotali(2);

$estero1 = new Estero("Il guanto dell'infinito", "Jim Starlin", "Panini Comics", "Marvel Comics", "USA", 6);
$estero1->prezzo = 36.99;
var_dump($estero1);
echo "Spesa totale: " .$estero1->prezzoTotale(3)." euro";
echo  "</br>" ."numero totale volumi ordinati " .$estero1->volumiTotali(3);

$premium1 = new Premium("Il guanto dell'infinito", "Jim Starlin", "Panini Comics", "USA", 2, "Maximum", 20, "Marvel Comics");
$premium1->prezzo = $estero1->prezzo;
var_dump($premium1);
echo "Spesa totale: " .$premium1->prezzoTotale(2)." euro";
echo  "</br>" ."numero totale volumi ordinati " .$premium1->volumiTotali(2);
