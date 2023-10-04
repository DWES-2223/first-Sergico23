<?php
class Persona8 {
    private static int $limite_edat = 66;
    public function __construct(
        private string $nombre,
        private string $apellidos,
        private int $edad = 25
    ) {}

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }
    public static function modificaLimite(int $nuevoLimite): void {
        self::$limite_edat = $nuevoLimite;
    }
    public function estaJubilado(): bool {
        return $this->edad >= self::$limite_edat;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }

    public static function toHtml(Persona $p): string {
        return '<p>Nom complet: ' . $p->getNombreCompleto() . '</p>';
    }

    public function __toString(): string {
        return "Nom complet: " . $this->getNombreCompleto();
    }

}