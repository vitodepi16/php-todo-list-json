<?php
$testo = file_get_contents('./data.json');
$phparray = json_decode($testo, true);

if (isset($_POST['todoItem'])) {
    $todoItem = $_POST['todoItem'];
    //$phparray[] = $todoItem;
    array_push($phparray, $todoItem);
    file_put_contents('./data.json', json_encode($phparray));
}
header('Content-Type: application/json');
echo json_encode($phparray);
