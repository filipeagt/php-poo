<?php
class Visualizacao
{
    private $espectador;
    private $filme;

    public function avaliar()
    {
    }

    public function avaliarNota($nota)
    {
    }

    public function avaliarPorc($porc)
    {
    }

    public function __construct($espectador,  $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
    }

    public function getEspectador()
    {
        return $this->espectador;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    public function setFilme($filme)
    {
        $this->filme = $filme;
    }
}
