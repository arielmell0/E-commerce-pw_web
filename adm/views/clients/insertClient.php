<form action="?controller=clients&action=insertClientAction" method=POST enctype='multipart/form-data'>

    <div>
        <h1>Inserir Cliente</h1>
    </div>
    <div>
        <p>
            <input class="form-control" type="text" name="name" placeholder="Nome">
        </p>
    </div>
    <div>
        <p>
            <input class="form-control" type="email" name="email" placeholder="Email">
        </p>
    </div>
    <div>
        <p>
            <input class="form-control" type="number" name="phone" placeholder="Telefone">
        </p>
    </div>
    <div>
        <p>
            <input class="form-control" type="text" name="address" placeholder="Endereço">
        </p>
    </div>
    <div align="center">
        <p>
            <button class="btn btn-success center" type="submit" class="button is-success">
                Cadastrar
            </button>
        </p>
    </div>
</form>