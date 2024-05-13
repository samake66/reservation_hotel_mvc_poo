<?php

require_once('Model/Model.php');
require_once('Model/HotelEntity.php');

class Hotel extends Model{

    public function getHotel(){

        //$pdo = new \PDO('mysql:host=localhost;dbname=hotel_BD;charset=utf8', 'root', '');
        $statement = $this->pdo->query("select * from hotel");
    
        $hotels = $statement->fetchAll(PDO::FETCH_CLASS, "HotelEntity");
        return $hotels;
    }

}
