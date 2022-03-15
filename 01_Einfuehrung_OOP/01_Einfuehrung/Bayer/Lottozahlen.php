<?php

class Lottozahlen
{
private array $lottonumbers = [];
private array $userTip;
private int $win = 0;

public function generateValues()
{
    $i = 0;
    while($i < 6)
    {
        $insert = rand(1,49);
        if(in_array($insert, $this->lottonumbers) == false)
        {
            $this->lottonumbers[] = $insert;
            $i++;
        }
    }
    $this->compareTips();
}
public function setUserTip(array $userTip)
{
    $this->userTip = $userTip;
    $this->generateValues();
}

public function compareTips()
{
    for($i = 0; $i <= 5; $i++)
    {
        for ($x = 0; $x <= 5; $x++)
        {
            if ($this->lottonumbers[$i] == $this->userTip[$x])
            {
                $this->win++;
            }
        }
    }
    foreach ($this->lottonumbers as $value)
    {
        echo $value . " ";
    }
    echo "<br>";
    foreach ($this->userTip as $value)
    {
        echo $value . " ";
    }
    echo "<br>" . "Du hast " . $this->win . " richtige!";
}
}
$obj = new Lottozahlen();
$user = array
(
    0 => 5,
    1 => 2,
    2 => 15,
    3 => 43,
    4 => 32,
    5 => 21
);
$obj->setUserTip($user);