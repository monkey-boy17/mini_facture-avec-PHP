<?php 
$Article = $_POST['march'];
$Quantite = $_POST['quant'];
$Tableau = array('ordinateur'=> 500,'tablette'=>250,'telephone'=>150,'casque'=>100 );

if($Quantite < 0){
            
    echo"quantité invalide";
}

foreach($Tableau as $cle => $valeur){
    if($cle == $Article){

        $Total = $valeur*$Quantite;

    }
}
echo ' Votre Article :'.$_POST['march'].'<br>  la quantité '.$_POST['quant']. '<br> pour un total de '.$Total .'$';
?>