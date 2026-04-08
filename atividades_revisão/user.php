<?php
$url = 'https://jsonplaceholder.typicode.com/users';
$json_data = file_get_contents($url);
$data = json_decode($json_data, true);

foreach ($data as $user) {
    echo "Nome: {$user['name']} <br>";   
    echo "Email: {$user['email']} <br>";
    echo "Cidade: {$user['address']['city']} <br><br>";        
}
?>