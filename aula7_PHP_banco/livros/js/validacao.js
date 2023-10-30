const inpTitulo = document.querySelector("#txtTitulo");

const divMsg = document.querySelector("#divMsg");

function validar() {
    var msgErro = "";

    if(! inpTitulo.value) {
        msgErro = "Informe o título do livro!";
    }

    if(msgErro) {
        divMsg.innerHTML = msgErro;
        divMsg.style.display = "block";
        return false;
    }

    return true;
}