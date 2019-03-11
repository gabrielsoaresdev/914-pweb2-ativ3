<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $vetor = array('banana', 'maçã', 'uva', 'melancia', 'laranja');
            echo "Utilizando \"for\":";
            for($i = 0; $i < 5; $i++) 
                echo "$vetor[$i] | ";
        ?>
        
        <br/>
        
        <?php
            echo "Utilizando \"foreach\":";
            foreach ($vetor as $fruta)
                echo "$fruta | ";
        ?>
    </body>
</html>
