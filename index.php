<?php
class Sekil{

    public $kenar1;
    public $kenar2;
    public $kenar3;
    public $yukseklik;

    public function __construct($kenar1=null,$kenar2=null,$kenar3=null,$yukseklik=null){

        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
        $this->yukseklik = $yukseklik;

    }

}

class Kare extends Sekil {

    public function AlanKare(){
        return $this->kenar1 * $this->kenar1;
    }
    public function CevreKare(){
        return $this-> kenar1 * 4;
    }

}

class Dikdortgen extends Sekil {

    public function AlanDikdortgen(){
        return $this->kenar1 * $this->kenar2;
    }
    public function CevreDikdortgen(){
        return ($this->kenar1 * 2) + ($this->kenar2 * 2);
    }

}

class Ucgen extends Sekil{

    public function AlanUcgen() {
        return ($this->kenar3 * $this->yukseklik)/2;
    }
    public function CevreUcgen(){
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }

}

$Sekil = new Sekil();
$Kare = new Kare(3);
$Dikdortgen = new Dikdortgen(5,10);
$Ucgen = new Ucgen(10,10,10,5);

echo "Kare Alanı: ".$Kare->AlanKare()."<br>";
echo "Kare Cevresi: ".$Kare->CevreKare()."<br>";
echo "Dikdörtgenin Alanı: ".$Dikdortgen->AlanDikdortgen()."<br>";
echo "Dikdörtgenin Cevresi: ".$Dikdortgen->CevreDikdortgen()."<br>";
echo "Üçgenin Alanı: ".$Ucgen->AlanUcgen()."<br>";
echo "Üçgenin Çevresi: ".$Ucgen->CevreUcgen()."<br>";

?>