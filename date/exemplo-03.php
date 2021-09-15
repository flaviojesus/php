<?php

    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");//LC_ALL -> Define informações locais para português

    //ucwords (Converte a primeira letra de cada palavra em maiúscula)
    //strftime (dia da semana e mês por extenso)
    echo ucwords(strftime("%A %B"));


?>