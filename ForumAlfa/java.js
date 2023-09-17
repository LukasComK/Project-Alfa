		function ValidarForm()
		{
		var usuario;
		var senha;

		usuario = document.getElementById("txtUsuario");
		senha = document.getElementById("txtSenha");

		if (usuario.value == "") {
			window.alert("Usu�rio n�o informado");
			usuario.focus(); }

		else {
			if (senha.value == "") {
				window.alert("Senha n�o informada");
				senha.focus(); }
			else {
					document.forms["frmLogin"].submit();
					
				 }
			}
		}
		function Limpar ()

		{
		document.getElementById("txtUsuario").value="";
		document.getElementById("txtSenha").value="";
		}
		
		function ValidaForm()
		{
		var usuario;


		usuario = document.getElementById("txtUsuario");


		if (usuario.value == "") {
			window.alert("Usu�rio n�o informado");
			usuario.focus();     }


			else {
					document.forms["frmLogin"].submit();

				 }
			
		}
		function ValidarForm2()
		{
		var nome;		
		var endereco;
		var cidade;
		var estado
		var cep;
		var email;
		var fone;
		var cpf;
		var pass;
		var user;
		

		nome = document.getElementById("txtNome");
		
		endereco = document.getElementById("txtEndereco");
		cidade = document.getElementById("txtCidade");
		estado = document.getElementById("txtEstado");
		cep = document.getElementById("txtCep");
		email = document.getElementById("txtEmail");
		fone = document.getElementById("txtFone");
		cpf = document.getElementById("txtCpf");
		user = document.getElementById("txtUsuario");
		pass = document.getElementById("txtPass");
		
		if (nome.value == "") {
			window.alert("Nome n�o informado");
			nome.focus(); }

		else if (endereco.value == "") {
				window.alert("Endere�o n�o informado");
				endereco.focus();      }
				
		else if (cidade.value == "") {
				window.alert("Cidade n�o informada");
				cidade.focus();      }
		
		else if (estado.value == "") {
				window.alert("Estado n�o informado");
				estado.focus();      }

		else if (cep.value == "") {
				window.alert("CEP n�o informado");
				cep.focus();      }
				
		else if (email.value == "") {
				window.alert("Email n�o informado");
				email.focus();      }

		else if (fone.value == "") {
				window.alert("Fone n�o informado");
				fone.focus();      }

		else if (cpf.value == "") {
				window.alert("CPF n�o informado");
				cpf.focus();      }

       else if (user.value == "") {
				window.alert("Usu�rio n�o informado");
				user.focus();      }
            
		else if (pass.value == "") {
				window.alert("Senha n�o informada");
				pass.focus();      }
				
			else{
					document.forms["frmCadastro"].submit();

				}
			}
			
		function ValidarForm4()
		{
		var nome;
		var endereco;
		var cidade;
		var estado
		var cep;
		var email;
		var fone;
		var cpf;
		var pass;


		nome = document.getElementById("txtNome");

		endereco = document.getElementById("txtEndereco");
		cidade = document.getElementById("txtCidade");
		estado = document.getElementById("txtEstado");
		cep = document.getElementById("txtCep");
		email = document.getElementById("txtEmail");
		fone = document.getElementById("txtFone");
		cpf = document.getElementById("txtCpf");
		pass = document.getElementById("txtPass");

		if (nome.value == "") {
			window.alert("Nome n�o informado");
			nome.focus(); }

		else if (endereco.value == "") {
				window.alert("Endere�o n�o informado");
				endereco.focus();      }

		else if (cidade.value == "") {
				window.alert("Cidade n�o informada");
				cidade.focus();      }

		else if (estado.value == "") {
				window.alert("Estado n�o informado");
				estado.focus();      }

		else if (cep.value == "") {
				window.alert("CEP n�o informado");
				cep.focus();      }

		else if (email.value == "") {
				window.alert("Email n�o informado");
				email.focus();      }

		else if (fone.value == "") {
				window.alert("Fone n�o informado");
				fone.focus();      }

		else if (cpf.value == "") {
				window.alert("CPF n�o informado");
				cpf.focus();      }

		else if (pass.value == "") {
				window.alert("Senha n�o informada");
				pass.focus();      }

			else{
					document.forms["frmCadastro"].submit();

				}
			}

		function Limpar2 ()

		{
		document.getElementById("txtNome").value="";
		document.getElementById("txtEndereco").value="";
        document.getElementById("txtCidade").value="";
        document.getElementById("txtEstado").value="";
        document.getElementById("txtCep").value="";
        document.getElementById("txtEmail").value="";
        document.getElementById("txtFone").value="";
        document.getElementById("txtCpf").value="";
        document.getElementById("txtPass").value="";
        }
		
		function Limpar ()

		{
		document.getElementById("txtNome").value="";
		document.getElementById("txtEndereco").value="";
        document.getElementById("txtCidade").value="";
        document.getElementById("txtEstado").value="";
        document.getElementById("txtCep").value="";
        document.getElementById("txtEmail").value="";
        document.getElementById("txtFone").value="";
        document.getElementById("txtCpf").value="";
        document.getElementById("txtUsuario").value="";
        document.getElementById("txtPass").value="";
        }
		
		 function validaForm3(){
        var objRadio = document.forms["pesquisa"].elements["tipo"];
        var checado = false;
        var valor;
        var texto = document.getElementById("txt");
        
        //Validando radios, percorrendo todos para ver qual est� selecionado:
        
        for (var i=0; i<objRadio.length; i++) {
                if (objRadio[i].checked == true) {
                        checado = true;
                        valor = objRadio[i].value;
                }
        }

        if (checado == true) {
        
              if (texto.value == "") {
			window.alert("Valor n�o informado");
			return false;
			texto.focus(); }
              else{
              	document.forms["pesquisa"].submit();
                   }


          }
           else
         {
          alert("Por favor selecione uma op��o!");
          return false;
         }
	}
	
	function validaForm5 (){

	var texto;
	
	texto = document.getElementById("a_answer");


		if (texto.value == "") {
			window.alert("Texto n�o informado");
			texto.focus(); }
			
			else{
              	document.forms["res"].submit();
                   }

	}
	
	function ValidaForm6(){
	var topic;
	var detail;
	
	topic = document.getElementById("topic");
	detail = document.getElementById("detail");

		if (topic.value == "") {
			window.alert("T�pico n�o informado");
			topic.focus(); }
		
		else if (detail.value == "") {
			window.alert("Detalhes n�o informados");
			detail.focus(); }
		
			
			else{
              	document.forms["form1"].submit();
                   }

	}

	function admlogin()
		{
		var usuario;
		var senha;

		usuario = document.getElementById("txtUsuario");
		senha = document.getElementById("txtSenha");

		if (usuario.value == "admin" && senha.value == "123qwe.alfa") 
			document.forms["frmLogin"].submit();
		else{
			window.alert("Informações Erradas de Login");
		}
			
	
		}

		