<?php

class Beverage
{
    protected $color;
    protected $price;
    protected $temperature;
    protected $name;

    public function __construct(string $color, float $price, string $temperature = 'cold', string $name)
    {
        $this->color       = $color;
        $this->price       = $price;
        $this->temperature = $temperature;
        $this->name       = $name;
    }

    public function getInfo(): string
    {
        return $this->name .' is ' . $this->temperature . ' and ' . $this->color . '</br>';
    }

}

class Beer extends Beverage
{
    private $alcoholpercentage;

    public function __construct(string $color, float $price, string $temperature = 'cold', string $name, float $alcoholpercentage)
    {
        $this->color       = $color;
        $this->price       = $price;
        $this->temperature = $temperature;
        $this->name       = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholPercentage(): string
    {
        return 'The alcohol percentage of ' . $this->name . ' is ' . $this->alcoholpercentage . '%.</br>';
    }

}

$cola = new Beverage('black',2.50,'cold','fritz cola');
$duvel = new Beer('blond',3.50,'cold','duvel',8.5);

echo ($cola -> getInfo());
echo ($duvel -> getInfo());
echo ($duvel -> getAlcoholPercentage());
echo ($duvel->alcoholpercentage);
