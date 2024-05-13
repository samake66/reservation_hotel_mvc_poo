<?php
require_once('connec.php');
class Model{

    protected $pdo;

    public function __construct()
    {
        $this->pdo= getPDO();
    }
}