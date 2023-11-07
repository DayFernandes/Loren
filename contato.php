<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/contato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Contato</title>
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
    <section class="contato">
    <form action="" method="post">
        <h1>Entre em contato</h1>
        <input type="email" name="email" id="email" placeholder="Email" size="78px"><br><br>
        <div class="feedback-form">
        <label for="">Mande uma mensagem</label>
        <textarea name="" id="" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
        <input type="submit" value="Enviar"><br><br>
        <a href="cadastro.php">Cadastrar</a> 
        </div>
    </form>
    </section>
    <ul class="redes-sociais">
        <li>
            <a href="https://www.instagram.com/seu_perfil/" target="_blank">
                <i class="fa fa-instagram"></i> Instagram
            </a>
        </li>
        <li>
            <a href="https://api.whatsapp.com/send?phone=seu_numero_de_telefone" target="_blank">
                <i class="fa fa-whatsapp"></i> WhatsApp
            </a>
        </li>
        <li>
            <a href="https://www.italki.com/teacher/seu_perfil" target="_blank">
                <i class="fa fa-facebook"></i> Facebook
            </a>
        </li>
    </ul>
    <footer>
        <div class="rodape">
            <span>&copy;Programação para Internet, 2023</span>
        </div>
    </footer>
</body>
</html>