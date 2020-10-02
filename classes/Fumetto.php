<?php
class Fumetto{
    public $titolo;
    public $volumi;
    public $autore;
    public $editore;
    public $prezzo;

    public function  __construct($_titolo, $_autore, $_editore, $_volumi = 1){
        $this->titolo = $_titolo;
        $this->volumi = $_volumi;
        $this->autore = $_autore;
        $this->editore = $_editore;
    }

    public function prezzoTotale($_quantità){
        if (empty($this->prezzo)){
            die("Non è specificato alcun prezzo");
        }
        return $this->prezzo * $_quantità;
    }

    public function volumiTotali($_quantità){
        return $this->volumi * $_quantità;
    }


}


 ?>
