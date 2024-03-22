<?php
class Mahasiswa{
    //  /variable
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    // method /function
    function __construct($_nim,$_nama)
    {
        $this->nim = $_nim;
        $this->nama = $_nama;
    }
    function predikat_ipk(){
        if ($this->ipk < 2.0){
            return 'CUKUP';
        }elseif ($this->ipk >=2.0 && $this->ipk <3.0){
            return 'BAIK';
        }elseif ($this->ipk >=3.0 && $this->ipk <3.75){
            return 'MEMUASKAN';
        }
        elseif($this->ipk >=3.75 && $this->ipk<= 4.0){
            return 'CUMLAUDE';
        }
        else{
            return 'ERROR';
        }
    }
}
// Instance Object
$mahasiswa1 = new Mahasiswa(110223277, 'Elyas Randi Renaldi');
$mahasiswa1 ->ipk = 4.0;
$mahasiswa1 ->prodi = 'Teknik Informatika';
$mahasiswa1 ->angkatan = 2023;

$mahasiswa2 = new Mahasiswa(110223211, 'Fatha Khaillrahman');
$mahasiswa2 ->ipk = 3.6;
$mahasiswa2 ->prodi = 'Teknik Informatika';
$mahasiswa2 ->angkatan = 2023;

$mahasiswa3 = new Mahasiswa(110223212, 'Taqi Rabbani');
$mahasiswa3 ->ipk = 3.5;
$mahasiswa3 ->prodi = 'Teknik Informatika';
$mahasiswa3 ->angkatan = 2023;
