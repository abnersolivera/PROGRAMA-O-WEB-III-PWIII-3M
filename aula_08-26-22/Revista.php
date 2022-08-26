<?php
include("Livros.php");

// herança - visibilidade protected
// sub
class Revista extends Livros{
    protected $coresVestimento; //azul, vermelho, amarelo, branco
    protected $oficio;
    protected $tipoRev;
    //atributo static
    public static $simboloHeroi = "S";
 
 public function __construct($cores){
    
      $this->coresVestimento = $cores;
   }
   //

   public function __set($atributo, $value){
      $this->$atributo = $value;
    }
    public function __get($atributo){
       return $this->$atributo;
    }

   //Método estatico.
   public static function apresenta(){
      return "Seja benvindo ao mundo das historias em quadrinhos!!!!";
   }

   public function pessoa($value){
      return self::apresenta() . $value;
   }

   

}


?>