const inputSenha = document.querySelector('#txtSenha');
const inputConfSenha = document.querySelector('#txtConfSenha');
const divMsg = document.querySelector('#divMensagem');

function validaSenha() {
    var senha = inputSenha.value;
    var confSenha = inputConfSenha.value;

    //IF para verificar se a senha está em branco
    if(senha == "") {
        //alert("Informe a senha!");
        divMsg.innerHTML = "Informe a senha!";
    
    //IF para verificar se a confSenha está em branco
    } else if(confSenha == "") {
        //alert("Informe a confirmação da senha!");
        divMsg.innerHTML = "Informe a confirmação da senha!";

    //IF para verificar se senha = confSenha
    } else if(senha != confSenha) {
        //alert("As senhas são diferentes!");
        divMsg.innerHTML = "As senhas são diferentes!";
    
    } else {
        divMsg.innerHTML = "";
        alert("Senha validada com SUCESSO!");
    }
}
