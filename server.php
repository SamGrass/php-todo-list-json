<?php

// salvo la stringa del JSON
$store_string = file_get_contents('store.json');

// rendo la stringa un elemento PHP
$toDo_List = json_decode($store_string);

// inizio logica
if (isset($_POST['name'])) {
    $new_Task = $_POST;
    $toDo_List[] = $new_Task;
    file_put_contents('store.json', json_encode($toDo_List));
}

if (isset($_POST['taskDel'])) {
    $index = $_POST['taskDel'];
    array_splice($toDo_List, $index, 1);
    file_put_contents('store.json', json_encode($toDo_List));
}

// fine logica

// trasformo il file da PHP a JSON
header('Content-Type: application/json');
// rendo di nuovo l'elemento PHP una stringa JSON
echo json_encode($toDo_List);
