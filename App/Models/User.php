<?php

namespace App\Models;

class User {
  private int $id;
  private string $name;
  private string $email;

  public function __construct(string $name, string $email) {
    $this->setName($name);
    $this->setEmail($email);
  }

  public function getId() {
    return $this->id;
  }
  public function setId(int $id) {
    $this->id = $id;
  }

  public function getEmail() {
    return $this->email;
  }
  public function setEmail(string $email) {
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  }
  public function setName(string $name) {
    $this->name = $name;
  }
}
