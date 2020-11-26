<div class="mb-5" style="background-color: black;">
    <h1>Lista de clientes</h1>
</div>
<table class="table table-striped" style="background-color: white;">

    <tr>
        <th>ID cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php
    foreach ($clients as $client) {
    ?>

        <tr>
            <td>
                <?= $client['idClient']?>
            </td>

            <td>
                <?= $client['name']?>
            </td>

            <td>
                <?= $client['email']?>
            </td>

            <td>
                <a href="<?=base_url("admin/clients/{$client['idClient']}")?>">Ver detalhes</a>
           
                <a href="<?=base_url("admin/clients/update/{$client['idClient']}")?>" class="btn btn-warning">Editar</a>

                <a href="<?=base_url("admin/clients/delete/{$client['idClient']}")?>" class="btn btn-danger">Deletar</a>
            </td>

        </tr>

    <?php
    }
    ?>


</table>