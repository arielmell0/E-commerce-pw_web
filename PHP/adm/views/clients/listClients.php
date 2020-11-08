<section class="hero is-info is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column">
          <table class="table is-responsive" style="color: white">
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Imagem</th>
                <th colspan="2">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($arrayClients as $client) {
              ?>
                <tr>
                  <td><?= $client['idClient'] ?></td>
                  <td><?= $client['name'] ?></td>
                  <td><?= $client['email'] ?></td>
                  <td><?= $client['phone'] ?></td>
                  <td><?= $client['address'] ?></td>
                  <td>
                    <?php
                      if(is_file("assets/img/clients/{$client['idClient']}.jpg")){
                        echo("
                          <img style='max-width: 100px; max-height: 100px;' src='assets/img/clients/{$client['idClient']}.jpg'>
                        ");
                      } else {
                        print('Sem imagem');
                      }
                    ?>
                  </td>
                  <td><a class="btn btn-success" href="?controller=clients&action=updateClient&id=<?= $client['idClient'] ?>">Editar</a></td>
                  <td><a class="btn btn-danger" href="?controller=clients&action=deleteClient&id=<?= $client['idClient'] ?>">Deletar</a></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>