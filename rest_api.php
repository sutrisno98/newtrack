<?php

$checkfor = array(
    'un'=>'coba',
    'pw'=>'coba123'
    );


$checkforJson = json_encode($checkfor);
var_dump($checkforJson);


$postapi = array(
           'access_token' => 'BF9t4VU1Dr8J0e9Ry1fp4x3g12g-6XcU',
		   'data' => 'coba123',
		   'kode_avl' => '',
		   'waktu' => '',
		   'lat' => '',
		   'lon' => '',
		   'direction' => '',
		   'speed' => '',
		   'id_event' => ''
            );

$post = json_encode($postapi);
echo '<br/>';
var_dump($post);



$content = file_get_contents("http://lacak.org/api/api.php?api=user&ver=1.0&key=13B737E1EEDB4123743F8F1B1A233EC8&cmd=OBJECT_GET_LOCATIONS,111111111111111;222222222222222");
$jsonData = json_decode($content);
var_dump($jsonData);
?>