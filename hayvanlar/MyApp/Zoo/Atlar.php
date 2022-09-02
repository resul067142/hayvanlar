<?php

namespace MyApp\Zoo;

use MyApp\Hayvanlar;
use MyApp\Medication\AtAlbuterol;
use MyApp\Medication\AtDiazepam;
use MyApp\Medication\AtFluphenazine;
use MyApp\Medication\AtLidocaine;

class Atlar extends Hayvanlar implements AtAlbuterol, AtDiazepam, AtFluphenazine, AtLidocaine
{
    public function __construct($turAdi, $agirligi, $yasi)
    {
        parent::__construct($turAdi, $agirligi, $yasi);
    }

    public function getDosage()
    {
        $this->getMedicationMessage();
        return "$this->turAdi, $this->agirligi kg ağırlığında ve $this->yasi yaşında olduğundan; $this->medication<br>";
    }

    public function getFeedSchedule($ogun)
    {
        return "$this->turAdi, $this->agirligi kg ağırlığında ve $this->yasi yaşında olduğundan $ogun öğün yem vermelisiniz.<br>";
    }

    private function getMedicationMessage()
    {

        $message = $this->medication;

        if (strlen($message) == 0) {
            $this->medication = "hayvanın ilaç dozajı bilgisi bulunmamaktadır.";
            return false;
        }

        $message = substr($message, 0, -2);

        $this->medication = $message . " ilaç dozajı vermelisiniz.";
        return true;
    }


    public function getAlbuterol()
    {
        if ($this->agirligi > 100) {
            $this->medication .= "Albuterol 10 Mg, ";
        } elseif ($this->agirligi > 70) {
            $this->medication .= "Albuterol 5 Mg, ";
        } elseif ($this->agirligi > 40) {
            $this->medication .= "Albuterol 2 Mg, ";
        } else {
            $this->medication .= "Albuterol 15 Mg, ";
        }

        return $this;
    }

    public function getDiazepam()
    {
        if ($this->yasi <= 5) {
            $this->medication .= "Diazepam 15 Mg, ";
        } elseif ($this->yasi <= 10) {
            $this->medication .= "Diazepam 10 Mg, ";
        } elseif ($this->yasi <= 15) {
            $this->medication .= "Diazepam 5 Mg, ";
        } else {
            $this->medication .= "Diazepam 3 Mg, ";
        }

        return $this;
    }

    public function getFluphenazine()
    {
        if ($this->yasi <= 5) {
            $this->medication .= "Fluphenazine 3 Mg, ";
        } elseif ($this->yasi <= 10) {
            $this->medication .= "Fluphenazine 7 Mg, ";
        } elseif ($this->yasi <= 15) {
            $this->medication .= "Fluphenazine 12 Mg, ";
        } else {
            $this->medication .= "Fluphenazine 15 Mg, ";
        }

        return $this;
    }

    public function getLidocaine()
    {
        if ($this->agirligi > 100) {
            $this->medication .= "Lidocaine 10 Mg, ";
        } elseif ($this->agirligi > 70) {
            $this->medication .= "Lidocaine 5 Mg, ";
        } elseif ($this->agirligi > 40) {
            $this->medication .= "Lidocaine 2 Mg, ";
        } else {
            $this->medication .= "Lidocaine 15 Mg, ";
        }

        return $this;
    }
}