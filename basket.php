<?php

$matchs = [
    [
        'home' => 'atlanta hawks',
        'guest' => 'oklahoma',
        'point_home' => rand(1, 100),
        'point_guest' => rand(1, 100),
    ],
    [
        'home' => 'warriors',
        'guest' => 'lakers',
        'point_home' => rand(1, 100),
        'point_guest' => rand(1, 100),
    ],
    [
        'home' => 'chigaco bull',
        'guest' => 'boston celtics',
        'point_home' => rand(1, 100),
        'point_guest' => rand(1, 100),
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basket</title>
</head>
<body>
    <h1>Tabella match</h1>
    <table>
        <tr>
            <th>home</th>
            <th>Guest</th>
            <th>PH</th>
            <th>PG</th>
        </tr>
        <?php foreach($matchs as $key => $match) : ?>
            <tr>
                <?php foreach($match as $squad) : ?>
                  <td>
                    <?= $squad ?>
                  </td> 
                <?php endforeach ?>   
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>