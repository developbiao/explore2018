<?php
class Account {
  public $balance;
  public function __construct($balance) {
    $this->balance = $balance;
  }

}

class Person {
  private $name;
  private $age;
  private $id;
  public $account;

  public function __construct($name, $age, Account $account) {
      $this->name = $name;
      $this->age = $age;
      $this->account = $account;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function __clone(){
    $this->id = 0;
  }

}

$person = new Person('Lisa', 30, new Account(200));
$person->setId(789);
$person2 = clone($person);

// 给lisa 充一些钱
$person->account->balance += 10;

// 结果person2 也有了钱，这不合理
//print $person2->account->balance;
print_r($person2);
