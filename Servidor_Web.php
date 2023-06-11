<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>
        <?php
            //Arrays:
            $nomeArray = array("Bob","Maria","Carlos",2023);
            
            //Outra forma de fazer Arrays:
            $nomeArray1[] = "Bob";
            $nomeArray1[] = "Maria";
            $nomeArray1[] = "Carlos";
            $nomeArray1[] = 2023;
            print_r($nomeArray);
            echo "<br/>";
            print_r($nomeArray1);

            //Arrays associativos:
            
            $assoArray["Curso"] = "Tec. em Análise e Desenv. de Sistemas";
            $assoArray["Nome"] = "Boa Brown";
            $assoArray["RA"] = "000.000.000.000";
            
            echo "<br/>";
            print_r($assoArray);
            
            //Exibir valores do Array associativo:

            $aluno = array("Curso" => "Tec. em Análise e Desenv. de Sistemas",
            "Nome" => "Bob Brown",
            "RA" => 123456);
            echo("Dados do aluno:" . 
            "<BR><strong>Nome: </strong>" . $aluno['Nome'] . 
            "<BR><strong>Curso: </strong>" . $aluno['Curso'] .
            "<BR><strong>RA: </strong>" . $aluno['RA']);
            
            //Arrays Multidimensionais (Matrizes):

            $alunos = array("TADS" => array("Descricao" => "Tec. em Análise e Desenvolvimento de Sistemas",
                "Disciplina" => "Programação web"),
                "TSIN" => array("Descricao" => "Tec. em Sistemas para Internet", "Disciplina" => "Comércio Eletrônico"),
                "SI" => array("Descricao" => "Sistemas de Informação", "Disciplina" => "Design de Interface"));
                echo("Cursos e disciplinas ...".
          "<BR><BR>".
          "<strong>Sigla:</strong> TADS: " .
          "<BR><strong>Descrição: </strong>" . $alunos['TADS']['Descricao'] .
          "<BR><strong>Disciplina: </strong>" . $alunos['TADS']['Disciplina'] .
          "<BR><BR>".
          "<strong>Sigla: </strong>TSIN".
          "<BR><strong>Descrição: </strong>" . $alunos['TSIN']['Descricao'] .
          "<BR><strong>Disciplina: </strong>" . $alunos['TSIN']['Disciplina'] .
          "<BR><BR>
          <strong>Sigla:</strong> SI" .
          "<BR><strong>Descrição: </strong>" . $alunos['SI']['Descricao'] .
          "<BR><strong>Disciplina: </strong>" . $alunos['SI']['Disciplina']);

?>



    </p>    
</body>
</html>