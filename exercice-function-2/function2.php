<?php
$tab = array();
function produit($tab)
{
    $result = 1;

    foreach ($tab as $valeur)
        if ($valeur === 0)

            return "Pas de Comptabilisation ";
        else
            $result *= $valeur;

    echo $result;
}

$tab = array(3, -1, -6, 9, -5, 2, 5);
$arr = array(3, -1, -6, 0, -5, 2, 5);
produit($tab);
produit($arr);
?>