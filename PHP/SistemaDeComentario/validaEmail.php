<?php
//PAGINA QUE FAZ A BUSCA PARA VERIFICAR SE EMAIL PODE SER UTILIZADO OU SE JA É CADASTRADO
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';

$email = $_GET['email'];
$check_user= new CRUD();
$array = $check_user->select('cadastro',"where email='$email'",array(),'nome,id');
$quant_registro = $array->rowCount();


if($quant_registro > 0){
   echo'true'; 
} else {
       echo 'false';
   }  
   