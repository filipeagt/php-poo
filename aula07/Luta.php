<?php
class Luta
{
    private $desfiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function __construct($desfiado,  $desafiante,  $rounds,  $aprovada)
    {
        $this->desfiado = $desfiado;
        $this->desafiante = $desafiante;
        $this->rounds = $rounds;
        $this->aprovada = $aprovada;
    }

    public function getDesfiado()
    {
        return $this->desfiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setDesfiado($desfiado): void
    {
        $this->desfiado = $desfiado;
    }

    public function setDesafiante($desafiante): void
    {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void
    {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void
    {
        $this->aprovada = $aprovada;
    }

    public function marcarLuta() {

    }

    public function lutar() {

    }
}
