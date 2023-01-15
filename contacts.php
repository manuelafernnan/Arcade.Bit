<?php
    require_once 'head.php';
    require_once 'menu.php';
?>

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

<?php
    require_once 'footer.php';
  ?>