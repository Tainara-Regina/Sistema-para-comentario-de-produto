<?php
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';
include_once 'Cadastro.class.php';
include_once 'Comentario.class.php';






class RecuperaComentario{
	public $comentariosRecuperados;
	
	
function __construct(){
	}

        
        
        
        
        
        function popula($inicio,$quantidade){
         //exibe totos os comentarios
$coments = new CRUD();

$value_coments = $coments->select('cadastro join comentario',
 'ON cadastro.id = comentario.autor ORDER BY  comentario.id DESC LIMIT '.$inicio.','.$quantidade, array(), 'cadastro.nome ,comentario.comentario,
 comentario.data,cadastro.imagem');

 

 $results = array();
 
 foreach($value_coments as $value){
	// Cria objeto a cada loop populando seus metodos
  
    $cadastro = new Cadastro();
    $cadastro->setNome($value['nome']);
    $cadastro->setImagem($value['imagem']);
    $cadastro->setComentario($value['comentario'],$value['data']); 
	
        $results[] = $cadastro;
	
  }
 
     return $results;   
     }
        
        
        
        
        
        
       
 }