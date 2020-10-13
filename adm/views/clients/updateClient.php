<section style="color: white">

    <form action="?controller=clients&action=updateClientAction&id=<?= $arrayClient['idClient'] ?>" method=POST enctype='multipart/form-data'>

        <div>
            <h1>Alterar Cliente</h1>
        </div>
        <div>
            <p>
                <input class="form-control" type="text" name="id" placeholder="Nome" value="<?= $arrayClient['idClient'] ?>" readonly>
            </p>
        </div>
        <div>
            <p>
                <input class="form-control" type="text" name="name" placeholder="Nome" value="<?= $arrayClient['name'] ?>">
            </p>
        </div>
        <div>
            <p>
                <input class="form-control" type="email" name="email" placeholder="Email" value="<?= $arrayClient['email'] ?>">
            </p>
        </div>
        <div>
            <p>
                <input class="form-control" name="phone" placeholder="Telefone" value="<?= $arrayClient['phone'] ?>">

            </p>
        </div>
        <div>
            <p>
                <input class="form-control" type="text" name="address" placeholder="Endereço" value="<?= $arrayClient['address'] ?>">
            </p>
        </div>
        <div>
            <?php
            if (is_file("assets/img/clients/{$arrayClient['idClient']}.jpg")) {
                echo ("
                          <img style='max-width: 100px; max-height: 100px;' src='assets/img/clients/{$arrayClient['idClient']}.jpg'>
                        ");
            } else {
                print('<i class="fas fa-upload"></i>
                        Escolha uma imagem ...');
            }
            ?>
        </div>
        <div>
            <label>
                <input class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" type="file" name="photo">
            </label>
        </div>
        <div>
            <p style="margin-top: 1.6rem;">
                <button class="btn btn-success" type="submit">
                    Alterar
                </button>
            </p>
        </div>
    </form>
</section>