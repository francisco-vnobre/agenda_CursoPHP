<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/backbtn.php"); ?>
        <h1 id="main-title">Criar contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text"class="form-control" name="name" id="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone do contato:</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o telefone" required>
            </div>
            <div class="form-group">
                <label for="observations">Observações</label>
                <Textarea type="text" name="observations" id="observations" class="form-control" placeholder="Insira as observações" rows="3"></Textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php");