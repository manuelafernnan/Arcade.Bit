<?php
    require_once 'head.php';
    require_once 'menu.php';
?>

<div class="box">
    <div class="img-box">
        <img src="/img/Gaming-bro.svg">
    </div>
    <div class="form-box">
        <h2>Criar Conta</h2>
        <p> Já é um membro? <a href="#"> Login </a> </p>
        <form action="#">
            <div class="input-group">
                <label for="nome"> Nome Completo</label>
                <input type="text" id="nome" placeholder="Digite o seu nome completo" required>
            </div>

            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Digite o seu email" required>
            </div>

            <div class="input-group">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" placeholder="Digite o seu telefone" required>
            </div>

            <div class="input-group w50">
                <label for="senha">Senha</label>
                <input type="password" id="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="input-group w50">
                <label for="Confirmarsenha">Confirmar Senha</label>
                <input type="password" id="Confirmarsenha" placeholder="Confirme a senha" required>
            </div>

            <div class="input-group">
                <button>Cadastrar</button>
            </div>

        </form>
    </div>
</div>

<?php
    require_once 'footer.php';
?>
