<section class="hero is-info is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-mobile">
                <div class="column">
                    <form class="box" action="?controller=clients&action=updateClientAction&id=<?=$arrayClient['idClient']?>" method=POST enctype='multipart/form-data'>

                        <div class="field has-text-centered">
                            <h1>Alterar Cliente</h1>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="text" name="id" placeholder="Nome" value="<?=$arrayClient['idClient']?>" readonly>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="text" name="name" placeholder="Nome" value="<?=$arrayClient['name']?>">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" name="email" placeholder="Email" value="<?=$arrayClient['email']?>">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="text" name="phone" placeholder="Telefone" value="<?=$arrayClient['phone']?>">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="text" name="address" placeholder="Endereço" value="<?=$arrayClient['address']?>">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-map-marked-alt"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <button type="submit" class="button is-success">
                                    Alterar
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>