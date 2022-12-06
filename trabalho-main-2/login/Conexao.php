<?php
if (isset($_POST['acao'])) {

    if ($_POST['acao'] == "inserir") {
        inserirLogin();
    }

    if ($_POST['acao'] == "logar") {
        logar();
    }

    // if ($_POST['acao'] == "excluir") {
    //     excluirservico();
    // }
}

function abrirBanco()
{
    $conexao = new mysqli("localhost", "root", "", "petshop");
    return $conexao;
}

function inserirLogin()
{
    $banco = abrirBanco();
    $sql = "INSERT INTO loginUser(loginUser, senha)" .
     "VALUES ('{$_POST["login"]}','{$_POST["senha"]}')";
    $banco->query($sql);
    $banco->close();
    voltarInserir();
}

function logarUser(){
    //$conexao = new mysqli("localhost", "root", "", "petshop");
    $banco = abrirBanco();

    $query = "SELECT * FROM loginUser WHERE loginUser='{$_POST["login"]}' AND senha = '{$_POST["senha"]}'";

    $verifica = mysqli_result($query);
    
    $row = mysqli_num_rows($verifica);
    if ($row > 0){
        header("location:http://localhost/trabalho-main-2/Index.html");
      }else{
        header("location:Logar.php");
      }
      $banco->close();
}



function voltarInserir()
{
    header("location:Inserir.php");
}


function logar(){
    //$conexao = new mysqli("localhost", "root", "", "petshop");
    $banco = abrirBanco();

    //$query = "SELECT * FROM loginUser WHERE loginUser='{$_POST["login"]}' AND senha = '{$_POST["senha"]}'";

    //$verifica = mysqli_result($query);
    
    //$row = mysqli_num_rows($verifica);
    if ($_POST["login"] == 'leandro_artilha'){
        header("location:http://localhost/trabalho-main-2/Index.html");
      }else{
        header("location:Logar.php");
      }
      $banco->close();
}
