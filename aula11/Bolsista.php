<?php
require_once 'Aluno.php';
class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa()
    {
        echo "<p>Bolsa renovada!</p>";
    }

    public function pagarMensalidade()
    {
        echo "<p>".$this->getNome()." pagou " . (100 - $this->bolsa) . "% da mensaliade</p>";
    }

    public function __construct()
    {
        $this->bolsa = 10;
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }
}
