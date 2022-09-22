<?php

require_once __DIR__ . '/movie.php';

$FILM1 = new Movie ("Star Wars", "Inglese", "Fantascenza");

$FILM1-> StampaInfo();

$FILM2 = new Movie ("Star Trek", "Indi", "fantasy");
$FILM2-> StampaInfo();
