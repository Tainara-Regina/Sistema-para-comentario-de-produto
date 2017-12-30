<?php
//RECARREGA OS COMENTARIOS QUANDO O BOTÃO ENVIAR É ACIONADO
session_start();
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';
include_once 'classes/Cadastro.class.php';
include_once 'classes/Comentario.class.php';
include_once 'classes/RecuperaComentario.class.php';

// FAZ PARTE DA PAGINAÇÃO
$quantidade = 4 ;
$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$inicio = ($quantidade * $pagina) - $quantidade;
        

//exibe totos os comentarios
$coments = new CRUD();
$value_coments = $coments->select('cadastro join comentario', 'ON cadastro.id = comentario.autor ORDER BY comentario.id DESC LIMIT '.$inicio.','.$quantidade, array(), 'cadastro.nome ,comentario.comentario,comentario.data,cadastro.imagem');
$sqlTotal = $coments->select('comentario','',array(),'id' );
$numTotal = $sqlTotal->rowCount();

$totalPagina = ceil($numTotal/$quantidade);
?>

      
 <?php             
$comentObj = new RecuperaComentario();
$comentRet=$comentObj->popula($inicio,$quantidade);     
?>       
  <form action="">
    <ul>       
<?php foreach ($comentRet as $testeObj){ ?>
     
<li> <p class="no-margin">  postado por <?php echo $testeObj->getNome(); ?> </p> 
<p class="no-margin">   em <?php echo $testeObj->getComentario()->getData();?> </p>
 <?php echo "<img src='data:image/jpeg;base64,".base64_encode($testeObj->getImagem())."'/>";?>
 <?php echo $testeObj->getComentario()->getComentario();?></li>
<?php } ?>

</ul>
</form>