<div class="mb-5" style="background-color: black;">
    <h1>Lista de clientes</h1>
</div>

<div class="form-group">
    <form action="<?= base_url('admin/clients') ?>" method="get" enctype='multipart/form-data'>
        <div class="row">
            <div class="col-md-11">
            <input type="text" class="form-control" placeholder="Buscar..." name="search" id="search"><br>
            </div>
            <div class="col-md-1">
            <button type="submit" class="btn btn-success" style="justify-items: center;"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
</div>

<table class="table table-striped" style="background-color: white;">

    <tr>
        <th>ID cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Detalhes</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>

    <?php
    foreach ($clients as $client) {
    ?>

        <tr>
            <td>
                <?= $client['idClient'] ?>
            </td>

            <td>
                <?= $client['name'] ?>
            </td>

            <td>
                <?= $client['email'] ?>
            </td>

            <td>
                <a href="<?= base_url("admin/clients/{$client['idClient']}") ?>">Ver detalhes</a>
            </td>

            <td>
                <a href="<?= base_url("admin/clients/update/{$client['idClient']}") ?>" class="btn btn-warning">Editar</a>
            </td>

            <td>
                <a href="<?= base_url("admin/clients/delete/{$client['idClient']}") ?>" class="btn btn-danger">Deletar</a>
            </td>

        </tr>

    <?php
    }
    ?>


</table>