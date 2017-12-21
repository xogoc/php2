<?php
require_once "components/Db.php";
use components\Db;
$mysqli = Db::getInstance();
$path = 'img/gallery/';
$src = [
    'name' => [
        'agl.jpg',
        'Chrysanthemum.jpg',
        'Desert.jpg',
        'Hydrangeas.jpg',
        'Jellyfish.jpg',
        'Koala.jpg',
        'Lighthouse.jpg',
        'Penguins.jpg',
        'Tulips.jpg'
    ],
    'size' => [
        331976,
        879394,
        845941,
        595284,
        775702,
        780831,
        561276,
        777835,
        620888
    ]
];
$values = [];
$qty = 100;
while ($qty>0) {
    $qty--;
    $i = rand(0,8);
    $views = rand(0, 50);
    $values[] = "('".$src['name'][$i]."', '".$path."', ".$src['size'][$i].", ".$views.")";
}
$sql = "INSERT INTO gallery (name, path, size, views) VALUES ".implode(", ", $values);
echo $sql;
//$mysqli->query($sql);