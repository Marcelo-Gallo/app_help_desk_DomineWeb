<?php

    session_start();

    //remover índices do array de sessão
    //unset() -> serve para qualquer array, tendo inteligencia suficiente para perceber se o indice existe ou não sem dar erro
    
    //destruir a variável de sessão
    //session_destroy() -> exclusiva para sessão
    
    session_destroy();
    header('Location: index.php');

?>