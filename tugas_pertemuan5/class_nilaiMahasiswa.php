<?php
class Mahasiswa{
    public $mataKuliah;
    public $nilai;
    public $nim;

    function  __construct($mataKuliah, $nilai, $_nim){
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
        $this->nim = $_nim;

    }
    function grade(){
        if ($this->nilai <= 35){
            return 'E';
        }
        elseif ($this->nilai >= 36 && $this->nilai <= 55){
            return 'D';
        }
        elseif ($this->nilai >= 56 && $this->nilai <= 69){
            return 'C';
        }
        elseif ($this->nilai >= 70 && $this->nilai <= 84){
            return 'B';
        }
        elseif ($this->nilai >= 85 && $this->nilai <=100){
            return 'A';
        }
        else{
            return 'error';
        }
    }
    function hasil() {
        $nilai = $this->grade(); // simpan terlebih dahulu nilai grade dalam variable
        if ($nilai == 'E' || $nilai == 'D' ){
            return 'TIDAK LULUS';
        }
        else{
            return 'LULUS';
        }
    }
}
// $mahasiswa1 = new Mahasiswa("PKN",55,2277);



// echo "Mata Kuliah: " . $mahasiswa1->mataKuliah . "<br>";
// echo "Nilai: " . $mahasiswa1->nilai . "<br>";
// echo "NIM: " . $mahasiswa1->nim . "<br>";
// echo "Hasil: " . $mahasiswa1->hasil() . "<br>";
// echo "Grade: " . $mahasiswa1->grade();
?>
