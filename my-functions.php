<?php 
// fonction ^
//5.1 — Affichage du prix
function FormatPrice(int $prix){
   $formatPrix = number_format($prix / 100, 2);//formater le resultat avec deux decimal
   return  $formatPrix ." € ";
}

//$prix = 1000;
//echo  FormatPrice($prix);//impremer les resultat de ma fonction
//$formater = FormatPrice($prix);
//<h1> Le prix est : <?php echo $formater."<br>";?> </h1> 

?>





<?php 
/************************************************ */

function priceExcludingVAT(int $priceTTC){
$Pourcentage = 20;//tva
$PriceHT =  $priceTTC/(1+($Pourcentage/100));
return $PriceHT;
}
//<h1>Le prix hor taxe :<?php echo $PriceHT ." € ";?></h1>
?>




//<?php


function discountedPrice(int $price,int $pourcentage ){
   if($pourcentage == null){
      echo'pas de remise';

   }else{
      $remise =( $pourcentage / 100) *  $price;
      $prixApreRemise = $price - $remise;
   }
  return $prixApreRemise;
}
//?>