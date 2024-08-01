<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa
{
    private $login;
    private $totAssistido;

    public function viuMaisUm()
    {
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    public function setLogin($login): void
    {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido): void
    {
        $this->totAssistido = $totAssistido;
    }
}
