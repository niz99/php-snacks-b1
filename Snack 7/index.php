<?php
$alunni = [
    [
        'nome' => 'ugo',
        'cognome' => 'foscolo',
        'voti' => [
            10,
            9,
            7
        ]
    ],
    [
        'nome' => 'giulio',
        'cognome' => 'cesare',
        'voti' => [
            8,
            9,
            10
        ]
    ],
    [
        'nome' => 'italo',
        'cognome' => 'calvino',
        'voti' => [
            7,
            9,
            7
        ]
    ],
];

var_dump($alunni);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            
            <?php 
            foreach ($alunni as $alunno) { 
            ?>

                <p>

                <?php 
                foreach ($alunno as $key => $item) { 
                    if($key == 'nome') {
                        echo $item . ", ";
                    }
                    if($key == 'cognome') {
                        echo $item . ", ";
                    }
                    if($key == 'voti') {
                        $sum = array_sum($item);
                        $media = round( ($sum / count($item)), 2 );
                        echo "media: " . $media;
                    } 
                };
                ?>

                </p>

            <?php
            };
            ?>
        </div>
    </body>
</html>