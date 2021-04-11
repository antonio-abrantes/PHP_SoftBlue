<?php

interface Transportavel
{
    public function transportar();
}

abstract class InstrumentoMusical
{
    public $volume;
    abstract public function tocar();
}

class Guitarra extends InstrumentoMusical implements Transportavel
{
    public function tocar()
    {
        echo "tocando guitarra!<br>";
    }

    public function transportar()
    {
        
    }
}
