<?php


include_once 'Cadastro.class.php';
include_once 'Comentario.class.php';
include_once 'RecuperaComentario.class.php';


 class Cadastro {
	 
	 private $id;
	 private $nome;
	 private $email;
	 private $senha;
	 private $imagem;
	 private $comentario;

		 
	 
function setId($id){
	$this->id = $id;
}

 function setNome($nome){
	 $this->nome = $nome;
 }

 function setEmail($email){
$this->email = $email;	 
 }

 
 function setSenha($senha){
	 $this->senha = $senha;
 }
 
function  setImagem($imagem){
	 $this->imagem = $imagem;
 }
	 
 function getId(){
	 return $this->id;
 }
 
  
 function getNome(){
	  return $this->nome;
 }
 
 
 
 function getEmail(){
	  return $this->email;
 }
 
 
 function getSenha(){
	  return $this->senha;
	 
 }
 
 
 function getImagem(){
	  return $this->imagem;
 }
 
	 
	 //metodos para acessar o $cadastro
	 
 function setComentario($comentario,$data){
	 $this->comentario = new Comentario($comentario,$data); 
 }
	 
	 
	 function getComentario(){
	  return $this->comentario;
 }
	 
	 
	 
	 
	 
	 
	 
 }  