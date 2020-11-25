<?php
require_once 'classes\Conexaobd.php';
/*nome da classe*/
class Usuarios{

    /*atributos*/
    public $id;
    public $nome;
    public $login;
    public $senha;
    public $tipo;
    public $ra;
    public $email;
    public $dia;


    /* método LISTAR*/
    public function listar()
    {
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT id, nome, login, tipo, ra, email, dia FROM tb_usuarios";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    /* método INSERIR*/
    public function inserir($nome, $login, $senha, $tipo, $ra, $email, $dia)
    {
        $conexao =  Conexaobd::pegarConexao();
        $query="INSERT INTO tb_usuarios(nome, login, senha, tipo, ra, email, dia) VALUES('".$nome."','".$login."','".$senha."','".$tipo."','".$ra."','".$email."', NOW())";
        $conexao->exec($query);
    }

    /* método EXCLUIR*/
    public function excluir($id)
    {
        $conexao =  Conexaobd::pegarConexao();
        $query = "DELETE FROM tb_usuarios WHERE id = " . $id;
        $conexao->exec($query);
    }

    /* método EDITAR */
    public function alterar($id, $nome, $login, $senha, $tipo, $ra, $email, $dia)
    {
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_usuarios SET nome = '".$nome."', login = '".$login."', senha = '".$senha."', tipo = '".$tipo."', ra = '".$ra."', email = '".$email."', dia = '".$dia."' WHERE id = " . $id;
        $conexao->exec($query);
    }
        
    
    public function listar1Categoria($id)
    {
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT id, nome, login, tipo, ra, email, dia FROM tb_usuarios WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
        return $linha;
        }
    }
}