<?php
require_once('Model/Model.php');
require_once('Model/ImageEntity.php');
class Image extends Model{


    public function getImage($id_chambre){


        $query="SELECT * FROM image WHERE chambre_idchambre='$id_chambre'";
    
        $statement=$this->pdo->query($query);
        //$images=$statement->fetchAll(PDO::FETCH_CLASS, "ImageEntity");
        $images=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $images;
    }
}