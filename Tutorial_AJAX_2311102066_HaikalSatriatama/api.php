<?php

$file = "data.json";
$data = json_decode(file_get_contents($file), true);

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo json_encode($data);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $input = json_decode(file_get_contents("php://input"), true);

    $data['coffees'][] = $input;

    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    echo json_encode(["message"=>"Data berhasil ditambahkan"]);
}

if($_SERVER['REQUEST_METHOD'] == 'PUT'){

    $index = $_GET['id'];

    $input = json_decode(file_get_contents("php://input"), true);

    $data['coffees'][$index] = $input;

    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    echo json_encode(["message"=>"Data berhasil diupdate"]);
}

if($_SERVER['REQUEST_METHOD'] == 'DELETE'){

    $index = $_GET['id'];

    array_splice($data['coffees'], $index, 1);

    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    echo json_encode(["message"=>"Data berhasil dihapus"]);
}

?>