<?php
  //require __DIR__ . "/../source/Config.php";
  require __DIR__ . "/../vendor/autoload.php";
/*
  //Já esta no setado no lugar correto
  use CoffeeCode\DataLayer\Connect;

  //realizando a conexão e armazendo um obeto PDO
  $conn = Connect::getInstance();

  //Para monitorar os erros do sistema
  $error = Connect::getError();
  if($error){
      echo $error->getMessage();
      die();//die, pois se houver erro não tem pq continuar a aplicação
  }

//  var_dump(true);
$query = $conn->query("SELECT * FROM users");
//variavel
var_dump($query);

//conteudo
var_dump($query->fetchAll())
*/

use Source\Models\User;
use Source\Models\Address;
$user = new User();
$list = $user->find ()->fetch(true);

//find()- pesquisa fetch()- abertura de dado
//@var $userItem User
foreach($list as $userItem){
 var_dump($userItem->Data());
 foreach ($userItem->addresses() as $address){
     var_dump($address->data());
 }

}

 ?>
