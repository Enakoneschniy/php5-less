<?php
function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
Class Human{
    public static $eyes = 2;
    private static $religion;
    private static $religions = [
        'Буддизм',
        'Ислам',
        'Сатанизм',
        'Атеизм',
        'Христианство'
    ];
    public static function getReligion(){
        return !is_null(self::$religion) ? self::$religion : "Религия еще не установлена!";
    }

    public static function setReligion($religion){
        if(in_array($religion, self::$religions)) {
            self::$religion = $religion;
        }else{
            echo 'Такая религия не доступна!';
        }
    }
    public static function getEyes(){
        return "У человека: " . self::$eyes . " глаза.";
    }

    public static function print_r(){
        echo "I am print_r";
    }
}
Human::setReligion('Ислам');
echo "<br>";
echo Human::getReligion(), "<br>";
echo Human::$eyes, "<br>";
$vasya = new Human();
$petya = new Human();

Human::$eyes = 3;

dd($vasya::$eyes);
dd($petya::$eyes);

$vasya::$eyes = 4;

dd($vasya::$eyes);
dd($petya::$eyes);

Human::print_r();
echo "<br>", Human::getEyes();


class Math{
    const PI = 3.14;
    public static function pow($val, $pow){
        dd('pow'.$val);
    }

    public static function sqrt($val){
        dd('sqrt'.$val);
    }

    public static function cos($val){
        dd('cos'.$val);
    }
}

Math::cos(34);
echo "<br>";
echo Math::PI;
echo "<br>";
Math::pow(3, 4);