<?php

require_once __DIR__.'/vendor/autoload.php';

$reactSource = file_get_contents('node_modules/react/dist/react.js');
$componentSource = file_get_contents('table.js');
$rjs = new ReactJS($reactSource, $componentSource);

$data = [
    'data' => [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ]
];

$rjs->setComponent('Table', $data);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hello React!</title>
    </head>
    <body>
        <div id="page"><?php echo $rjs->getMarkUp(); ?></div>
        <script src="node_modules/react/dist/react.js"></script>
        <script src="table.js"></script>
        <script>
            <?php echo $rjs->getJS('#page', "GLOB"); ?>
        </script>
    </body>
</html>
