<?php

class Kalkulator
{
    protected $daya = 0, $konsumsi_daya = 10;

    public function isi_daya($isi_daya)
    {
        if ($this->daya + $isi_daya > 100) {
            return "Daya sekarang : $this->daya || Daya tidak boleh lebih dari 100";
        }
        $this->daya += $isi_daya;
        return "Daya terisi! || daya sekarang : $this->daya";
    }

    public function cek_daya()
    {
        if ($this->daya - 10 < 1) {
            echo "Daya tidak cukup || daya sekarang : $this->daya";
            return true;
        }
        $this->daya -= $this->konsumsi_daya;
    }

    public function penjumlahan($a1, $a2)
    {
        if ($this->cek_daya()) {
            return;
        }
        echo $a1 + $a2 . " || daya sekarang : $this->daya";
    }
    public function pengurangan($a1, $a2)
    {
        if ($this->cek_daya()) {
            return;
        }
        echo $a1 - $a2 . " || daya sekarang : $this->daya";
    }
    public function perkalian($a1, $a2)
    {
        if ($this->cek_daya()) {
            return;
        }
        echo $a1 * $a2 . " || daya sekarang : $this->daya";
    }
    public function penjpembagianumlahan($a1, $a2)
    {
        if ($this->cek_daya()) {
            return;
        }
        echo $a1 / $a2 . " || daya sekarang : $this->daya";
    }
}

class kalkulator_hemat extends Kalkulator
{
    protected $konsumsi_daya = 5;
}

$kalkulator1 = new Kalkulator();
$kalkulator1->isi_daya(50);
$kalkulator1->penjumlahan(20, 15);
echo "<br>";
$kalkulator2 = new kalkulator_hemat();
$kalkulator2->isi_daya(50);
$kalkulator2->penjumlahan(10, 10);
