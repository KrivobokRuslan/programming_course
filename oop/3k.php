<?php
//class User0{
  //  public $name;
    //public $e_mail;
    //public $number;
    //public function __construct($name, $e_mail, $number )
    //{
      //  $this->name = $name;
        //$this->e_mail = $e_mail;
        //$this->number = $number;
class mother {
    public $hair = 'light';
    public $location = 'Kharkov';
    public $surname = 'bezuh';
    public int $yearofbirth = 2000;
    public int $height = 160;
    public function __construct ($hair, $location, $surname, $yearofbirth ){
        $this->hair = $hair;
        $this->location = $location;
        $this->surname = $surname;
        $this->yearofbirth = $yearofbirth;
    }
    public function input () {
        return $this->name. " / ". $this->e_mail ." / ". $this->number;
        //return ;
        //return this->number;
    }

}
$concl = new User0("Alex", "al.gmail.com", "46");
echo $concl->input();
?>

<?php

class del{

    public static $n = 1;
    public function __construct(){
        self::$n++;
        echo '<br>'.'<br>';
        echo "EXAMPLE # ";
        echo self::$n.'<br>';
        echo "---------".'<br>';
    }

}
$DECL = new del();
?>

<?php
class User{
    public $name, $age;
    static $old = 65;
    public function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }
    static function sayhello($user){
        echo 'Hi!'.'<br>'."my name is $user->name".'<br>'."age is $user->age".'<br>';
        echo "pension old is = ";
        echo self::$old .'<br>';
    }
    public function resume(){
        if ($this->age >= user::$old)
            echo 'go to pensiy';
        else
            echo 'please go to work';


    }
}
$go = new User('Ivan', 55);
User::sayhello($go);
$go->resume();
?>


<?php
$DECL = new del();
class Person
{
    public $name, $age;
    static $retirenmentAge = 65;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function sayHello()
    {
        echo "Привет, меня зовут $this->name<br>";
    }
    static function printPerson($person)
    {
        echo "Имя: $person->name Возраст: $person->age<br>";
    }
    function checkAge()
    {
        if($this->age >= self::$retirenmentAge)
            echo "Пора на пенсию<br>";
        else
            echo "До пенсии еще " . (Person::$retirenmentAge - $this->age) . " лет<br>";
    }
}
$tom = new Person("Tom", 36);
$tom->sayHello();
Person::printPerson($tom);
$tom->checkAge();
?>

<?php
class Pension{
    public $name;
    static $pensage = 65;
    public function __construct (){

    }

}
?>
