<?php

require_once('Model/Model.php');

class Type extends Model{

public function getType()
{
    $query="SELECT * FROM type ";

  $statement=$this->pdo->prepare($query);
  $statement->setFetchMode(PDO::FETCH_ASSOC);
  $statement->execute();
  $types=$statement->fetchAll();
  return $types;
}

}