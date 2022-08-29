<?php

require_once "../model/Conexao.php";

$nome_livro = $_GET["txt_livro"];

$sql = " INSERT INTO public.book
    (nome, paginas, autor)
    VALUES('$nome_livro', 666, 'OBAID');
";

Conexao::exec($sql);


header("Location: ../index.php");