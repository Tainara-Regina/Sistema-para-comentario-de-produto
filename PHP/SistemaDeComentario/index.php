<?php
session_start();
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style_modal.css" rel="stylesheet" type="text/css"/>
  <link href="css/style_produtos.css" rel="stylesheet" type="text/css"/>
<script src="JS/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="JS/AJAX.js" type="text/javascript"></script>
   </head>
  
<body>
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
          
 
    <div class="cont-slide"> 
      <a href="Comentarios.php"> <img class="img" src="img/box3.jpg" alt="produto"></a>
     <div class="after"><img src="img/arrow_right.png" alt=""/></div>    
    <div class="befor"><img src="img/arrow_left.png" alt=""/></div>
    </div>
        
   <footer class="footer">
       <div class="ass"  > <p>  © Developed by Tainara Regina ♥ </p> </div></footer>
    </div>
</body>
</html>
