<?php

require_once('Model/Model.php');
require_once('Model/ChambreEntity.php');
class Chambre extends Model{

    public function getChambre(){

        @$email=$_SESSION['login'];
    
        //requette
        $query="SELECT * FROM chambre";
    
        $statement=$this->pdo->query($query);
        $chambres=$statement->fetchAll(PDO::FETCH_CLASS, "ChambreEntity");
        return $chambres;
    }
    
    public function nosChambre($idhotel){
        @$email=$_SESSION['login'];
    
        //requette
        $query="SELECT * FROM chambre WHERE hotel_idhotel='$idhotel'";
    
        $statement=$this->pdo->query($query);
        $nos_chambres=$statement->fetchAll(PDO::FETCH_CLASS, "ChambreEntity");
        return $nos_chambres;
    }
}
