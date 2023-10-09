<?php
abstract class Worker extends Person{

    const RANGO_IMPUESTOS = 35000;
    protected $telefonos = array();

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function setTelefonos(array $telefonos): void
    {
        $this->telefonos = $telefonos;
    }


    public static function toHtml(Person $p): string{
        return "<p>".$p->getNombreCompleto()."</p>";
    }

    public function toJSON(): string
    {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            $mapa[$clave] = $valor; }
        return json_encode($mapa);
    }

    abstract function calcularSueldo(): float;

    public function debePagarImpuestos(): bool
    {
        return self::RANGO_IMPUESTOS >= $this->calcularSueldo();
    }
}