<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>LOREN</h1>
        <nav class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>
    <form method="POST" action="controler.php">
        <label>Digite seu CPF</label>
        <p><input type="text" name="cpf_usu" placeholder="CPF"></p>
        <p><label>Digite seu Nome</label></p>
        <p><input type="text" name="nome_usu" placeholder="NOME ALUNO"></p>
        <p><label>Digite seu email</label></p>
        <p><input type="email" name="email_usu" placeholder="EMAIL"></p>
  <p><label>Defina uma senha</label></p> 
         <p><input type="passoword" name="senha_usu" placeholder="SENHA"></p>
<p><label>Escreva uma mensagem</label></p> 
         <p><input type="text" name="men_usu" placeholder="MENSAGEM..."></p>
<p><input type="submit" name="botao" value="CADASTRAR"></p><br>
        <p><input type="submit" name="botao" value="ATUALIZAR"></p><br>
        <p><input type="submit" name="botao" value="EXCLUIR"></p><br>
        <p><input type="submit"name="botao" value="CONSULTAR"></p><br>
    </form>
</body>
</html>