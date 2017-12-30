<?php
//ESTA PAGINA LOGA O USUARIO,VERIFICA,VALIDA O LOGIN E INFORMA SE O CADASTRO ESTA CORRETO VIA AJAX
session_start();
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';


$email = $_GET['email']; 
$senha = $_GET['senha'];

$check_user= new CRUD();
$array = $check_user->select('cadastro',"where email='$email' AND senha ='$senha'",array(),'nome,id');
$quant_registro = $array->rowCount();


if($quant_registro > 0){
   foreach ($array as $value) {
   $_SESSION['nome'] = $value['nome'];
   $_SESSION['id'] = $value['id'];
   }
echo'true'; 
}elseif(empty($email) || empty($senha)){       
       echo'empty';
   } else {
       echo 'false';
   }  
   
   
   
   
   
   
   
   
