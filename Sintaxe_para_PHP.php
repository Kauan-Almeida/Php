<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WampServer Hello World</title>
</head>
<body>
    <p>
        <?php
            //echo e print
            echo "Hello World<br/>";
            echo ("Hello World<br/>");
            print("Teste para print<br/>");
            print "Prefiro o calor do que $clima2<br/>";
        ?>
        <?php
            //Comentarios
            // Primeiro exemplo de comentarios
            #  Segundo exemplo de comentarios
            /* Terceiro exexmplo de comentarios*/    
        ?>
        <?php
            //Concatenação com " . "
            $dia = 14;
            $mes = "abril";
            $ano = 1912;
            $anocompleto = $dia . " de " . $mes . " de " . $ano;
            echo $dia . "<br/>";        
            echo $mes . "<br/>";        
            echo $ano . "<br/>";        
            echo $anocompleto . "<br/>";        
        ?>
        <?php
            //Concatenação com " .= "
            $anocompleto = 14;
            $anocompleto .= " de abril de ";
            $anocompleto .= 1912;
            echo $anocompleto . "<br/>";
        ?>

        <?php
            //Variaveis
            $_nome = "João Antonio";
            $Nome = "Alfredo Maciel";
            $valor = 123456;
            echo $_nome . "<br/>";
            echo $Nome . "<br/>";
            echo $valor . "<br/>";
        ?>

        <?php
            //Variaveis locais e global
            function quadrado(){
                global $numero;
                $numero = 3;
                $numero = $numero * $numero;
            }
            quadrado();
            echo "O número ao quadrado é $numero<br/>";       
        ?>

        <?php
            //Variaveis estaticas
            function somatorio(){
                static $soma = 0;
                $soma = $soma + 1;
                echo "o valor é $soma<br/>";
            }
            somatorio();
            somatorio();
            somatorio();
            somatorio();
        ?>

        <?php
            //Variaveis Dinamicas
            $var = "Curso";
            $$var = "Tecnologia em Analise e Desenvolvimento de Sistemas";
            echo "O nome armazenado é $var <br/>";
            echo "E o conteúdo de var é $$var<br/>";
        ?>

        <?php
            //Constantes
            define ("CONSTANT", "Hello world!");
            echo CONSTANT . "<br/>";

        ?>

    </p>
</body>
</html>