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
            class Aluno{
                public $nome;
                public $ra;
                public $endereco;

                //construtor da classe
                function Aluno(){
                    $this->DadosAluno();
                }
                function DadosAluno(){
                    $this->nome = "Octavio";
                    $this->ra = "9999999999";
                    $this->endereco = "Rua fulano de Tal numero 0 apt 000";
                }
            }     
            $aluno = new Aluno();
            echo "Nome: " . $aluno-> nome;
            echo "<br>";
            echo "RA: " . $aluno->ra;
            echo "<br>";
            echo "Endereço: " . $aluno->endereco;
        ?>
    </p>    
</body>
</html>