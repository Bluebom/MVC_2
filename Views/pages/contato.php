<div class="chamada">
    <div class="center">
        <h2>Estou em <?= $arr['titulo']?></h2>
    </div>
</div>
<div class="contato">
    <form method="post">
        <input type="text" name="nome" placeholder="Nome...">
        <textarea name="mensagem" placeholder="Sua Mensagem..."></textarea>
        <input type="submit" name="acao" value="Enviar!">
    </form>
</div>