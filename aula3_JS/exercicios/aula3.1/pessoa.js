const nome = document.querySelector('#txtNome');
const email = document.querySelector('#txtEmail');
const telefone = document.querySelector('#txtTelefone');

const divPessoa = document.querySelector('#divPessoa');

const spanNome = document.querySelector('#spanNome');
const spanEmail = document.querySelector('#spanEmail');
const spanTelefone = document.querySelector('#spanTelefone');


function mostrarDadosPessoa() {
    //Limpa os campos de erro
    spanNome.innerHTML = '';
    spanEmail.innerHTML = '';
    spanTelefone.innerHTML = '';
    
    //Valida se os campos estão preenchidos
    var fErro = false;
    if(nome.value.trim() == '') {
    	spanNome.innerHTML = "Informe o nome!";
    	fErro = true;
    }
    	
    if(email.value.trim() == '') {
    	spanEmail.innerHTML = "Informe o e-mail!";
    	fErro = true;
    }
    	
    if(telefone.value.trim() == '') {
    	spanTelefone.innerHTML = "Informe o telefone!";
    	fErro = true;
    }
    
    
    divPessoa.innerHTML = '';
    if(fErro)
    	return;    
    
    //Cria um objeto pessoa
    var pessoa = {
        "nome" : nome.value,
        "email" : email.value,
        "telefone" : telefone.value
    }

    //Concatena os dados do objeto em um String
    var dados = "Nome: " + pessoa.nome + "<br>";
    dados += "E-mail: " + pessoa.email + "<br>";
    dados += "Telefone: " + pessoa.telefone;

    //Exibe os dados na DIV
    divPessoa.innerHTML = dados;
}
