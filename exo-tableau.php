<?php
$ingredients = [
    'beurre demi sel' => '120',
    'chocolat' => '120',
    'sucre' => '100',
    'farine' => '80',
    'oeufs' => '3'
];

$unites = [
    'beurre demi sel' => 'gramme',
    'chocolat' => 'gramme',
    'sucre' => 'gramme',
    'farine' => 'gramme',
    'oeufs' => 'oeuf'
];

$ingredients['noix'] = '50';
$unites['noix'] = 'gramme';

foreach($ingredients as $index => $valeur){
    echo($index . ' : ' . $valeur . $unites[$index] . "\n");
}
// consigne précédente: echo($ingredients['farine'] . $unites['farine'] . " de farine");
?>
