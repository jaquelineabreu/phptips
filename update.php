<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;


$user = (new User())->findById(6);
$user->first_name = "Sophia";
$user->save();
var_dump($user);

?>