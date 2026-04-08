<?php
$url = 'https://jsonplaceholder.typicode.com/posts';
$json_data = file_get_contents($url);
$data = json_decode($json_data, true);

foreach ($data as $post) {
    echo "ID: {$post['id']} <br>";;
    echo "Título: {$post['title']} <br>";   
    echo "Conteúdo: {$post['body']} <br><br>";        
}
?>