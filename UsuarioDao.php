<?php
include "conexao.php";

class usuarioDao{
    public function cadastrar(usuario $usu){
      $sql = "insert into usuario (cpf_usu, nome_usu, email_usu,senha_usu, men_usu) values (?, ?, ?, ?, ?)";
      $bd = new Conexao();
      $conn = $bd->getConexao();
      $vl = $conn->prepare($sql);
      $vl->bindValue(1, $usu->getCpf());
      $vl->bindValue(2, $usu->getNome());
      $vl->bindValue(3, $usu->getEmail());
      $vl->bindValue(4, $usu->getSenha ());
      $vl->bindValue(5, $usu-> getMen());
      $result = $vl->execute();
    if($result){
        echo "Cadastrado com sucesso";
    }else{
        echo "erro ao cadastrar";
    }
    }

    public function atualizar(usuario $usu){
        $sql = "update usuario set men_usu=? where cpf_usu=?";
        $bd = new Conexao();
        $conn = $bd->getConexao();

        $vl = $conn->prepare($sql);
        $vl->bindValue(1, $usu->getCpf());
        $vl->bindValue(2, $usu-> getMen());
      $result = $vl->execute();
      if($result){
          echo "Mensagem atualizada com sucesso";
      }else{
          echo "erro ao atualizar mensagem";
  }
    }
      public function apagar(usuario $usu){
        $sql = "delete from usuario where cpf_usu=?";
        $bd = new Conexao();
        $conn = $bd->getConexao();

        $vl = $conn->prepare($sql);
        $vl->bindValue(1, $usu->getCpf());
      $result = $vl->execute();

      if($result){
          echo "apagado com sucesso";
      }else{
          echo "erro ao apagar";
      }
  
        }

        public function consultar(){
             $sql = "select * from usuario";
             $bd = new Conexao();
             $conn = $bd->getConexao();

             $vl = $conn->prepare($sql);
             $result = $vl->execute();

             if($vl->rowCount()>0){
                $result = $vl->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
        }else{
            echo "dados não encontrados";
        }
        }
}
