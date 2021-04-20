<?php

    interface EquipamentEletronico{
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentEletronico{
        public function abrirPorta(){
            echo 'Abrir Porta';
        }
        public function ligar(){
            echo 'Ligar';
        }
        public function desligar(){
            echo 'desligar';
        }

    }
    class Tv implements EquipamentEletronico{
        public function trocarCanal(){
            echo 'Trocar canal';
        }
        public function ligar(){
            echo 'Ligar';
        }
        public function desligar(){
            echo 'desligar';
        }
    }

    $x = new Geladeira();
    $y = new Tv();

    interface MamiferoInterface{
        public function respirar();
    }
    interface TerrestreInterface{
        public function andar();
    }
    interface AquaticoInterface{
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface{
        public function andar(){
            echo 'Andar';
        }
        public function respirar(){
            echo 'Respira';
        }
    }
    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function respirar(){
            echo 'Respira';
        }
        public function nadar(){
            echo 'Nadar';
        }
    }
    // ---------------------------------------------
    interface AnimalInterface {
        public function comer();
    }
    interface AveInterface extends AnimalInterface{
        public function voar();
    }
    class Papagaio implements AnimalInterface{
        public function voar(){
            echo 'voar';
        }
        public function comer(){
            echo 'Comer';
        }
    }

?>