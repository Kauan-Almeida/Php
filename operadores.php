<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
         echo "<h3>Pós-incremento</h3>";
         $a = 10;
         echo "Deve ser 10: " . $a++ . "<br />\n";
         echo "Deve ser 11: " . $a . "<br />\n";
     
         echo "<h3>Pré-incremento</h3>";
         $a = 10;
         echo "Deve ser 10: " . ++$a . "<br />\n";
         echo "Deve ser 10: " . $a . "<br />\n";
        
        
        ?>
    
    </p>
</body>
</html>