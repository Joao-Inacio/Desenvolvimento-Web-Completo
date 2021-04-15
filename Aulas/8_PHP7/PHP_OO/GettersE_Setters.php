<?php
    
    class Funcionario{
        // Atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        // getters setters
        function setNome($nome){
            $this->nome = $nome;
        }
        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
        function getNome(){
            return $this->nome;
        }
        function getNumFilhos(){
            return $this->numFilhos;
        }

        // método
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filhos";
        }
        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

    }
    $y = new Funcionario();
    $y->setNome('José');
    $y->setNumFilhos(2);
    echo $y->resumirCadFunc();
    echo '<br />';
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();



?>