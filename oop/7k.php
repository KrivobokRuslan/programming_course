<?php
class GetSetMass{
    private $arr = [];
    public function __get($key){
        if (array_key_exists($key, $this->arr)) //необходимость проверки, как работает, если массив не наполнен
        {
            return $this->arr[$key];
        }
        else{
            return null;
        }
    }
    public function __set($key, $value){
        return $this->arr[$key] = $value;
    }
}
$exempl = new GetSetMass();
$exempl->text = '!!!<br>';
$exempl->name = 'Gera';
echo $exempl->text;
echo '<pre>';
echo $exempl->name;
echo '<pre>';
print_r($exempl);
echo '</pre>';
?>