<?php
class Avaliacao {
    public $id;
    public $nome;
    public $cidade;
    public $sexo;
    public $idade;
    public $nota;
    public function __construct($id = false){
        if($id){
            $this -> id=$id;
            $this -> carregar();
        }
     }
    
     public function inserir(){
        $sql = "INSERT INTO avaliacao(nome,cidade,sexo,idade,nota) VALUES(
            '".$this ->nome."',
             '".$this ->cidade."',
             '".$this ->sexo."',
             '".$this ->idade."',
             '".$this ->nota."'
           
      
            
            )";
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal','root','');
            $conexao -> exec($sql);
            echo "registro gravado com sucesso";
        }


        public function listar(){
            $sql = "SELECT * FROM avaliacao";
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal','root','');
            $resultado = $conexao -> query($sql);
            $lista = $resultado ->fetchALL();
                return $lista;
            }
}





