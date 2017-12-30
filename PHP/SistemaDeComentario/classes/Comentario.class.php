<?php
include_once 'Cadastro.class.php';
include_once 'Comentario.class.php';
include_once 'RecuperaComentario.class.php';





class Comentario {
	private $id;
	private $comentario;
	private $data;
	

function __construct($comentario,$data){
	
	//$this->id = $id;	 
    $this->comentario = $comentario;
    $this->data = $data;
}
	
	


function getId(){
	  return $this->nome;
 }	
	
	function getComentario(){
	  return $this->comentario;
 }	

 
function  getData(){
	  return $this->data;
 }	
	
	
	}