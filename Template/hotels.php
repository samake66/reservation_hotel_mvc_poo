<h1>Liste d'hotel </h1>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php

        foreach ($hotels as $hotel) { ?>
        
      <div class="col">
        <h2>Hôtel: <?=$hotel->getName()?></h2>
        <img src="<?=$hotel->getImage()?>" alt="<?=$hotel->getImage()?>" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"><?=$hotel->getAdresse()?></p>
          <a href="index.php?page=nos_chambres&id=<?=$hotel->getIdhotel()?>" class="btn btn-primary" >Voir nos chambres</a>
        </div>
      </div>
        <?php
        } ?>
    </div>