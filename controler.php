<?php 
$nome_usu = filter_input(INPUT_POST, "nome_usu");
$cpf_usu = filter_input(INPUT_POST, "cpf_usu");
$email_usu = filter_input(INPUT_POST, "email_usu");
$senha_usu = filter_input(INPUT_POST, "senha_usu");
$men_usu = filter_input(INPUT_POST, "men_usu");
$botao = filter_input(INPUT_POST, "botao");

include "UsuarioDao.php";
include "usuario.php";

$usu = new usuario();
$usu->setNome($nome_usu);
$usu->setCpf($cpf_usu);
$usu->setEmail($email_usu);
$usu->setSenha($senha_usu);
$usu->setMen($men_usu);

$usuariodao = new usuarioDao();

if($botao=="CADASTRAR"){
    $usuariodao->cadastrar($Al);
}else if($botao=="ATUALIZAR"){
    $usuariodao->atualizar($Al);
}else if($botao=="EXCLUIR"){
    $usuariodao->apagar($Al);
}else if($botao=="CONSULTAR"){
    $usuariodao->consultar();
    foreach($usuariodao->consultar() as $consult){
        echo $consult['nomealuno'] . "<BR>";
        echo $consult['cpfaluno'] . "<BR>";
        echo $consult['turmaaluno'] . "<BR><BR>";
    }
}
?>