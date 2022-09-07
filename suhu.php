<?php

namespace Konversi;

class Reamur
{
    const CELCIUS = 5;

    const FAHRENHEIT = 9;

    const REAMUR = 4;

    public $derajat;


   // public $pemilihan;

    public $konversi;


    public function setDerajat($derajat)
    {
        $this->derajat = $derajat;

        $this->konversi = self::REAMUR;

        return $this;
    }
    public function getCelcius()
    {
        $celcius = (self::CELCIUS / $this->konversi) * $this->derajat;

        return $celcius ;
    }
    public function getFahrenheit()
    {
        $fahrenheit = (self::FAHRENHEIT / $this->konversi) * ($this->derajat + 32);

        return  $fahrenheit ;
    }
}
    /*
    public function pemilihan($pemilihan)
    {
        $this->pemilihan = $pemilihan;

        return $this->$pemilihan;
    }
}

/*
do {

    echo "Masukkan nilai derajat Reamur =  \n";
    $reamur = new Reamur(trim(fgets(STDIN)));

    echo "Hasil konversi Reamur ke Celcius adalah " . $reamur->getCelcius() . "\n";
    echo "Hasil konversi Reamur ke fahrenheit adalah " . $reamur->getFahrenheit() . "\n";
    echo "Apakah ingin mengkonversi lagi?(y/n) \n";
} while ($reamur->pemilihan(trim(fgets(STDIN)))=='y');
*/