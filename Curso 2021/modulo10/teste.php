<?php

interface Falavel
{
    public function falar();
}

interface Acessavel
{
    public function acessar();
}

abstract class Mamifero implements Acessavel
{
    public function comer()
    {
        echo "COMER<br>";
    }
}

abstract class Homem extends Mamifero implements Falavel
{
    public function dirigir()
    {
        echo "DIRIGIR<br>";
    }

    public function acessar()
    {
        echo "ACESSAR<br>";
    }
}

class Instrutor extends Homem
{
    public function falar()
    {
        echo "FALAR<br>";
    }
}

class InstrutorSoftblue extends Instrutor
{
    public function ensinar()
    {
        echo "ENSINAR<br>";
    }
}

class Teste{
    public static function Teste1()
    {
        echo "teste1";
    }
}

$t = new Teste();

$c = new InstrutorSoftblue();
$c->falar();
$c->acessar();
$c->comer();
$c->dirigir();
$c->ensinar();
