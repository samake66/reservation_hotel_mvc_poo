<?php

class ControllerHotels
{
function listHotels(){
    include_once __DIR__.'/../Model/Hotel.php';
    $model= new Hotel();
    $hotels=$model->getHotel();
    include_once __DIR__.'/../Template/hotels.php';
}
}