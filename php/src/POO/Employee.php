<?php
class Employee extends Worker {
    private int $horasTrabajadas;
    private float $precioHora;

    public function __construct( string $nombre, string $apellidos, int $edad )
    {
        parent::__construct( $nombre, $apellidos, $edad );
    }

    public function getHorasTrabajadas(): int
    {
        return $this->horasTrabajadas;
    }

    public function setHorasTrabajadas(int $horasTrabajadas): void
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function getPrecioHora(): float
    {
        return $this->precioHora;
    }

    public function setPrecioHora(float $precioHora): void
    {
        $this->precioHora = $precioHora;
    }

    public function calcularSueldo(): float
    {
        return $this->precioHora * $this->horasTrabajadas;
    }


}