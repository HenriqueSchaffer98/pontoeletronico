<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(array(
    'name' => 'Henrique',
    'email' => 'teste@teste.com'
));

print_r($user);
echo '<br><br>';
$user->email = 'hschaffer@wide.net';
print_r($user->email);

//Database::getConnection();
/* $sql = 'select * from users';
$result = Database::getResultFromQuery($sql);

// verifica em quanto a variavel row estiver recebendo dados.
while ($row = $result->fetch_assoc()) {
    print_r($row);
    echo '<br>';
} */