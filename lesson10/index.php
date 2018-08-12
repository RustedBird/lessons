<?php

echo 'Lesson 10<br>';

class User
{
    const MAX_AGE = 100;

    protected $name;
    protected $age;
    protected $mail;

    private static $classDescription =
        '<br>This class was made for operation with users who is under '
        . self::MAX_AGE . ' years old';

    public function __construct($name, $age, $mail)
    {
        $this->name = $name;
        $this->age = $age;
        $this->mail = $mail;
    }

    public function getUserInfo()
    {
        return "My name is $this->name and i'm $this->age years old, my email: $this->mail";
    }

    public static function getClassInfo()
    {
        return self::$classDescription;
    }

    public function getMail()
    {
        return '<br>' . $this->mail;
    }

    public function setMail($newMail)
    {
        return '<br>' . $this->mail = $newMail;
    }
}

class Student extends User
{
    private $cash;

    function __construct($name, $age, $mail, $cash)
    {
        parent::__construct($name, $age, $mail);
        $this->cash = $cash;
    }

    function getStudentInfo()
    {
//        return "My name is $this->name I'm a student and I'm $this->age years old. I earn $this->cash dollars a month";
        return parent::getUserInfo() .
            ' and I\'m earning ' . $this->cash . ' dollars a month';
    }
}

class NewClass extends Student
{

}

$user1 = new User('Philipp', 28, 'user@mail.com');
$user2 = new User('James', 45, 'james@gmail.com');

$student1 = new Student('Bob', 20, 'bob20@mail.ru', 250);
$student2 = new NewClass('Bobasdasd', 200, 'bob20@mail.ru', 150);

var_dump($user1);
var_dump($user2);

echo $user1->getUserInfo();
echo '<br>';
echo $user2->getUserInfo();

echo User::getClassInfo();

echo $user1->getMail();
echo $user1->setMail('newmail@mail.com');

var_dump($student1);
echo $student2->getStudentInfo();









