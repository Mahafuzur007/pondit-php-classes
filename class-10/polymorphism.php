<?php

abstract class Person
{
    abstract public function greet();
}

class English extends Person
{
    public function greet()
    {
        return 'Hello!';
    }
}

class German extends Person
{
    public function greet()
    {
        return 'Hallo!';
    }
}

$lang = new English();
echo $lang->greet();
echo '<br>';
$lang = new GERMAN();
echo $lang->greet();


// $lang = [
//     new English(),
//     new German()
// ];

// function greeting($lang)
// {
//     foreach ($lang as $language) {
//         echo $language->greet() . '<br>';
//     }
// }

// greeting($lang);