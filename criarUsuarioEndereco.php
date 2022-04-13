
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Criar Usuário</title>
</head>
<style>
.c2{
  padding-top:25px;
}
.c3{
  padding-top:20px;
}
.L1{
    width: 33%;
    float: left;
}
.l2{
    width: 25%;
  float: right;
}
</style>    
<?php  include_once "head.php"; ?>
<body>
<div class="container c1">
    <h3 class="text-center">Cadastre o seu endereço : </h3>
</div>
     
<div class="container c2 ">
<hr>
    <!-- Adicionando Javascript -->
    <script>
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            //document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            //document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                //document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    </script>
  
    <div class="container formulario bg-light">
    <div class="L1"><P></P></div>
        <form class="form-group" action="cadastrarUsuarioEndereco.php" method="post">   
            <div class="form-row my-2" >
                <div class="form-inline">
                    <label class="form-label">Cep: </label> <br />
                    <input class="form-control mx-2" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                onblur="pesquisacep(this.value);" />  
                </div>        
            </div>
            <div class="L1"><P></P></div>
            <div class="form-row my-3">
                <div class="form-inline">
                    <label class="form-label">Rua: </label> <br />
                    <input class="form-control mx-2"  type="text" id="rua" name="rua" size="60"/>  
                </div>        
            </div>
            <div class="L1"><P></P></div>
            <div class="form-row my-3">
                <div class="form-inline">
                    <label class="form-label">Bairro: </label> <br />
                    <input class="form-control mx-2" name="bairro" type="text" id="bairro" size="40" />  
                </div>        
            </div>
            <div class="L1"><P></P></div>
            <div class="form-row  my-3">
                <div class="form-inline">
                    <label class="form-label">Cidade: </label> <br />
                    <input class="form-control mx-2" name="cidade" type="text" id="cidade" size="40" />  
                </div>        
            </div>
            <div class="L1"><P></P></div>
            <div class="form-row my-3">
                <div class="form-inline">
                    <label class="form-label">Estado: </label> <br />
                    <input class="form-control mx-2"  name="uf" type="text" id="uf" size="2" />  
                </div>        
            </div>
    </div>
    <div class="text-center mx-2"><button type="submit" class="btn btn-block btn-primary ">Concluir cadastro</button></div>
        </form>
    
</div>

<div class="container c3 text-center">
   
    
</div>


</body>
</html>