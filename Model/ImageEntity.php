<?php

class ImageEntity{
    private int $idimage;
    private int $chambre_idchambre;

    /**
     * Get the value of idimage
     */ 
    public function getIdimage()
    {
        return $this->idimage;
    }

    /**
     * Get the value of chambre_idchambre
     */ 
    public function getChambre_idchambre()
    {
        return $this->chambre_idchambre;
    }
}