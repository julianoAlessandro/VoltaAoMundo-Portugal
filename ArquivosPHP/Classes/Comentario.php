<?php
class Comentario {
    public $id_lugar;
    public $nome;
    public $email;
    public $comentario;
    public $ComentarioRespondido;
    public function __construct($id_lugar = false){
        if($id_lugar){
            $this -> id_lugar=$id_lugar;
            $this -> carregar();
        }
     }

    public function inserir(){
    $sql = "INSERT INTO lugares(nome,email,comentario,ComentarioRespondido) VALUES(
        '".$this ->nome."',
         '".$this ->email."',
         '".$this ->comentario."',
         '".$this ->ComentarioRespondido."'
  
        
        )";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal','root','');
        $conexao -> exec($sql);
        echo "registro gravado com sucesso";
    }

    public function carregar()
    {
        $sql = "SELECT * FROM lugares WHERE id_lugar = " . $this->id_lugar;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal','root','');
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->nome = $linha['nome'];
        $this->email = $linha['email'];
        $this->comentario = $linha['comentario'];
        $this->ComentarioRespondido = $linha['ComentarioRespondido'];

    
        
        
    }

    public function listar(){
        $sql = "SELECT * FROM lugares";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal','root','');
        $resultado = $conexao -> query($sql);
        $lista = $resultado ->fetchALL();
            return $lista;
        }

   
        public function atualizar()
        {
            $sql = "UPDATE lugares SET
            nome = '".$this->nome."',
            email = '".$this->email."',
            comentario = '".$this->comentario."',
            ComentarioRespondido = '".$this->ComentarioRespondido."'
             WHERE id_lugar = '".$this->id_lugar."'";
             $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal','root','');
             $conexao->exec($sql);
                    
        }
}
