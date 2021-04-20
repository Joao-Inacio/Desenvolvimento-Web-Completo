<?php
    
    class Exemplo{
        public static $atributo1 = 'atributo estático';
        public $atributo2 = 'atributo normal';

        public static function metodo1(){
            echo 'Eu sou um atributo estático ';
        }
        public function metodo2(){
            echo 'Eu sou um atributo normal';
        }
    }
    // $x = new Exemplo();
    echo Exemplo::$atributo1;
    echo '<br />';
    Exemplo::metodo1();
?>