<?php
    
    namespace A;

    class Cliente {
        public $nome = 'João';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }
        public function salvar(){
            echo 'Salvar';
        }
    }
    interface CadastroInterface{
        public function salvar();
    }
    
    namespace B;

    class Cliente {
        public $nome = 'Inácio';
        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($attr){
            return $this->$attr;
        }
        public function remover(){
            echo 'Remover';
        }

    }
    interface CadastroInterface{
        public function remover();
    }

    $x = new \A\Cliente();
    print_r($x);
    echo $x->__get('nome')
    
?>