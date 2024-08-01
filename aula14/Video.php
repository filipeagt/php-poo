<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function play()
    {
    }
    public function pause()
    {
    }
    public function like()
    {
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao): void
    {
        $this->avaliacao = $avaliacao;
    }

    public function setViews($views): void
    {
        $this->views = $views;
    }

    public function setCurtidas($curtidas): void
    {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo): void
    {
        $this->reproduzindo = $reproduzindo;
    }
}
