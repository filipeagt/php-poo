<?php 
require_once 'Lobo.php'; 
class Cachorro extends Lobo {

    public function enterrarOsso() {
        echo "<p>Enterrando</p>";
    }

    public function abanarRabo() {
        echo "<p>Abanando</p>";
    }

    public function emitirSom()
    {
        echo "<p>Latindo</p>";
    }
}