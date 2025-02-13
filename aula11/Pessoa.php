<?php
abstract class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;

    public final function fazerAniv()
    {
        $this->setIdade($this->getIdade() + 1);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
}
