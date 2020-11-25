function validar()
{
var senha = formuser.senha.value;
var rep_senha = formuser.rep_senha.value;

				
	if(senha == "" || senha.length <= 5)
	{
		alert('Preencha o campo senha com minimo 6 caracteres');
		formuser.senha.focus();
		return false;
	}
				
	if(rep_senha == "" || rep_senha.length <= 5)
	{
		alert('Preencha o campo repetir senha com minimo 6 caracteres');
		formuser.rep_senha.focus();
		return false;
	}
		
	if (senha != rep_senha)
	{
		alert('Senhas diferentes');
		formuser.senha.focus();
		return false;
	}
}

