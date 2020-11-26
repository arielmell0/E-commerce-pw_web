<h1>Alterar cliente</h1>
<form action="<?=  base_url("admin/clients/update-action/{$client['idClient']}") ?>" method=POST enctype='multipart/form-data'">
    <div class="form-group">
        <div>
            <label for="id" style="color: white;">ID:</label>
            <input type="text" class="form-control" name="id" value="<?= $client['idClient'] ?>" readonly>
        </div>
        <div>
            <label for="name" style="color: white;">Nome:</label>
            <input type="text" class="form-control" name="name" value="<?= $client['name'] ?>">
        </div>
        <div>
            <label for="email" style="color: white;">Email:</label>
            <input type="mail" class="form-control" name="email" value="<?= $client['email']?>" > 
        </div>
        <div>
            <label for="phone" style="color: white;">Telefone:</label>
            <input type="text" class="form-control" name="phone" value="<?=$client['phone']?>" >
        </div>
        <div>
            <label for="address" style="color: white;">Endereço:</label>
            <input type="text" class="form-control" name="address" value="<?=$client['address']?>" >
        </div>
        <br>
 
        <br>
        <button class="btn btn-success" type="submit">Salvar</button>
    </div>
</form>