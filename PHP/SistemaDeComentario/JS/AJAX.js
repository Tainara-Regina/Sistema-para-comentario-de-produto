// AJAX QUE VERIFICA SE O USUARIO ESTA LOGADO PARA ATUALIZAR STATUS (PODE COMENTARO OU NÃO vermelo*),SOMENTE ISSO /
  
  function verificaLogado_EnviaComent(){
      var xmlhttp;
      var url ="check_login.php"; 
      
      if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
      
      }else if (window.ActiveXObject) {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      
      xmlhttp.onreadystatechange = handleStateChange;
      xmlhttp.open("POST",url, true);
      xmlhttp.send(null);
      
      function handleStateChange(){
          if(xmlhttp.readyState == 4){
              if(xmlhttp.status == 200){
                 document.getElementById("status").innerHTML = xmlhttp.responseText; 
                 
               
              }
          }
      }
      
       
  }
 
  
  
  
  
  // AJAX QUE ENVIA O COMENTARIO PARA O BANCO E ATUALIZA OS COMENTARIOS  -->
    
  function AtualizaComentario(){
      var xmlhttp;
      var comentario = document.getElementById("comentario").value;
      var mes;
 
 

var monName = new Array ("01", "02", "03", "04", "02", "06", "07", "08", "09", "10","11","12");
var now = new Date
 
 

today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();



var hora =h+":"+m;

var data = now.getDate()+"/"+ monName [now.getMonth() ] +"/"+now.getFullYear()+" as  "+hora;
 
      
      
        if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
      
      }else if (window.ActiveXObject) {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      
      xmlhttp.onreadystatechange = handleStateChange;
      xmlhttp.open("GET", "send_coment.php?q="+comentario+"&d="+data, true);
      xmlhttp.send();
      
      function handleStateChange(){
          if(xmlhttp.readyState == 4){
              if(xmlhttp.status == 200){
                 document.getElementById("status2").innerHTML = xmlhttp.responseText;
                 //document.getElementById("comentario").innerHTML ="";
                 document.getElementById("comentario").value ="";
                 
                 //CHAMA AJAX QUE ATUALIZA O CONTEUDO DO COMENTARIO
                 atualiza_comentario();
          
              }
          }
      }
  }
      
    
      
   
  // ATUALIZA COMENTARIO -->
  
  function atualiza_comentario(){
      var xmlhttp;
      var url ="refrash_table.php"; 
      
      if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
      
      }else if (window.ActiveXObject) {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      
      xmlhttp.onreadystatechange = handleStateChange;
      xmlhttp.open("POST",url, true);
      xmlhttp.send(null);
      
      function handleStateChange(){
          if(xmlhttp.readyState == 4){
              if(xmlhttp.status == 200){
                 document.getElementById("coment_content").innerHTML = xmlhttp.responseText; 
                 
               
              }
          }
      }
      
       
  }
  
      
      
 
 //<!-- AJAX QUE VALIDA LOGIN -->
 
  function logar(){
     document.getElementById("status_login").innerHTML = "Procurando...";
      var xmlhttp;
      var url ="logar.php";
      var email = document.getElementById("email").value;
      var senha = document.getElementById("senha").value;
      
      if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
      
      }else if (window.ActiveXObject) {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      
      xmlhttp.onreadystatechange = handleStateChange;
      xmlhttp.open("GET","logar.php?email="+email+"&senha="+senha,true);
      xmlhttp.send(null);
      
      function handleStateChange(){
          
              if(xmlhttp.readyState == 4){
              if(xmlhttp.status == 200){
                
                  document.getElementById("status_login").innerHTML = "Quase lá..."; 
                 if(xmlhttp.responseText == "false"){
                    document.getElementById("status_login").innerHTML = "Cadastro não localizado";
                 }else if(xmlhttp.responseText == "true"){
                      location.reload();
                 }else if(xmlhttp.responseText == "empty"){
                      document.getElementById("status_login").innerHTML = " Preencha todos os campos!";
                 }
               
              }
          }
      }
  }
       
  
 
 
 
 
 
 
 //<!-- AJAX QUE VERIFICA SE O EMAIL JA É CADASTRADO (ONCHANGE) -->
 
  function verificaEmailCadastrado(){
           
      var xmlhttp;
      var url ="validaEmail.php";
      var email = document.getElementById("email_cadastra").value;
      
      if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
      
      }else if (window.ActiveXObject) {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      
      xmlhttp.onreadystatechange = handleStateChange;
      xmlhttp.open("GET","validaEmail.php?email="+email,true);
      xmlhttp.send(null);
      
      function handleStateChange(){
          if(xmlhttp.readyState == 4){
              if(xmlhttp.status == 200){
              
                  //document.getElementById("hidden").innerHTML = xmlhttp.responseText;
                    document.getElementById("hidden").value = xmlhttp.responseText;                                
                 }
               
              }
          }
      }
  
       
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

//<!-- AJAX QUE CADASTRA O USUARIO-->
 
 /* function cadastrar(){
        var xmlhttp;
      if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
      
      }else if (window.ActiveXObject) {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      
      document.getElementById("status_login").innerHTML = " ";
    
      var url ="cadastrar.php";
      var nome = document.getElementById("nome_cadastra").value;
      var email = document.getElementById("email_cadastra").value;
       var senha = document.getElementById("senha_cadastra").value;
        var foto = document.getElementById("foto").value;
      xmlhttp.open("POST","cadastrar.php",true);
      
       xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      
      xmlhttp.onreadystatechange = handleStateChange;
       function handleStateChange(){
          if(xmlhttp.readyState == 4){
              if(xmlhttp.status == 200){
                
                document.getElementById("status_cadastra").innerHTML = xmlhttp.responseText;
               
              }
          }
      }
          
      xmlhttp.send("email_cadastra="+email+"&senha_cadastra="+senha+"&nome_cadastra="+nome+"&foto="+foto);
      
     
  }*/
       
  
      
           
      
 