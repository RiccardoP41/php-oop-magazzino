<?php
require_once "classes/Fumetto.php";


$fumetto1 = new Fumetto("La profezia dell'armadillo", "Zerocalcare", "Edizioni Graficart");
$fumetto1->prezzo = 15;
var_dump($fumetto1);

echo $fumetto1->prezzoTotale(4);
echo  "</br>" .$fumetto1->volumiTotali(4);

?>
