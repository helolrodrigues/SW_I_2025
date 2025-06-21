<?php
class Funcionario {
    private $nome;
    private $salario;


    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($porcentagem) {
        $aumento = $this->salario * ($porcentagem / 100);
        $this->salario += $aumento;
    }

    public function exibirInformacoes() {
        echo " Nome: " . $this->nome;
        echo "<br> Salário: R$ " . $this->salario;
    }
}
?>
