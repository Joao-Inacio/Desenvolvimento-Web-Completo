<?php
    
    class Funcionario{
        // Atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }

        // // getters setters
        // function setNome($nome){
        //     $this->nome = $nome;
        // }
        // function setNumFilhos($numFilhos){
        //     $this->numFilhos = $numFilhos;
        // }
        // function getNome(){
        //     return $this->nome;
        // }
        // function getNumFilhos(){
        //     return $this->numFilhos;
        // }

        // // método
        // function resumirCadFunc(){
        //     return "$this->nome possui $this->numFilhos filhos";
        // }
        // function modificarNumFilhos($numFilhos){
        //     $this->numFilhos = $numFilhos;
        // }

    }
    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos(s)';

    echo '<br />';



?>