<!DOCTYPE html>
<html>
<head>
    <title>Exercício de operadores lógicos</title>
</head>
<body>
    <h1>Verificação de Voto</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Idade: <input type="text" name="idade">
        <input type="submit" value="Verificar">
    </form>

    <?php
        // Verifica se o formulário foi submetido
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtém a idade do usuário do formulário
            $idade = $_POST["idade"];

            // Verifica a idade e exibe a mensagem correspondente
            if ($idade < 16) {
                echo "Não pode votar.";
            } elseif ($idade >= 16 && $idade < 18) {
                echo "Voto facultativo.";
            } elseif ($idade >= 18 && $idade <= 65) {
                echo "O voto é obrigatório.";
            } else {
                echo "O voto é facultativo.";
            }
        }
    ?>
</body>
</html>
