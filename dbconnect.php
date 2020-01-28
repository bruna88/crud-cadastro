<?php 
 define('DB_HOST', (getenv('DB_HOST')  ?: '127.0.0.1'));
define('DB_USUARIO', (getenv('DB_USUARIO') ?: 'root'));
define('DB_SENHA', (getenv('DB_SENHA') ?: ''));
define('DB_NOME', 'cadastro');

$conn = mysqli_connect(DB_HOST,DB_USUARIO,DB_SENHA,DB_NOME)
    or die ('Não foi possivel conectar');
?>

