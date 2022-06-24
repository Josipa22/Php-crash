<?php

class User
{
  public $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function set_name($name)
  {
    $this->name = $name;
  }

  function get_name()
  {
    return $this->name;
  }
}

$user1 = new User('Jopa', 'jops@gmail', 'kkkk');
$user2 = new User('Deja', 'dejs@gmail', 'kkkka');

echo $user1->email;
echo $user2->name;

class Employee extends User
{
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title()
  {
    return $this->title;
  }
}

$employee1 = new Employee('Sara', 'Sara@gmail,com', '2545', 'manager');

echo $employee1->get_title();
