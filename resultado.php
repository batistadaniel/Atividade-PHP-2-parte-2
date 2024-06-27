<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dados Recebidos</title>
</head>
<body>
    <!-- div com nome da mesma classe do formulario para exdibir as informacoes no "mesmo" layout. xD--->
    <div class="formulario">
        <?php
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $mediaNotaAluno = ($nota1 + $nota2) / 2;
            $notaMediaAprovado = 6;

            if ($mediaNotaAluno >= $notaMediaAprovado):
                echo '<p style="color: green; font-size:48px;">Aprovado<p>';
            elseif ($mediaNotaAluno < $notaMediaAprovado):
                echo '<p style="color: red; font-size:48px;">Reprovado<p>';
            
            // se notas vazias ou nao for numero valido
            // if (empty($nota1) || empty($nota2) || !is_numeric($nota1) || !is_numeric($nota2)):
            //     echo '<p style="color: blue; font-size:48px;">Insira um numero valido!<p>';
            // elseif ($mediaNotaAluno > $notaMediaAprovado):
            //     echo '<p style="color: green; font-size:48px;">Aprovado<p>';
            // elseif ($velocidade <= $velocidadeMedia):
            //     echo '<p style="color: green; font-size:48px;">Prossiga<p>';

            // elseif (($velocidade > $velocidadeMedia) && ($velocidade <= $velocidadeReduza)):
            //     echo '<p style="color: yellow; font-size:48px">Reduza a velocidade<p>';
            // elseif ($velocidade > $velocidadeReduza):
            //     echo '<p style="color: red; font-size:48px">Voce foi multado<p>';
            endif;    
        ?>
    </div>
</body>
</html>