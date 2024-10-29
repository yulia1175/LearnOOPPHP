<?php
    class Hewan {
        var $nama;
        var $jenis;
        
        function bersuara() {
            echo "$this->nama bersuara </br>";
        }

        function makan($makanan) {
            echo "$this->nama sedang makan $makanan </br>";
        }

        function berjenis() {
            echo "$this->nama berjenis $this->jenis";
        }
    }

    $kucing = new Hewan();
    $kucing->nama = "Choco";
    $kucing->jenis = "Anggora";

    $kucing->bersuara();
    $kucing->makan('ikan');
    $kucing->berjenis();