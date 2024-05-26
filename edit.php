<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/backbtn"); ?>
        <h1 id="main-title">Editar contato</h1>
        <form action="<?= $BASE_URL ?>config/process.php" id="create-form" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $contact["name"] ?>"required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone do contato:</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?= $contact["phone"] ?>"required>
            </div>
            <div class="form-group">
                <label for="observations">Observações</label>
                <Textarea type="text" name="observations" id="observations" class="form-control" rows="3"><?= $contact["observations"]?></Textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php");