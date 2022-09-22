<?php

require_once(dirname(__FILE__, 2) . '/src/config/database.php');

//Database::getConnection();
$sql = 'select * from users';
$result = Database::getResultFromQuery($sql);

// verifica em quanto a variavel row estiver recebendo dados.
while ($row = $result->fetch_assoc()) {
    print_r($row);
    echo '<br>';
}