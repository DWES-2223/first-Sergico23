<?php
abstract class Person implements JSerializable
{
    const EDAD_LIMITE = 66;
    protected static  $limite_sueldo = self::EDAD_LIMITE;
    protected $nombre,$apellidos,$edat;


    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre( string $nombre ): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos( string $apellidos ): void
    {
        $this->apellidos = $apellidos;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad( int $edad ): void
    {
        $this->edad = $edad;
    }

    public function getNombreCompleto(): string
    {
        return $this->getNombre() . " " . $this->getApellidos();
    }

    public function estaJubilado(): bool
    {
        return $this->edat > self::$limite_sueldo;
    }

    public static function modificaLimite(int $limite){
        self::$limite_sueldo = $limite;
    }
    abstract public static function toHtml(Person $p): string;

    public function __toString(): string {
        return "Nom complet: " . $this->getNombreCompleto();
    }

    public function toJSON(): string
    {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            $mapa[$clave] = $valor; }
        return json_encode($mapa);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}