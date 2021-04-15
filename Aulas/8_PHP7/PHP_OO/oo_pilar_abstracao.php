<?php
    
    class Funcionario{
        // Atributos
        public $nome = 'Jose';
        public $telefone = ' 11 9999-8888';
        public $numFilhos = 2;

        // método
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filhos";
        }
        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

    }
    $y = new Funcionario();
    echo $y->resumirCadFunc();
    echo '<br />';
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();



?>