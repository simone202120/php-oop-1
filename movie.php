<?php

class Movie {
    
    public $name;
    public $language;
    public $genere;


    public function __construct($name, $language, $genere)
    {
        $this->name = $name;
        $this->language = $language;
        $this->genere = $genere;
    }

    public function StampaInfo(){
        echo 'Il nome del film è: ' . $this->name . '<br>' . 'La lingua originale è ' .  $this->language . '<br>' . 'Genere:' .  $this->genere . '<br>';

    }

}
    