const inpTime = document.querySelector('#inpTime');
const selEstado = document.querySelector('#selEstado');
const pDados = document.querySelector('#pDados');
const pErros = document.querySelector('#pErros');

function mostrarDados() {
    pDados.innerHTML = '';
    var erros = "";

    if(inpTime.value == '') {
        erros = erros + "Informe o time!";
        //return;
    }

    if(selEstado.value == '') {
        if(erros != '') //Tratamento para adicionar a quebra de linha
            erros = erros + "<br>Informe o estado!";
        else 
            erros = erros + "Informe o estado!";
        //return;
    }

    if(inpTime.value != '' && selEstado.value != '') {
        pErros.innerHTML = "";
        pDados.innerHTML = inpTime.value + 
                            "<br>" + selEstado.value;
    } else
        pErros.innerHTML = erros;
}