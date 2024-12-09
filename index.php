<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
</head>

<body>
    <?php
    $nome = "Shiro";
    // $projeto = "Meu Portfólio";
    $finalizado = false;
    // $descricao = "Meu primeiro portfólio. Escrito em PHP e HTML.";
    echo "</br>";
    // echo $projeto, "\n" . $finalizado;

    $projetos = [
        [
            "projeto" => "Meu Portfólio",
            "finalizado" => false,
            "descricao" => "Meu primeiro portfólio. Escrito em PHP e HTML."
        ],
        [
            "projeto" => "Lista de Tarefas",
            "finalizado" => true,
            "descricao" => "Meu primeiro projeto. Escrito em PHP e HTML."
        ],
    ];

    function isFinished($projeto)
    {
        if ($projeto['finalizado']) {
            return '   <span style="color: green">Finalizado</span>';
        }
        return ' <span style="color: red">Não finalizado</span>';
    }
    ?>
    <hr>
    <ul>
        <?php foreach ($projetos as $projeto): ?>
            <div style="text-align: center;">
                <?= isFinished($projeto); ?>
                <h2><?= $projeto['projeto'] ?></h2>
                <p><?= $projeto['descricao'] ?></p>
                <br>
                <hr>
            </div>
        <?php endforeach; ?>
    </ul>
</body>

</html>