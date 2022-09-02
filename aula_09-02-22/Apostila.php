<?php

namespace Apostila{
    
    class Informatica{
        private $Titulo;
        private $Quantidade;
        private $Valor;

        function __construct($value){
            $this->Titulo = $value;
        }

        //atribuir
        public function __set($atribut, $value){
            $this->$atribut = $value;
        }

        //ler
        public function __get($atribut){
            return $this->$atribut;
        }

    }//fim classe
}