function inicio() {
    //chamar função de soma
    var s = soma('7', '5', '3');

    //chamar função para exibir
    exibeMsg('resultado', s);
    exibeMsg('resultado2', s);
    exibeMsg('btnSoma', s);
}

function soma(v1, v2, v3) {
	if(typeof(v1) != 'number')
		v1 = parseFloat(v1);

	if(typeof(v2) != 'number')
		v2 = parseFloat(v2);


	if(typeof(v3) != 'number')
		v3 = parseFloat(v3);

	return v1 + v2 + v3;
}

function exibeMsg(id, valor) {
    document.getElementById(id).innerHTML = valor;
    document.getElementById(id).style.color = 'blue';
}
