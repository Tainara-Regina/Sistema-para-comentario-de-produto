// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




// validação de campos de cadastro

function validar(){
                             var  filtro = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}/; 
				var nome = formuser.nome_cadastra.value;
				var email = formuser.email_cadastra.value;
				var senha = formuser.senha_cadastra.value;
                                var hidden = formuser.hidden.value;
                                var imagem = formuser.imagem.value;
				
				if(nome == ""){
                                    document.getElementById("status_cadastra").innerHTML = "Preencha o campo nome";
					//alert('Preencha o campo nome.');
					formuser.nome_cadastra.focus();
					return false;
				}
				
				
				
				if(senha == "" || senha.length <= 5){
                                    document.getElementById("status_cadastra").innerHTML = "Preencha o campo senha com minimo 6 caracteres";
					//alert('Preencha o campo senha com minimo 6 caracteres');
					formuser.senha_cadastra.focus();
					return false;
				}
                                
                                if(!filtro.exec(email)){
				 document.getElementById("status_cadastra").innerHTML = "Preencha o campo email com um email valido";	
                                  //alert('Preencha o campo com E-mail valido.');
					formuser.email_cadastra.focus();
					return false;
				}
			if(hidden === "true"){
				 document.getElementById("status_cadastra").innerHTML = "Este email ja foi utilizado!";	
                                  //alert('Preencha o campo com E-mail valido.');
					formuser.email_cadastra.focus();
					return false;
				}
     
     
     
               if(imagem == ''|| imagem == null || imagem == false){
                                    document.getElementById("status_cadastra").innerHTML = "Insira uma imagem";
					//alert('Insira uma imagem ');
                                         //formuser.email_cadastra.focus();
					return false;
				}
    
    
    }
    
   