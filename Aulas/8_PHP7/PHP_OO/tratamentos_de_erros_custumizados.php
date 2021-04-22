<?php
    class M_E_C extends Exception {
        private $erro = '';

        public function __construct($erro){
            $this->erro = $erro;
        }
        public function exibirMensageErro(){
            return $this->erro;
        }
    }

    // Error
    // Exception
    // Customizadas

    try {
        throw new M_E_C('Erro de teste');
    }catch (M_E_C $e) {
        echo $e->exibirMensageErro();
    }
    
    

?>