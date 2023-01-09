<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>contato</title>
</head>

<body>
    <div class="box">
        <div class="img-box">
            <img src="/img/Mobile-bro.svg">
        </div>
        <div class="form-box">
            <h2>Contate-nos</h2>
            <p>Envie-nos o seu feedback.</p>
            <form action="#">
                <div class="input-group">
                    <label for="nome"> Nome</label>
                    <input type="text" id="nome" placeholder="Digite o seu nome completo" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group">
                    <label for="assunto">Assunto</label>
                    <input type="text" id="telefone" placeholder="Digite o assunto" required>
                </div>

                <div class="input-group">
                    <label for="message">Mensagem:</label>
                    <textarea name="message" id="message" placeholder="Escreva o que quiser" required minlength="5"></textarea>
                </div>

                <div class="input-group">
                    <button>ENVIAR</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>