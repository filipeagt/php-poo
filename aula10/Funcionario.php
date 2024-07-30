<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa
{
    private $setor;
    private $trabalhando;

    public function mudarTrabalho()
    {

    }

    /*public function __construct($setor,  $trabalhando)
    {
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }*/

    public function getSetor()
    {
        return $this->setor;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;
    }
}
