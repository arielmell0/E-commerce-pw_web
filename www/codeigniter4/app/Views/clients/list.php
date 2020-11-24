<h1 style="text-decoration: black;">Lista de clientes</h1>
<table class="table table-striped">

    <tr>
        <th>ID cliente</th>
        <th>Nome</th>
        <th>Email</th>
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
        </tr>

    <?php
    }
    ?>


</table>