<?php
class Retangulo {
    private $largura;
    private $altura;

   //SET
    public function setLargura($largura) {
        $this->largura = $largura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

   //GET
    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

?>
