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
        $this->name        = $name;
    }

    public function getInfo(): string
    {
        return $this->name . ' is ' . $this->temperature . ' and ' . $this->color . '</br>';
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
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
        $this->name        = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholPercentage(): string
    {
        return 'The alcohol percentage of ' . $this->name . ' is ' . $this->alcoholpercentage . '%.</br>';
    }

    public function beerInfo(): string
    {
        return 'Hi, I\'m ' . $this->name . ' and I have an alcohol percentage of ' . $this->alcoholpercentage . '%. I\'m ' . $this->color . ' in color.</br>';
    }
}

$duvel = new Beer('blond', 3.50, 'cold', 'duvel', 8.5);

echo ($duvel->getInfo());
$duvel->setColor('light');
echo ($duvel->getInfo());
echo ($duvel->beerInfo());
echo ($duvel->getAlcoholPercentage());
