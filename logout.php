<?php
    include('cria_sessao.php');
    //LIMPO AS VARIAVEIS DA SESSAO
    session_unset();
    //DESTROI A SESSAO
    session_destroy();
    //VOLTA PARA A PAGINA INICIAL
    header('Location:index.php');
?>