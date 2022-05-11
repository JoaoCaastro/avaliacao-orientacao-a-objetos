<main>
    <br/>
        <section>
            <a href="index.php">
                <button class="btn btn-success">Voltar</button>
            </a>
        </section>

        <h2 class="mt-3">Cadastrar usuário</h2>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nome completo</label>
                <input type="text" class="form-control" name="nome">
            </div>

            <div class="mb-3">
                <label class="form-label">Número de registro</label>
                <input type="text" class="form-control" name="registro">
            </div>

            <div class="mb-3">
                <label class="form-label">Função</label>
                <input type="text" class="form-control" name="funcao">
            </div>

            <div class="mb-3">
                <label class="form-label">Salário</label>
                <input type="number" class="form-control" name="salario">
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>

</main>