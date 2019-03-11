<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Números Pares</title>
    </head>
    <body>
        <h1>Números pares</h1>
        <?php
            for($n = 0; $n <= 100; $n++) {
                if($n % 2 == 0)
                    echo "$n | ";
            }
        ?>
    </body>
</html>
