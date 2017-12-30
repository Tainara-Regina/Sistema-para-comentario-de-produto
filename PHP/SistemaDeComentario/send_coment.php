<?php
//VERIFICA O CAMPO DE COMENTARIO,SE VAZIA OU USUARIO NÃO LOGADO,RESPONDE COM MENSAGEM 
session_start();
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';

?>

<?php

unset($comentario);


$data =$_REQUEST["d"];
$comentario = $_REQUEST["q"];

if(isset($_SESSION['id'])){
$idUser=$_SESSION['id'];
if(empty($comentario)){
echo'<p style="color:red; ">Mensagem vazia</p>';
}else{
    
    $send = new CRUD();
    $send->insert('comentario','comentario=?,data=?,autor=?', array($comentario,$data,$idUser));
echo'<p > Mensagem enviada com sucesso!</p>';
}
}else{
 echo '<p> Mensagem não enviada</p>';
    }
  
