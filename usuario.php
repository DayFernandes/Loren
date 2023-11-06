<?php
class usuario{
private $cpf_usu,
 $nome_usu,
 $email_usu,
$senha_usu,
$men_usu;
 

 public function getCpf(){

    return $this->cpf_usu;

 }

 public function setCpf($cpf_usu){

    $this->$cpf_usu=$cpf_usu;

 }

 

 public function getNome(){
    return $this->nome_usu;
 }

 public function setNome($nome_usu){
    $this->nome_usu=$nome_usu;
 }
 
public function getEmail(){
    return $this->email_usu;
 }

 public function setEmail($email_usu){
    $this->email_usu=$email_usu;
 }


 public function getSenha(){
    return $this->senha_usu;
 }

 public function setSenha($senha_usu){

    $this->senha_usu=$senha_usu;

 }

 

 public function getMen(){
    return $this->men_usu;
 }

 public function setMen($men_usu){
    $this->men_usu=$men_usu;
 }
}
?>
