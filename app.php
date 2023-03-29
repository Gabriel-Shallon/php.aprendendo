<?php

    require_once "filhodapessoa.class.php";
    $FilhoDaPessoa1 = new filhodapessoa("Neto", 36, "neto@neto.pro.br");
    echo($FilhoDaPessoa1->getnome());

    $pessoa1 = new Pessoa();
    $pessoa1->cadastrar("Neto", 36)
    echo (pessoa1->getIdade());
?>