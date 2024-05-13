<?php

class HotelEntity{

    private int $idhotel;
    private string $name;
    private string $adresse;
    private string $image;


    

    /**
     * Get the value of idhotel
     */ 
    public function getIdhotel()
    {
        return $this->idhotel;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }
}