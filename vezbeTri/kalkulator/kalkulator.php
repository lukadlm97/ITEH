<?php
class Kalkulator{
    private $broj1;
    private $broj2;
    private $operator;

    function __construct($broj1,$broj2,$operator){
        $this->broj1 = $broj1;
        $this->broj2 = $broj2;
        $this->operator = $operator;
    }

    function izracunaj(){
        switch ($this->operator) {
            case 'plus':
                return $this->broj1 + $this->broj2;
                break;
            case 'minus':
                return $this->broj1 - $this->broj2;
                break;
            case 'puta':
                return $this->broj1 * $this->broj2;
                break;
            case 'deljenje':
                return $this->broj1 / $this->broj2;
                break;
            default:
                return "greska<br>";
                break;
        }
    }

}

?>