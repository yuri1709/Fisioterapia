function validar(){
    if((document.login.usuario.value == "Admin")&&(document.login.senha.value == "123")){ 
       return true ;
    }else {
       document.login.senha.focus();
       alert("Senha ou usúario inválido!");
        return false;
    }
 }