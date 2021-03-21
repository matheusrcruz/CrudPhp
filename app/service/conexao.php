<?php
// constantes, dados de acesso
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'login');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) ?? ('pagina não encontrada');
