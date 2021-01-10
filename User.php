<?php

  namespace Source\Models;

  use CoffeeCode\DataLayer\DataLayer;

  class User extends DataLayer
  {
    public function __construct()
    {
      //string entity, array $required, string $prmary = "id", bool $timestamps = true
      parent::__construct("users", ["first_name", "last_name"]);

      //entidade, $required,$primary,$timestamps
    }

    public function addresses()
    {
      //new address(abre o modelo)
      //mostra todos
      //return (new Address())->find()->fetch(true);

      //mostra por id
      return (new Address())->find("user_id= :id", "id={$this->id}")->fetch(true);

    }

  }

  ?>
