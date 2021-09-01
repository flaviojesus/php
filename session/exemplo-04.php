<?php

    session_id('296f5hanjbgmnu2u37p0nhctf6'); //Recuperar o id de sessão
    require_once("config.php");

    session_regenerate_id();

    echo session_id();

    var_dump($_SESSION);


?>