<?php
    class nilaimahasiswa {
        var $nim, $matkul, $nilai;

        function  __construct( $nim, $matkul, $nilai) {
            $this->nim =$nim;
            $this->matkul =$matkul;
            $this->nilai =$nilai;
        }

        function predikat_grade() {
            if ($this->nilai >= 0 && $this->nilai <= 35) {
                return "E Tidak Lulus";
            } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
                return "D Tidak Lulus";
            } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
                return "C Lulus";
            } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
                return "B Lulus";
            } elseif ($this->nilai >= 85 && $this->nilai <= 100) {
                return "A Lulus";
            } else {
                return "Tidak Lulus";
            }
        }

    }
?>
        
    