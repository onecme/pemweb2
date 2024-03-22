<?php

class Lingkaran{
    // property /variable
    private $jari;
    const PHI = 3.14;

    // method / function
    function __construct($r)
    {
        $this -> jari = $r;
    }

    function getLuas(){

        return self ::PHI * $this-> jari * $this-> jari;
    }
    function getKeliling(){
        return 2 * self::PHI *$this -> jari;
    }

}
// Instance Object
$lingkaran1 = new Lingkaran(10);

echo 'Luas lingkaran1 = '. $lingkaran1 -> getLuas();
echo '<br> Keliling lingkaran1 = '. $lingkaran1 -> getKeliling();
