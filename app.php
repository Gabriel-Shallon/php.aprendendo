<?php

    require_once "filhodapessoa.class.php";
    $FilhoDaPessoa1 = new filhodapessoa("Neto", 36, "neto@neto.pro.br");
    echo($FilhoDaPessoa1->getnome());

    $pessoa1 = new Pessoa("Neto", 40);
    $pessoa1->cadastrar("Neto", 2)
    
?>