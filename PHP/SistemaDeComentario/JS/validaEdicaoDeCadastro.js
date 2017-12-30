// validação de campos de cadastro

function validaEdicaoDeCadastro(){
    
                             var filtro = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}/; 
				             var nome   = formuser.nome_cadastra.value;
				             var email  = formuser.email_cadastra.value;
				             var senha  = formuser.senha_cadastra.value;
                                             var imagem = formuser.imagem.value;
							 var senhaAntiga = formuser.senhaAntiga.value;
							 var confirmaSenhaAntiga = formuser.confirmaSenhaAntiga.value;
							 var senha_cadastra = formuser.senha_cadastra.value;
			//nome OK	
		if(nome == ""  || nome == " " ){
                                   // document.getElementById("status_cadastra").innerHTML = "Preencha o campo nome";
					alert('Preencha o campo nome.');
					formuser.nome_cadastra.focus();
					return false;
				}
				
                //Email OK
                if(!filtro.exec(email)){
				// document.getElementById("status_cadastra").innerHTML = "Preencha o campo email com um email valido";	
                                  alert('Preencha o campo com E-mail valido.');
					formuser.email_cadastra.focus();
                                        return false;}
                //OK
                if(senhaAntiga !== "" && senha_cadastra == ""  ){
                    alert('Preencha o campo com a nova senha');
                formuser.senha_cadastra.focus();
			return false;
    }
                
              //OK
                if (senha_cadastra == "" || senha_cadastra ==" "  ){
                  
                  document.getElementById("senha_cadastra").innerHTML = confirmaSenhaAntiga;
		document.getElementById("senha_cadastra").value = confirmaSenhaAntiga;	
                                      } else{
                                    
                     //OK             
                 if(senhaAntiga != confirmaSenhaAntiga){
                     // document.getElementById("status_cadastra").innerHTML = "Senha antiga incorreta";
					alert('Senha antiga incorreta.');
					formuser.senhaAntiga.focus();
					return false;
                                }		
                
                
                }
                
                
                
                
                
                  //OK
                if(senha !== "" && senha.length <= 5){
                                 //   document.getElementById("status_cadastra").innerHTML = "Preencha o campo senha com minimo 6 caracteres";
					alert('Preencha o campo senha nova com minimo 6 caracteres');
					formuser.senha_cadastra.focus();
					return false;
				}
                
                
                
                
                    
    }