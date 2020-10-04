<?php
class Fumetto{
    public $titolo;
    public $volumi;
    public $autore;
    public $edizioneItaliana;
    public $prezzo;

    public function  __construct($_titolo, $_autore, $_edizioneItaliana, $_volumi = 1){
        $this->titolo = $_titolo;
        $this->volumi = $_volumi;
        $this->autore = $_autore;
        $this->edizioneItaliana = $_edizioneItaliana;
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

    public function prezzoVolume(){
        if (empty($this->prezzo)){
            die("Non è specificato alcun prezzo");
        }
        return round($this->prezzo / $this->volumi, 2);
    }


}
