<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Henrique', 'email' => 'teste@teste.com']);

echo '<br><br>';
//echo $user->getSelect();

echo User::getSelect(['id' => 1], 'name, email');
echo '<br>';
echo User::getSelect(['name' => 'Chaves']);

//Database::getConnection();
/* $sql = 'select * from users';
$result = Database::getResultFromQuery($sql);

// verifica em quanto a variavel row estiver recebendo dados.
while ($row = $result->fetch_assoc()) {
    print_r($row);
    echo '<br>';
} */