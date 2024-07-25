<?php
class ContaBanco
{
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Construtor
    public function __construct()
    {
        $this->status = false;
        $this->saldo = 0;                
    }

    //Métodos da Classe
    public function abrirConta($tipo/*, $numConta, $dono*/) {
        if($tipo=='CC' || $tipo=='CP') {
            $this->setTipo($tipo);            
        } else {
            echo "<p>ERRO! tipo de conta inválida!</p>";
        }
        $this->setStatus(true);
        if($tipo=='CC') {
            $this->setSaldo(50);
        } else {
            $this->setSaldo(150);
        }
        //$this->setNumConta($numConta);        
        //$this->setDono($dono);        
    }

    public function fecharConta() {
        if($this->getSaldo()>0){
            echo "<p>Conta com dinheiro</p>";
        } else if($this->getSaldo()<0){
            echo "<p>Conta em débito</p>";
        } else {
            $this->setStatus(false);
        }
    }

    public function depositar($valor) {
        if($this->getStatus()) {
            $this->setSaldo($this->getSaldo()+$valor);
        } else {
            echo "<p>Impossível depositar</p>";
        }
    }

    public function sacar($valor) {
        if($this->getStatus() && $this->getSaldo()>=$valor) {
            $this->setSaldo($this->getSaldo()-$valor);
        } else {
            echo "<p>Impossível sacar</p>";
        }
    }

    public function pagarMensal() {
        if($this->getStatus()) {
            if($this->getTipo()=='CC') {
                $this->setSaldo($this->getSaldo()-12);
            } else if($this->getTipo()=='CP'){
                $this->setSaldo($this->getSaldo()-20);
            }
        } else {
            echo "<p>Impossível pagar</p>";
        }
    }

    //Métodos especiais
    public function getNumConta()
    {
        return $this->numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}
