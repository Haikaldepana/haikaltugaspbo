<?php
class mahasiswa{
    public $nim = "76";
    public $nama = "haikal depana pratama";
    public $jurusan = "pepeelge";
    function tampil_biodata(){
        echo $this-> nim;
        echo $this-> nama;
    }
}
$tampil = new mahasiswa();
$tampil->tampil_biodata();