<?php
class  Produto{
    private $Nome;
    private $Preco;
    private $Quantidade;


    public function __construct ($nome_produto,$preco_produto=0,$quantidade_produto=0){
        $this-> Nome = $nome_produto;
        $this-> Preco = $preco_produto;
        $this-> Quantidade = $quantidade_produto;
    }

    //GET
    public function getnome(){
        return $this->Nome;
    }

    public function getpreco(){
        return $this->Preco;
    }


    //SET
    public function setnome(){
        return $this->Nome;
    }

    public function setpreco(){
        return $this->Preco;
    }
    
        public function adicionarEstoque($quantidade_produto){
            return $this->Quantidade_produto;
        }
}



?>