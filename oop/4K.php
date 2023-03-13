<?php

class Oopphp{
    public static $Hi = 'Hi';
    public  function __construct (){
        return self::$Hi.'  ';

    }
    public static function greeteng($n){
       //echo $n;
        return $n;
    }
}
echo Oopphp::$Hi.'<br>';
echo Oopphp::greeteng('Fedy')."<br>"."<br>";
?>

<?php
class delimiter{
    public static $n = 1;
    public function __construct()
    {
        self::$n++;
        echo '<br>'.'----------'.'<br>';
        echo "EXAMPLE #";
        echo self::$n."<br>"."<br>";
        //return self::$n;
    }
}
?>


<?php

$enter = new delimiter();
class User
{

    public $name, $old;
    private static $Pensiy = 65;
    function __construct ($n, $o){
        $this->name = $n;
        $this->old = $o;
    }
    static function Hello($user){
        echo 'Hello'.'<br>'."My name is  $user->name".'<br>';
        echo "age is $user->old".'<br>';
        echo "Вот здесь";
        $enter = new delimiter(); //экземпляр класса delimiter

    }


}
$pers = new User('Ivan', 52);
User::Hello($pers);
?>

<?php
$enter = new delimiter();
class Person
{
    public $name;
    private $id;
    private static $counter=0;

    function __construct($name)
    {
        self::$counter++;
        $this->id = self::$counter;
        $this->name = $name;
    }

    static function getCounter()
    {
        return self::$counter;
    }
    function getId()
    {
        return $this->id;
    }
}
$tom = new Person("Tom");
$bob = new Person("Bob");
echo "$tom->name имеет id: " . $tom->getId() . "<br>";
echo "$bob->name имеет id: " . $bob->getId() . "<br>";
echo "Всего пользователей: " .  Person::getCounter(). "<br>"."<br>";
?>

<?php
$enter = new delimiter();
class Userid
{
    public $name;
    protected $id;
    static $number = 0;

    public function __construct($name)
    {
        self::$number++;
        $this->id = self::$number;
        $this->name = $name;
        return self::$number;
    }


    public function input()
    {
        return $this->id;
    }
}
    $Nina = new Userid('Nina');
    $Ivan = new Userid('Ivan');
    $Misha = new Userid('Misha');
    echo "$Nina->name have id: ". $Nina->input().'<br>';
    echo "$Ivan->name have id: ". $Ivan->input().'<br>';
    echo "$Misha->name have id: ".$Misha->input().'<br>';
    echo "total rooms: ". Userid::$number.'<br>'.'<br>';

?>


<?php
$enter = new delimiter();
class Us{
    public $name;
    public $id;
    static $const = 0;
    public function __construct($name){
        self::$const++;
        $this->id = self::$const;
        $this->name = $name;

    }
    static function niochem():int
    {
        return self::$const;
    }
    public function enter():int
    {
        return $this->id;
    }

}
$Nata = new Us('Nata');
$Vany = new Us('Vany');
$Vera = new Us('Vera');
$Nana = new Us('Nana');
echo "Nata id=  $Nata->id".'<br>';
echo "Nata id=  $Vany->id".'<br>';
echo "Nata id=  $Vera->id".'<br>';
echo "Nata id=  $Nana->id".'<br>';
echo Us::niochem();
?>

<?php
class Person
{
    function __construct(public $name, public $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function displayInfo()
    {
        echo "Name: $this->name; Age: $this->age<br>";
    }
}
$tom = new Person("Tom", 36);
$tom -> displayInfo();
?>












