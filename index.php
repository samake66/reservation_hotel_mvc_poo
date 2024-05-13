<?php

//require_once('Model/Model.php');
require_once('Model/Type.php');

//les types
 $types= new Type();
 $types= $types->getType();

  $search="";
  if(isset($_GET['search'])){
    $search=$_GET['search'];
  }

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img class="img_nav" src="image/vip_hotel.jpeg" alt="">
    <a class="navbar-brand" href="index.php?page=accueil">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" href="index.php?page=hotel"><i class="fa-sharp fa-regular fa-hotel"></i> HOTEL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=chambre"><i class="fa-solid fa-bed"></i> CHAMBRE</a>
        </li>
       
 
      </ul> 
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <?php
      if(isset($_SESSION['login'])){ ?>
        <p><i class="fa-solid fa-basket-shopping-simple"></i></p>
        <button class="btn btn-outline-info"  type="button">
          <a href="index.php?page=panier"><p>panier</p></a>
        </button>
        <button class="btn btn-outline-info"  type="button">
          <a href="index.php?page=deconnexion">Deconnexion</a>
        </button>
        <div>
          
          <p><i class="fa-solid fa-user"></i>Votre compte <br><?= $_SESSION['login']?></p>
        </div>
      </div>
    <?php
      } else{?>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
       <button class="btn btn-outline-info"  type="button">
          <a href="index.php?page=form_connexion">Connexion</a>
        </button>
        <button class="btn btn-outline-info"  type="button">
          <a href="index.php?page=inscription">Inscription</a>
        </button>
      </div>
      <?php } ?>
    </div>
  </div>
</nav>
<div>
    <h1 class="grand_titre">Trouvez votre prochain séjour</h1>
    <h4>Recherchez des offres sur des hôtels, des hébergements indépendants et plus encore</h4>
</div>



<form class="row gx-3 gy-2 align-items-center" id="myForm" role="search" action="recherche.php" method="post">
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputName">Ville</label>
    <input type="search" required="required" name="ville" value="<?=@$ville?>"  class="form-control" id="specificSizeInputName" placeholder="Ville ou code postal">
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputGroupUsername">date debut</label>
    <div class="input-group">
    <?php
      $date_min=date("Y-m-d");
    ?>
      <input type="date" name="date_debut" min="<?=$date_min?>"  value="<?=@$date_debut?>" required="required" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
    </div>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputGroupUsername">date fin</label>
    <div class="input-group">
      <input type="date" name="date_fin" min="<?=$date_min?>"  value="<?=@$date_fin?>" required="required" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
    </div>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
    <select name="type" required="required" class="form-select" id="specificSizeSelect">
      <option selected>Choisissez un type</option> 
      <?php
      foreach($types as $type){ ?>
        <option value="<?=$type['idtype'] ?>"><?=$type['name'] ?></option>
      <?php
      }
      ?>
    </select>
  </div>
 
  <div class="btn btn-primary">
    <button type="submit" name="search" class="btn btn-primary">Search</button>
  </div>
</form>
<div>

</div>

<?php
// ROUTEUR : Lien entre URL => logique (controller)
// recuperation de l'url
@$page=$_GET['page'];

if ($page=="accueil"){
    // logique
    include_once __DIR__.'/Controller/ControllerHome.php';    
    home();
}
if ($page=="hotel"){
    include_once __DIR__.'/Controller/ControllerHotels.php';
    $controller=new ControllerHotels();
    $controller->listHotels();
    
}

if ($page=="chambre"){
    include_once __DIR__.'/Controller/ControllerChambres.php';
    $controller=new ControllerChambres();
    $controller->listChambres();
}
if($page=="nos_chambres"){
  include_once __DIR__.'/Controller/ControllerChambres.php';
  $controller=new ControllerChambres();
  $controller->nos_chambres();
}