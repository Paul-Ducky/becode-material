<?php
declare(strict_types=1);

class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    function __construct($color, $price, $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return sprintf('This beverage is %s and %s.',
                $this->temperature,
                $this->color
            ) . PHP_EOL;
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color . PHP_EOL;
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholpercentage;

    function __construct($name, $alcoholpercentage, $color, $price)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage(): string
    {
        return $this->alcoholpercentage . PHP_EOL;
    }

    public function beerInfo(): string
    {
        return sprintf("Hi, I'm %s and have an alcohol percentage of %s and I have a %s color.",
                $this->name,
                $this->alcoholpercentage,
                $this->color
            ) .
            PHP_EOL;
    }
}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);

echo $duvel->getAlcoholpercentage();
echo $duvel->getColor();
echo $duvel->getInfo();

$duvel->setColor('light');
echo $duvel->getColor();

echo $duvel->beerInfo(); 