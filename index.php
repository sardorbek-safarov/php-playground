<?php

$numbers = [1, 2, 3];

// echo $numbers[2]; // 1


$user = [
  "name" => "Sardor",
  "age" => 25,
];


// echo $user['name'] . PHP_EOL;


$response = [
  "data" => [
    "user" => [
     
    ]
  ]
];

$email = $response["data"]["user"]["email"] ?? null;


echo $email;
