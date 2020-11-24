<form class="form-signin" action="?controller=clients&action=registerView" method="post">

    <h2 class="h3 mb-3 font-weight-normal">Cadastre-se</h2>

    <div class="row mb-4">
        <div class="col-md-6">
            <label for="inputEmail" class="sr-only"></label>

            <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Endereço de email" required="" autofocus="" name="email">
        </div>

        <div class="col-md-6">
            <label for="inputEmail" class="sr-only"></label>

            <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Confirmar endereço de email" required="" autofocus="" name="email">
        </div>
    </div>

    <div class="row ">
        <div class="col-md-6">
            <label for="inputPassword" class="sr-only"></label>

            <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Senha" required="">
        </div>
        <div class="col-md-6">
            <label for="inputPassword" class="sr-only"></label>

            <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Confirmar senha" required="">
        </div>
    </div>

    <div class="form-group mb-2">
        <label for="Digite-seu-nome">Nome completo</label>
        <textarea class="form-control" placeholder="Ariel Oliveira de Mello" id="name" name="name" rows="1"></textarea>
    </div>

    <div class="form-group mb-2">
        <label for="Digite-seu-endereco">Endereço</label>
        <textarea class="form-control" placeholder="Av. castelo branco 277" id="endereco" name="endereco" rows="1"></textarea>
    </div>

    <div class="form-group mb-2">
        <label for="Digite-seu-telefone">Telefone</label>
        <input type="number" class="form-control" placeholder="(48)991396702" id="telefone" name="telefone" rows="1"></input>
    </div>

    <div class="checkbox mb-3">
        <label class="mr-2">
            <input type="radio" id="Homem" name="sexo" value="Homem"> Masculino
        </label>
        <label class="mr-2">
            <input type="radio" id="Mulher" name="sexo" value="Mulher"> Feminino
        </label>
    </div>

    <div class="">
        <label for="linguagens"> Escolha seu curso</label><br>
        <select class="form-control" name="linguagens" id="linguagens" size="1">
            <option value="Javascript">Javascript</option>
            <option value="Java">Java</option>
            <option value="Php">Php</option>
            <option value="Node">Node.js</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
        </select>
    </div>

    <button class="btn btn-lg btn-success d-flex justify-content-center mt-3" type="submit">Cadastre-se</button>


</form>