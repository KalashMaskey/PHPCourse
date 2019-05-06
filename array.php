<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $list = [5,10,250,500];

        echo max($list);
        echo "<br>";

        echo min($list);
        echo "<br>";

        print_r($list);
        echo "<br>";

        sort($list);
    ?>
</body>
</html>