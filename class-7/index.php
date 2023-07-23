<?php

    // class-work

    $country = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");


    foreach($country as $key=>$name){
        echo 'Country: '. $key.'- ' .'Capital:' .$name."<pre>";
    }


    // Example-01:

    $color = array('white', 'green', 'red', 'blue', 'black');

    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

    // Example - 02:

    $color = array('white', 'green', 'red');

    foreach($color as $c){
        echo "$c, ";
    }
    sort ($color);
    echo "<ul>";
    foreach ($color as $colors){
        echo "<li> $colors </li> ";
    }
    echo "<ul>";

    // Example - 03:

    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

    asort ($ceu); // asort(): Sort an associative array in ascending order, according to the value.
    foreach ($ceu as $country => $capital){
        echo "The Capital of $country is $capital"."<pre>";
    }

    // Example - 04:

    $x = array(1, 2, 3, 4, 5);
    unset($x[3]);

    $x = array_values($x);
    echo '
    ';
    var_dump($x);

?>