<?php

namespace MyApp;

abstract class Hayvanlar
{

    protected $turAdi;
    protected $agirligi;
    protected $yasi;
    protected $medication;

    public function __construct($turAdi, $agirligi, $yasi)
    {
        $this->turAdi = $turAdi;
        $this->agirligi = $agirligi;
        $this->yasi = $yasi;
    }

    abstract public function getDosage(); // ilaç dozajı
    abstract public function getFeedSchedule($ogun); // yem verme zamanı

}