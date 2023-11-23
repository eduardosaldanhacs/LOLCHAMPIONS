<?php
    require_once("templates/header.php");
    
?>

<div class="addchampion-container">
    <form action="<?= $BASE_URL ?>champion_process.php" method="POST">
        <input type="hidden" name="type" value="register">
        <div class="form-group">
            <label for="name">Nome do campeão:</label>
            <input type="text" name="name" placeholder="Digite o nome do campeão">
        </div>
        <div class="form-group">
            <label for="laner">Rota do campeão:</label>
            <input type="text" name="laner"  placeholder="Digite a rota do campeão">
        </div>
        <div class="form-group">
            <label for="launch">Data de lançamento do campeão:</label>
            <input type="text" name="launch" placeholder="Digite a data de lançamento do campeão">
        </div>
        <div class="form-group">
            <label for="region">Região do campeão:</label>
            <input type="text" name="region" placeholder="Digite a região do campeão">
        </div>
        <div class="form-group">
          <label for="image">Imagem:</label>
          <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</div>

<?php
    require_once("templates/footer.php");
?>