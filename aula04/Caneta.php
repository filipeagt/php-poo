<?php
class Caneta
{
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function __construct($modelo,  $cor,  $ponta)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->tampada = true;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function getTampada()
    {
        return $this->tampada;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    public function setTampada($tampada)
    {
        $this->tampada = $tampada;
    }
}
