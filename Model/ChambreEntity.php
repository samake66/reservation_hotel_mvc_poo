<?php

class ChambreEntity{
    private int $idchambre;
    private string $name;
    private int $superficie;
    private int $hotel_idhotel;
    private int $image_idimage;
    private int $prix;
    private int $nombre_adulte;
    private int $nombre_enfant;
    private int $type_idtype;




    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }


    /**
     * Get the value of idchambre
     */ 
    public function getIdchambre()
    {
        return $this->idchambre;
    }

    /**
     * Get the value of superficie
     */ 
    public function getSuperficie()
    {
        return $this->superficie;
    }


    /**
     * Get the value of hotelidhotel
     */ 
    public function getHotel_idhotel()
    {
        return $this->hotel_idhotel;
    }

    /**
     * Get the value of imageidimage
     */ 
    public function getImage_idimage()
    {
        return $this->image_idimage;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Get the value of nombreadulte
     */ 
    public function getNombre_adulte()
    {
        return $this->nombre_adulte;
    }

    /**
     * Get the value of nombreenfant
     */ 
    public function getNombre_enfant()
    {
        return $this->nombre_enfant;
    }

    /**
     * Get the value of typeidtype
     */ 
    public function getType_idtype()
    {
        return $this->type_idtype;
    }
}