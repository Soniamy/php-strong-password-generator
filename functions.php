<?php
$passwordLenght = $_GET['charactersNumber'];

function generatePassword($numb)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890?!$£%&*#@';

    $password = array();

    $charactersLenght = strlen($characters);
  
    for ($i = 0; $i < $numb; $i++) {
        $n = rand(0, $charactersLenght);
        $password[] = $characters[$n];
    }

    return implode($password);
    
}


?>