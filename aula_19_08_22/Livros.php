<?php
class Livros{
    //1°
    //atributos (private)
    // livres
    
    private $_Codigo;
    private $_Titulo;
    private $_Descricao;
    private $_Preco;
    private $_AnoEd;
    private $_QtdPag;
    private $_Personagem;
    private $_Isbn;
    private $_Capa;

    //2°
    //Construtor 
    //vazio

    public function __construct(){}
    
    //3°
    //Metods public or magic
    //colocar o valor do livro e depois dar desconto

    public function __set($atributs, $value){
        $this->$atributs = $value;
    }

    public function __get($value){
        return $this->$value;
    }    

    public function Desconto(){
        $desconto = $this->_Preco * (0.10);
        $valor = $this->_Preco - $desconto;        
        return $valor;
    }    
    //4° três objeto/instância - arquivos index
}