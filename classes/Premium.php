<?php
require_once "Estero.php";

 class Premium extends Estero{
    public $versione;
    public $maggiorazione;

    public function  __construct($_titolo, $_autore, $_edizioneItaliana, $_casaEditrice, $_provenienza, $_versione, $_maggiorazione, $_volumi = 1){
        parent::__construct($_titolo, $_autore, $_edizioneItaliana, $_volumi, $_casaEditrice, $_provenienza);
        $this->versione = $_versione;
        $this->maggiorazione = $_maggiorazione;
    }

    public function prezzoTotale($_quantità){
        if (empty($this->prezzo)){
            die("Non è specificato alcun prezzo");
        }
        return ($this->prezzo + $this->maggiorazione) * $_quantità; 
    }
 }
