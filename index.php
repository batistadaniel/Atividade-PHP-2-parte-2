<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - PHP 2 - parte 2</title>
</head>
<body>
    <main>
        <form action="resultado.php" method="post" id="formulario" class="formulario">

            <label for="nota1">Digite a primeira nota: </label>
            <input type="text" id="nota1" name="nota1">

            <label for="nota2">Digite a segunda nota: </label>
            <input type="text" id="nota2" name="nota2">

            <input type="submit" value="Verificar">

        </form>
    </main>

    <script>
        document.getElementById('formulario').addEventListener('submit', function() {
            setTimeout(function() {
                document.getElementById('velocidade').value = '';
            }, 10);
        });
    </script>
</body>
</html>