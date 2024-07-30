<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes()
    {
        echo "<hr>Livro ".$this->getTitulo()." Escrito por ".$this->getAutor();
        echo "<br>Páginas: ".$this->getTotPaginas()." Atual: ". $this->getPagAtual();
        echo "<br>Sendo Lido por ".$this->getLeitor()->getNome()."";
    }

    public function abrir()
    {
        $this->setAberto(true);
    }
    public function fechar()
    {
        $this->setAberto(false);
    }

    public function folhear($pag)
    {
        if ($this->getAberto()) {
            if ($pag <= $this->getTotPaginas()) {
                $this->setPagAtual($pag);
            } else {
                $this->setPagAtual(0);
            }
        } else {
            echo "\nERRO! Livro fechado";
        }
    }
    public function avancarPag()
    {
        if ($this->getAberto()) {
            if ($this->pagAtual < $this->getTotPaginas()) {
                $this->setPagAtual($this->pagAtual + 1);
            } else {
                $this->setPagAtual(0);
            }
        } else {
            echo "\nERRO! Livro fechado";
        }
    }
    public function voltarPag()
    {
        if ($this->getAberto()) {
            if ($this->pagAtual > 0) {
                $this->setPagAtual($this->pagAtual - 1);
            } else {
                $this->setPagAtual(0);
            }
        } else {
            echo "\nERRO! Livro fechado";
        }
    }

    public function __construct($titulo,  $autor,  $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
}
