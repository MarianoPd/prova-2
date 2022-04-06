<?php

function get_template_part($file, $params) {
    ob_start();
    extract($params);
    require $file;
    $text = ob_get_clean();
    echo $text;
}

$params =[
    [
        'title' => 'Ciaone1',
        'subtitle' => 'Bello1',
        'text' => 'alrvhauvuuib1',
    ],
    [
        'title' => 'Ciaone2',
        'subtitle' => 'Bello2',
        'text' => 'alrvhauvuuib2',
    ],

];

$params2=[
    [
        'title' => 'Ciaone3',
        'subtitle' => 'Bello3',
        'text' => 'alrvhauvuuib3',
    ],
    [
        'title' => 'Ciaone4',
        'subtitle' => 'Bello4',
        'text' => 'alrvhauvuuib4',
        'img' => './download.jpg',
    ], 
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <title>Document</title>
</head>
<body>


<div style="background-color:red;">
    <?php get_template_part('componenta.php', ['param' => 'comp 1', 'class' => 'btn btn-primary', 'fulippo' => 'fulippo mangia la mela', 'params' => $params]) ?>
</div>
<div style="background-color:green;">
    <?php get_template_part('componentb.php', ['param' => 'comp 2']) ?>
</div>

<div style="background: blue; padding: 30px;">
    <?php get_template_part('componenta.php', ['params' => $params2 , 'title' => 22]) ?>
</div>


</body>
</html>