<?php
class User{
    public $name;
    public $city;
    public $id;
    public function __construct ($name, $city){
        $this->city = $city;
        $this->name = $name;
    }
    public function __clone(){
        $this->id = 20000 ; // хотел записать 20000 + id, при вызове клона чтоб 20000

    }
    public function getId($id){
        $this->id = $id + 10000;
      return $this->id; // без $this обращения возвращает 1
    }

}
$user = new User('Tima', 'Kharkow');
echo "$user->name from in $user->city - id - ". $user->getId(1);
echo '<br>';
$user1 = clone $user;
var_dump($user1);// id = 20000
echo '<br>';
echo "$user1->name from in $user1->city - id - ".$user1->getId(8);
?>