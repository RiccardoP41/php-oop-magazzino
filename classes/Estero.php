<?php
require_once "Fumetto.php";

class Estero extends Fumetto{
    public $casaEditrice;
    public $provenienza;

    public function  __construct($_titolo, $_autore, $_edizioneItaliana, $_casaEditrice, $_provenienza, $_volumi = 1){
        parent::__construct($_titolo, $_autore, $_edizioneItaliana, $_volumi);
        $this->casaEditrice = $_casaEditrice;
        $this->provenienza = $_provenienza;
    }
}
