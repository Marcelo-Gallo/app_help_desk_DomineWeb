<?php

    session_start();

    //trabalhando a montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    //implode(#, $_POST); -> poderia ser usado como alternativa

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    //PHP_EOL ->php end of line

    //abrindo arquivo
    $arquivo = fopen('arquivo.txt', 'a');
    //escrevendo arquivo
    fwrite($arquivo, $texto);
    //fechando arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>