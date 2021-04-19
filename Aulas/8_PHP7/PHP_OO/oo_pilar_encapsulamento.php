<?php
    
    class Pai{
        private $nome = 'João';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        // public function getNome(){
        //     return $this->nome;
        // }
        // public function setNome($value){
        //     if (strlen($value) >= 3) {
        //         $this->nome = $value;
        //     }
            
        // }
        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $value){
            $this->$attr = $value;
        }
        private function executarMania(){
            echo 'Assobiar';
        }
        protected function responder(){
            echo 'Oi';
        }
        public function executarAcao(){
            $this->executarMania();
        }
    }
    $pai = new Pai();
    echo $pai-> executarAcao();
    

    
?>