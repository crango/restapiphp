<?php

$url = "http://localhost:3000/api/movies";
$movies = "";

//LISTAR PELICULAS


$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
if (curl_errno($curl)) {
    curl_errno($curl);
} else {
    $movies = json_decode($response, true);
}

echo '<pre>';
print_r($movies);
echo '</pre>';

curl_close($curl);


//INSERTAR PELICULAS

/* 
$movie = [
    'title' => 'The Godfather',
    'director' => 'Francis Ford Coppola',
    'year' => '1972',
    'rating' => '9.0'
];

$data = http_build_query($movie);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    curl_errno($curl);
} else {
    $movies = json_decode($response, true);
}

echo '<pre>';
print_r($movies);
echo '</pre>';

curl_close($curl);
 */



 //EDITAR PELICULAS

/* $id = 3;

$movie = [
    'title' => 'Donnie Darko',
    'director' => 'Richard Kelly',
    'year' => '2000',
    'rating' => '7.4'
];

$data = http_build_query($movie);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "{$url}/{$id}");
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    curl_errno($curl);
} else {
    $movies = json_decode($response, true);
}

echo '<pre>';
print_r($movies);
echo '</pre>';

curl_close($curl); */



//ELIMINAR PELICULAS

/* $id = 5;

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "{$url}/{$id}");
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    curl_errno($curl);
} else {
    $movies = json_decode($response, true);
}

echo '<pre>';
print_r($movies);
echo '</pre>';

curl_close($curl); */
