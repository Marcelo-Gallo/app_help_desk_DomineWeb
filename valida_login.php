<?php

    session_start();

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => '1234'),
    );

    // echo '<pre>';
    // print_r($usuarios_app);
    // echo '</pre>';

    foreach($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado!';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
    }

    /*
    print_r($_GET); //array que recebe parametros que são encaminhados pela url, transformando-os em indices do array
    echo '<br/>';
    echo $_GET['email'];
    echo '<br/>';
    echo $_GET['senha'];
    */

    /*
    print_r($_POST); //array que recebe parametros que são encaminhados pela url, transformando-os em indices do array
    echo '<br/>';
    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];
    */
?>