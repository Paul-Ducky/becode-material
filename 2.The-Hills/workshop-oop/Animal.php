<?php
declare(strict_types=1);

class AnimalTheFirst
{
    private string $name;
    private string $type = 'mammal';
    private float $height = 0.0;
    private float $width = 0.0;

    public function __construct(string $name, string $type, float $height, float $width)
    {
        /*
        $this->name = $name;
        $this->type = $type;
        $this->height = $height;
        $this->width = $width;
        */
    }


    public function getHeight()
    {
        // CTRL - ALT - T

        return $this->height;
    }

    /**
     * @param float|int $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float|int $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }



    public function sayHello() : string {
        $size = $this->getSize();

        return sprintf('I am a %s of the %s %s type',
            $this->name,
            $size,
            $this->type
        ) . PHP_EOL;
    }

    private function calculateSize() : float {
        return $this->height * $this->width;
    }

    public function login(string $username, string $password, bool $sendEmailWhenLoggedIn=false, bool $loginAsAdmin=false) : bool
    {
        return ($username == 'koen' && $password == 'secret');
    }

    public function getSize(): string
    {
        $size = 'small';
        if ($this->calculateSize() > 30) {//o no, this is a magic value
            $size = 'large';
        }
        return $size;
    }
}
$cat = new Animal('cat', 'mammal');
//$cat->type = 'mammal';
//$cat->width = 4;
//$cat->height = 5;
echo $cat->sayHello();

$dog = new Animal('dog', 'smurf');

var_dump($dog->getName());

//$dog->type = 'mammal';
//$dog->width = 12;
//$dog->height = 9;
echo $dog->sayHello();



