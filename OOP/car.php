<?php

Class Car {


    public $spalva;

    public $greitis;

    public function vaziuoti() {echo "Automobilis vaziuoja" . $this->greitis . "greiciu"; }

    public function gautiSpalva() {return $this->spalva; }
    

}