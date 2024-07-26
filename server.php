<?php 

// salvo la stringa del JSON
$store_string = file_get_contents('store.json');

// rendo la stringa un elemento PHP
$toDo_list = json_decode($store_string);

// inizio logica



// fine logica

// trasformo il file da PHP a JSON
header('Content-Type: application/json');
// rendo di nuovo l'elemento PHP una stringa JSON
echo json_encode($toDo_list);

