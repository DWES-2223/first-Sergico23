<?php
class Enterprise implements JSerializable {
    private string $nombre;
    private string $direccion;
    private array $trabajadores;

    public function __construct(string $nombre, string $direccion)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): void
    {
        $this->direccion = $direccion;
    }

    public function addWorker( Worker $t ): void
    {
        $this->workers[] = $t;
    }

    public function listWorkersHtml() :string{
        $html = '<div>';
        foreach ($this->workers as $worker){
            $html .= Worker::toHtml($worker);
        }
        return $html.'</div>';
    }

    public function getCosteNominas(){
        $coste = 0;
        foreach ($this->workers as $worker){
            $coste += $worker->calcularSueldo();
        }
        return $coste;
    }

    public function toJSON(): string
    {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            if (is_array($valor)){
                foreach ($valor as $worker){
                    $mapa[$clave][] = $worker->toJSON();
                }
            } else {
                $mapa[$clave] = $valor;
            }
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}