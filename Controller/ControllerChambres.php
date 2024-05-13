<?php

class ControllerChambres{


function listChambres(){
    include_once __DIR__.'/../Model/Chambre.php';
    $model=new Chambre();
    $chambres=$model->getChambre();
    include_once __DIR__.'/../Template/chambres.php';
}

function nos_chambres(){
    include_once __DIR__.'/../Model/Image.php';
    include_once __DIR__.'/../Model/Chambre.php';
    $model=new Chambre();
    $chambres=$model->nosChambre($_GET['id']);
    include_once __DIR__.'/../Template/nos_chambres.php';
}


}