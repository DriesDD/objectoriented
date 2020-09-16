<?php

class Beverage
{
    protected $color;
    protected $price;
    protected $temperature;

    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color       = $color;
        $this->price       = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '</br>';
    }

}

class Beer extends Beverage
{
    private $name;
    private $alcoholpercentage;

    public function __construct(string $color, float $price, string $temperature = 'cold', string $brewery, float $alcoholpercentage)
    {
        $this->color       = $color;
        $this->price       = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '</br>';
    }

}

$cola = new Beverage('black',2.50,'cold');
$duvel = new Beer('blond,',3,'cold','moortgat',8.5);

echo ($cola -> getInfo());
echo ($duvel -> getInfo());
