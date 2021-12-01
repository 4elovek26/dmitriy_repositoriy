<!DOCTYPE HTML>
<html lang = "en">
<head>
    <meta chgarset=<"UTF-8">
    <title>4elovek</title>
</head>
<body>
<?php

class statuser {
    public static $name;
    public static function hello(){
        echo " Hello ".self::$name."<br>";
    }
}

statuser::$name = "Alex";
echo statuser::$name;
statuser::hello();

Class ShoppingCard {
//пустой
}

Final Class Shop {
    Private $name;

    final public function naming() {
        $this -> name = "Adidas";
        echo $this->name."<br>";
    }
}

Class User {
   /* public $name = "Дима";
    public $password = "123q";
    public $email = "qw@mail.ru";
    public $city = "Сыктывкар"; появление __construct*/ 

    private static $nameteach4;

    function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function __destruct()
    {
        echo "<br> Это сообщение выводится после уничтожения класса {$this->name}";
    }

    public static function setNameteach4($name1) {
        self::$nameteach4 = $name1;
    }

    public static function getNameteach4(){
        return self::$nameteach4;
    }

    public function Hello() {
        echo "Hello {$this->name}";
    }

    function getInfo(){
        $information = "<br>{$this->name}"." ". "{$this->surname} <br>";
        return $information;
    }



    public function getName() {
        echo $this->name;
        $this->test();
    }

    public function test() {
        echo " Test <br>";
    }


}


class Moderator extends User {

    function __construct($name, $password, $email, $city, $info, $rights)
    {
        parent::__construct($name, $password, $email, $city);
        $this->info = $info;
        $this->rights = $rights;
    }
   
    public function privetstvie() {
        echo "Moderator is here";
    }

    function getInfo(){
        $information = parent::getInfo();
        $information .= "{$this->info}"." ". "{$this->rights} <br>";
        return $information;
    }
 
}



$product1 = new ShoppingCard();
$product = new Shop;
$admin = new User("Дмитрий", "123q", "qw@mail.ru", "Сыктывкар");
$user1 = new User("1", "2", "3", "4");

var_dump($product1 instanceof ShoppingCard);

echo $admin->name."<br>";
//$user1->name = "Андрей"; появление __construct
$user1->surname = "Иванов"; 

echo $user1->surname." ".$user1->name."<br>";
$product->naming();
//$product->name = "Nike"; //ошибка, переменная name = private

//$admin->name = "Алексей"; появление __construct
$admin->surname = "Имнадзе"; 
echo "{$admin->Hello()} <br>";
echo "Пользователь: {$admin->getInfo()}";
var_dump($user1);
echo "<br>";
$admin->name = "Димон";
$admin->getName();


User::setNameteach4('Ivan');
echo User::getNameteach4()."<br>";

$moder = new Moderator("ModerName", "ModerPass", "ModerEmail", "ModerPhone", "Moderator", "True");
echo $moder->getInfo();
echo $moder->privetstvie();

?>

