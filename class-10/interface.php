<?php

interface En_Greeting
{
    public function En_greet();
}
interface Gr_Greeting
{
    public function Gr_greet();
}


class Speak implements En_Greeting, Gr_Greeting
{
    public function En_greet()
    {
        return 'Hello!';
    }
    public function Gr_greet()
    {
        return 'Hallo!';
    }
}

$speak = new Speak();

echo $speak->En_greet();
echo $speak->Gr_greet();
