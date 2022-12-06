<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuario</title>
<style>
.login{
    text-align: center;
position: absolute;
width:100%;
}
form{
    margin: 50px 500px 50px 500px;
}

</style>

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div class="login">

    <form name="dadosCliente" action="Conexao.php" method="post">
    <h1>Login</h1>
    
    <div class="row">
        <div class="col">
            <label>Login</label>
            <input type="text" class="form-control" name="login">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label>Senha</label>
            <input type="password" class="form-control" name="senha">
        </div>
    </div>

    <br>
    <br>
    <input type="hidden" name="acao" value="logar">
    <input type="submit" name="enviar" value="Entrar" class="btn btn-primary">
    <a class="btn btn-primary" href="http://localhost/trabalho-main-2/login/Inserir.php" >Cadastrar</a>
</form>


</div>
