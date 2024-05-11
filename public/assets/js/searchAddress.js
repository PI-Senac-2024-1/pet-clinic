let identifyInput = "";

function clearInputs() {
    //Limpa valores do formulário de cep.
    document.getElementById(`street${identifyInput}`).value=("");
    document.getElementById(`district${identifyInput}`).value=("");
    document.getElementById(`city${identifyInput}`).value=("");
    document.getElementById(`state${identifyInput}`).value=("");
}

function callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById(`street${identifyInput}`).value=(conteudo.logradouro);
        document.getElementById(`district${identifyInput}`).value=(conteudo.bairro);
        document.getElementById(`city${identifyInput}`).value=(conteudo.localidade);
        document.getElementById(`state${identifyInput}`).value=(conteudo.uf);

    } //end if.
    else {
        //CEP não Encontrado.
        clearInputs();
        alert("CEP não encontrado.");
    }
}

document.getElementById('zipcode').addEventListener('change', function(event){
    //Nova variável "cep" somente com dígitos.
    var cep = event.target.value.replace(/\D/g, '');
    identifyInput = event.target.id.replace("zipcode", "");
    console.log(identifyInput);

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            // Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById(`street${identifyInput}`).value="...";
            document.getElementById(`district${identifyInput}`).value="...";
            document.getElementById(`city${identifyInput}`).value="...";
            document.getElementById(`state${identifyInput}`).value="...";


            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        if(!validacep.test(cep)){
            //cep é inválido.
            clearInputs();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    if(cep == '') {
        //cep sem valor, limpa formulário.
        clearInputs();
    }
})
