<?php
class Manager extends Worker
{
    private float $salario;

    public function __construct( string $nombre, string $apellidos, int $edad )
    {
        parent::__construct( $nombre, $apellidos, $edad );
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario ): void
    {
        $this->salario = $salario;
    }

    function calcularSueldo(): float
    {
        return $this->getSalario() + $this->getSalario() * parent::getEdad() / 100;
    }
}