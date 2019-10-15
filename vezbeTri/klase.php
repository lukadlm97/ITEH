<?php
class Student{
    protected $brojIndeksa;
    protected $godinaUpisa;

    //magic metoda
    function _construct($broj,$godina){
        
        $this->brojIndeksa = $broj;
        $this->godinaUpisa = $godina;
        echo "Student je kreiran.<br>";
    }

    //po default-u public
    function upisiGodinu(){
        echo "Student sa brojem ".$this->getBrojIndeksa()." je upisan!";
    }
    function setBrojIndeksa($broj){
        $this->brojIndeksa = $broj;
    }
    function setGodina($godina){
        $this->godinaUpisa = $godina;
    }
    function getBrojIndeksa(){
        return $this->brojIndeksa."/".$this->godinaUpisa;
    }

}

class MasterStudent extends Student{
    private $smer = "ISIT";

    function _construct($broj,$godina,$smer){
        parent::_construct($broj,$godina);
        $this->$smer = $smer;
        echo "Kreiran je".__CLASS__.".<br>";
    }
}
?>