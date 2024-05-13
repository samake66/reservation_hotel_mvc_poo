<?php
include_once __DIR__.'/../Model/Image.php';
$modelImage=new Image();
foreach ($chambres as $chambre) {
    $images=$modelImage->getImage($chambre->getImage_idimage());
            echo "<div class='card my-3'>";
            echo "<div class='card-body'>";
            echo "<h2 class='card-title'>Chambre: {$chambre->getName()}</h2>";
            echo "<p class='card-text'><strong>Superficie:</strong> {$chambre->getSuperficie()} m²</p>";
            echo "<p class='card-text'><strong>Prix:</strong> {$chambre->getPrix()} €</p>";
            echo "<p class='card-text'><strong>Images:</strong></p>";
            echo "<div class='row'>";
            foreach ($images as $image) {
                echo "<div class='col-md-4'>";
                echo "<img src='{$image['name']}' alt='{$chambre->getName()}' class='img-fluid mb-2'>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }