<?php
declare(strict_types=1);

class Antoms {}
class LivingBeing extends Antoms {}

// composition over inheritance
class Animal extends LivingBeing
{
    private bool $hungry = true;
    protected bool $tired = false;

    public function eat()
    {
        $this->hungry = false;
        $this->tired = true;
    }

    public function sleep()
    {
        $this->tired = false;
        $this->hungry = true;
    }

    public function walk($x, $y)
    {
        $this->locationX = $x;
        $this->locationY = $y;
    }
}

class Bird extends Animal {
    function fly(int $z) {
        $this->locationZ = $z;
    }
}

class Mammal extends Animal {
    function drinkMilk() {
        $this->milk = true;
    }
}

class Sheep extends Mammal {
    function saveWool() {
        $this->milk = true;
    }
}

$bird = new Bird('Chicken');
$bird->fly(10);
$bird->drinkMilk();

$sheep = new Mammal('sheep');
$sheep->drinkMilk();
