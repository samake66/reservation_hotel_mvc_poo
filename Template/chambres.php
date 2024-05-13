<div class="row row-cols-1 row-cols-md-4 g-4">
      <?php
      $pdo = new \PDO('mysql:host=localhost;dbname=hotel_BD;charset=utf8', 'root', '');
      foreach($chambres as $list_chambre){
        $id_chambre=$list_chambre->getIdchambre();
        //requette nom de hotel
        $id_hotel=$list_chambre->getHotel_idhotel();
        $statement1=$pdo->query("select * from hotel where idhotel='$id_hotel'");
        //type de chambre
        $id_type=$list_chambre->getType_idtype();
        $statement2=$pdo->query("select name from type where idtype='$id_type'");
        //image de la chambre
        $query="SELECT * FROM image as i
          WHERE i.chambre_idchambre=$id_chambre ";
        $statement3=$pdo->query($query);


        //Recupere
        $hotel=$statement1->fetch(PDO::FETCH_ASSOC);
        $type=$statement2->fetch(PDO::FETCH_ASSOC);
        $image=$statement3->fetch(PDO::FETCH_ASSOC);
        ?>

      <div class="col">
        <h2>Hôtel: <?=$hotel['name']?></h2>
        <img src="<?=$image['name']?>" alt="<?=$image['name']?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h4>chambre <?=$list_chambre->getName()?> de type: <?=$type['name']?></h4>
          <p class="card-text">(superficie: <?=$list_chambre->getSuperficie() ?>, prix: <?=$list_chambre->getPrix() ?> $)</p>
          <a href="details.php?id=<?=$list_chambre->getIdchambre()?>" class="btn btn-primary" >voir l'ofrre</a>
        </div>
      </div>
        <?php
      }?>
      
      </div>