<div class="mb-5" style="background-color: black;">
    <h1>Detalhes do cliente</h1>
</div>
<table class="table table-striped">

    <tr>
        <th>ID do cliente</th>
        <td><?= $client['idClient'] ?></td>
    </tr>

    <tr>
        <th>Nome</th>
        <td><?= $client['name'] ?></td>
    </tr>

    <tr>
        <th>Email</th>
        <td><?= $client['email'] ?></td>
    </tr>

    <tr>
        <th>Telefone</th>
        <td><?= $client['phone'] ?></td>
    </tr>

    <tr>
        <th>Endereço</th>
        <td><?= $client['address'] ?></td>
    </tr>

</table>