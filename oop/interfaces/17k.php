
<?php
class String_funcrions {
    public static $separator;
    public static $mass;
    public static $stroka;
    public static $substring;
    public static $stro;
    public static $key;
    public static function _implode_ (){
        $str = self::$mass[0];
        for ($i=1; $i<count(self::$mass); $i++) {
            $str .= self::$separator ;
            $str .= self::$mass[$i];
        }
        return $str;
    }
    public static function _strrev_(){ //  Переворачивает строку задом наперёд

        $strokafinal = "";
        $arr1 = str_split(self::$stroka);
        $arr1 = array_reverse($arr1); //Возвращает массив с элементами в обратном порядке
        for ($i=0; $i<count($arr1); $i++){
            $strokafinal .= $arr1[$i];
        }
        return $strokafinal;
    }
    public static function ___strpos (){ //Возвращает позицию первого вхождения подстроки

        $mass_sub = str_split(self::$substring);
        $mass_str = str_split(self::$stro);
        //$final = 0;
        for ($i =self:: $key; $i <=count($mass_str); $i++) {
            self::$key++;
        if ($mass_sub[0] == $mass_str[$i]) {
              break;
            }
        }
        return self::$key;
    }
}
$arr = ['hy', 'my', 'baby', '5', 'раз'];
String_funcrions::$separator = " , ";
String_funcrions::$mass = $arr;
echo "'implode'".'<br>';
echo String_funcrions::_implode_().'<br>';

echo '<br>'."'strrev'".'<br>';
echo String_funcrions::$stroka = 'karolina';
echo '<br>';
echo String_funcrions::_strrev_();

echo '<br>'.'<br>'.'in class function strpos'.'<br>';
echo 'stroka -  '. String_funcrions::$stro = 'odissey';
echo '<br>';
echo 'substring -  '.String_funcrions::$substring = 'i';
echo '<br>';
echo 'start number -  '.String_funcrions::$key = 0;
echo '<br>';
echo String_funcrions::___strpos();

?>


<?php //возвращает положение фрагмента относительно заданого начала
function _strpos_(string $str, string $substring1, int $k = 0){
    $mass_sub1 = str_split($substring1);
    $mass_str1 = str_split($str);
     for ($i = $k; $i <=count($mass_str1); $i++){
        $k++;
        if ($mass_sub1[0] ==$mass_str1[$i]){
            break;

        }
    }
    echo $mass_sub1[0].'<br>';
    print_r($mass_str1);
    return $k;
}
echo '<br>'.'<br>'.'function strpos'.'<br>';
echo '<br>'. _strpos_('dsefodednfia', 'd', 2);
?>


<?php // проба
class User{
    public function __construct(string $a, int $b)
    {
        echo $a . '  is  '.$b .'  years old'.'<br>';
    }
}
echo '<br>'.'<br>'.'proba'.'<br>';
$user = new User('Ivan',36);
$user1 = new User('Zoy',24);
$user2 = new User('Geny',28);
$users = [$user, $user1, $user2];
var_dump($users);
for ($i = 0; $i<count($users); $i++){
    echo $users[$i];
}
?>

<?php
class City {

}
?>
<?php /*//преобразован в нижний регистр, если этот символ является ASCII-символом в диапазоне от "A" (0x41) до "Z" (0x5a).
echo '<br>';
echo $str = "Mary Had A Little Lamb and She LOVED It So". '<br>';
$str = strtolower($str);
echo '<br>'.$str;
*/?>


