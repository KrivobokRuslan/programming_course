<?php
class user
{
    public $name;
    public $password;
      public function username($a)
    {
        echo 'name - '.$this->name.'<br>';
        echo 'pass -  '.$this->password.'<br>';
        echo $a;
        $this->text();
    }
     public function text($b){
                echo 'Number'.'<br>';// $a
         echo $b ;//+= $a;
        }

}
$names = new user();
$names->name = 'Ivan';
$names->password = 'Gold';
$names->username(5);
$names->text(6);
?> // присвоить номер