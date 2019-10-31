<?php

include 'data.php';
require_once("./WP.php");

$wp = new WP();


$renking = $wp->pemVectoran($data, $wp->fixedBobot($bobot));
var_dump($wp->peRankingan($renking));
