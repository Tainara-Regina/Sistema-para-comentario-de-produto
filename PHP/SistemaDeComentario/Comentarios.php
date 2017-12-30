<?php
session_start();
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';
include_once 'classes/Cadastro.class.php';
include_once 'classes/Comentario.class.php';
include_once 'classes/RecuperaComentario.class.php';


// Utilizado na paginação
$quantidade = 4 ;
$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$inicio = ($quantidade * $pagina) - $quantidade;
        


//Pesquisa só para pegar os dados necessarios para paginação
$coments = new CRUD();

$sqlTotal = $coments->select('comentario','',array(),'id' );
$numTotal = $sqlTotal->rowCount();
$totalPagina = ceil($numTotal/$quantidade);


//pega o valor do tetxtarea e passa para a variavel $comentarioFeito
unset($sendComent);
unset($comentarioFeito);

?>

<!DOCTYPE html>
<html>
    <head>
       
        <meta charset="UTF-8">
        <title>  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style_comentarios.css" rel="stylesheet" type="text/css"/>
  <script src="JS/jquery-3.1.1.min.js" type="text/javascript"></script>
  <link href="css/style_modal.css" rel="stylesheet" type="text/css"/>
  <script src="JS/AJAX.js" type="text/javascript"></script>
  <script src="JS/refrash.js" type="text/javascript"></script>
  
    </head>
  
     
    <body onload="verificaLogado_EnviaComent() ;">
        <div class="containerGeral">
        <!-- INCLUI O MODAL DE LOGIN -->   
<?php include_once 'modalInclude.html'; ?>

 <!-- INCLUI O MENU DO TOPO -->   
<?php include 'menu_topo.php'; ?>

<!--  PARTE DO MODAL -->
<script type="text/javascript" src="JS/modal.js"></script>

    <div class="content-div-logo"> 
        <div class="div-logo">    
        <img src="img/logoSistemComent2.png" alt=""/>        
        </div>
        
    </div>
         <div class=" nav-top ">
             <ul>
                 <a href="index.php"><li>Home</li></a>
                 <a href="Comentarios.php"><li>Produto</li></a>
             </ul>                
         </div>
          
 
    <div id="conteiner-comentario"> 
       <div id="conteiner-prod">
         <div id="prod">
             <img src="./img/box3.jpg" alt=""/>
            </div>


 <div id="prod-desc">
<h1> Produto de exemplo </h1>
<h2>$ 99,99</h2>
<div id="cont-desc">
<h3>Descrição</h3>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi gravida libero
 nec velit. Morbi scelerisque luctus velit. Etiam dui sem, fermentum vitae, 
 sagittis id, malesuada in, quam. Proin mattis lacinia justo. Vestibulum facilisis
 auctor urna. Aliquam in lorem sit amet leo accumsan lacinia. Integer rutrum, orci 
 vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem
 sit amet enim. Phasellus et lorem id felis nonummy placerat. Fusce dui leo, imperdiet 
 in, aliquam sit amet, feugiat eu, orci. Aenean vel massa quis mauris vehicula lacinia.
 Quisque tincidunt scelerisque libero. Maecenas libero. Etiam dictum tincidunt diam. 
 Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Suspendisse nisl. 
Sed convallis magna eu sem. Cras pede libero, dapibus nec, pretium sit amet. </p>
  </div>
 </div>
</div>

      <div id="coments" class="coments"> 
<h1>Comentarios</h1>

 <div id="insert-coment"> 

  <?php if(isset($sendComent)){echo $sendComent->mensagem;}; ?>  
    <div id="status"> ... </div> 
    <div id="status2"> ... </div>

    <form action="" method="post" enctype="multipart/form-data">
<textarea   id="comentario" rows="10" cols="50" name="comentario" >
</textarea> <br>
</form>
 
<input class="btnEnviar" type="submit" value="Enviar"  onclick="AtualizaComentario();">
 </div>


<div  id="cont-pag">
   <ul class="pagination">
<?php 
$anterior=$pagina - 1;

if($anterior== 0){
   $anterior = 1;
}

echo "<li><a href=\"?pagina=$anterior\">pagina anterior</a></li>";

for($i = 1; $i <= $totalPagina; $i++){
    if($i == $pagina){
       echo "<li id='pg'>$i</li>";
    }else{
         
    }
}
$proxima=$pagina + 1;

if($proxima > $totalPagina){
   $proxima = $totalPagina;
}
echo "<li><a href=\"?pagina=$proxima\">proxima pagina</a></li>";
?>
   </ul>
</div>

<div id="coment_content" name="coment_content" class="coment_content">
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
</div>
  </div>
     </div>
 <footer class="footer"><div class="ass"  > <p>  © Developed by Tainara Regina ♥ </p> </div>
 </footer>
</div>
</body>
</html>
