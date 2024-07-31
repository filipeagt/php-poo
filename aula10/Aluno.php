<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa
{
    private $matr;
    private $curso;

    public function cancelarMat()
    {
        echo '<p>A matrícula será cancelada.</p>';
    }

    /*public function __construct($matr,  $curso)
    {
        $this->matr = $matr;
        $this->curso = $curso;
    }*/

    public function getMatr()
    {
        return $this->matr;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setMatr($matr)
    {
        $this->matr = $matr;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}
