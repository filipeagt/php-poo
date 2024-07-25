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
        echo "<p>Conta criada com sucesso!</p>";               
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
            echo "<p>Conta de {$this->getDono()} fechada com sucesso</p>";
        }
    }

    public function depositar($valor) {
        if($this->getStatus()) {
            $this->setSaldo($this->getSaldo()+$valor);
            echo "<p>Depósito de $valor na conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Impossível depositar, conta fechada</p>";
        }
    }

    public function sacar($valor) {
        if($this->getStatus()) {
            if ($this->getSaldo()>=$valor) {
                $this->setSaldo($this->getSaldo()-$valor);
                echo "<p>Saque no valor de $valor autorizado na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo insuficiente para saque</p>";
            }
        } else {
            echo "<p>Impossível sacar, conta fechada</p>";
        }
    }

    public function pagarMensal() {
        if($this->getStatus()) {
            if($this->getTipo()=='CC') {
                $v = 12;
            } else if($this->getTipo()=='CP'){
                $v = 20;
            }
            $this->setSaldo($this->getSaldo()-$v);
            echo "<p>Mensalidade de $v debitada da conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Impossível pagar, conta fechada</p>";
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
