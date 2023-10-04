<?php
class Empleado extends Persona8 {

    const LIMITE_EDAT = 66;
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellidos, float $sueldo = 0.0, int $edad = self::LIMITE_EDAT) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }


    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }

    public static function toHtml(Persona $emp): string {
        $html = '';
        if ($emp instanceof Empleado) {
            $html .= '<p>Nom complet (Empleado): ' . $emp->getNombreCompleto() . '</p>';
            $telefonos = $emp->getTelefonos();
            if (!empty($telefonos)) {
                $html .= "<p>Telèfons:</p><ol>";
                foreach ($telefonos as $telefono) {
                    $html .= "<li>$telefono</li>";
                }
                $html .= "</ol>";
            } else {
                $html .= "<p>No hi ha telèfons disponibles.</p>";
            }
        } else {
            $html .= '<p>Nom complet (Persona): ' . $emp->getNombreCompleto() . '</p>';
        }
        return $html;
    }

    public function __toString(): string {
        $telefonoString = "Telèfons: " . $this->listarTelefonos();
        $impuestosString = $this->debePagarImpuestos() ? "Ha de pagar impostos" : "No ha de pagar impostos";

        return "Nom complet (Empleado): " . $this->getNombreCompleto() . "\n" . $telefonoString . "\n" . $impuestosString;
    }

}

