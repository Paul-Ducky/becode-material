<?php

class Smurf {
    public const COLOR = 'blue';

    private string $name;
    static private int $apples = 0;

    /**
     * Smurf constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function singASong()
    {
        echo 'Welkom in smurfenland... Welkom allemaal!';
    }

    public function getColor()
    {
        //$this -> properties / methods
        // self -> constants
        return $this::COLOR;
    }

    public function findApple(int $howMany) {
        self::$apples += $howMany;
        return 'I found '. $howMany .' apple';
    }

    public static function getApples() {
        return self::$apples;
    }
}

class BlackSmurf extends Smurf {
    public const COLOR = 'black';
}

$smurf = new Smurf('Brilsmurf');
//echo $smurf->getColor();
echo $smurf->findApple(3);
echo PHP_EOL;

$smurfin = new Smurf('smurfin');
//echo $smurfin->getColor();
echo $smurf->findApple(1);
echo PHP_EOL;
echo 'The village has so many apples: '. Smurf::getApples();
echo PHP_EOL;


$blackSmurf = new BlackSmurf('Evil smurf');
echo $blackSmurf->getColor();

// echo 'I am '. Smurf::COLOR;
//echo 'I am the '. $smurf::COLOR;