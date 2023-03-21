<?php //функцию arrayFill. которая будет заполнять массив заданными значениями.
//Первым параметром функция принимает значение, которым заполнять массив, а вторым - сколько элементов должно быть в массиве.
//Пример: arrayFill('x', 5) сделает массив ['x', 'x', 'x', 'x', 'x'].
function _arrayFill ($exempl, $number){
    $arr = [];
    for ($i=0; $i < $number; $i++){
        $arr [$i] = $exempl;
    }
    return $arr;
}
$enter =  _arrayFill('y', 6);
print_r($enter); // вывод массива через ф-цию или еще как-то можно?
?>

<?php //Пример: arrayFill('x', 5) сделает массив ['x', 'x', 'x', 'x', 'x'].
class Arfill {
    function __construct(public string $ex, public int $num)
    {
    }
    public function __arrayFill(): array {
        $arr = [];

        for ($i=0; $i < $this->num; $i++){
            $arr [$i] = $this->ex;
        }

        return $arr;
    }
}
$arfillfinal = new Arfill('x', 8);
echo '<br>'."class ".'<br>';
print_r($arfillfinal->__arrayFill());
?>
