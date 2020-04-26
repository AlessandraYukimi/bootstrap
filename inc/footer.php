<footer class="container-fluid bg-dark text-white mt-4 p-3">
    <div class="row">
        <section.col-12.col-md-6>
            <ul style="list-style:none; padding:0; margin-left:120px">
                <li><a class="text-white" style="text-decoration:none" href="mailto:fulano@fulano.com">fulano@fulano.com</a></li>
                <li><a class="text-white" style="text-decoration:none" href="tel:+5511987654321">11 98765 4321</a></li>
            </ul>
        </section>
        <section.col-12.col-md-6>
            <ul style="list-style:none; padding:0; margin-left:120px">
                <li>Rua dos Bobos nº 0 - Cep 12345-678</li>
                <li>Fulano &copy; | CNPJ 00.000.000/0001-00</li>
            </ul>
        </section>
    </div>

</footer>

<!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLoginLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu email">
                        <small id="emailHelp" class="form-text text-muted">Não se preocupe, seu email está seguro!</small>
                    </div>
                    <div class="form-group">
                        <label for="senha">Password</label>
                        <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" aria-describedby="passwordHelp">
                        <small id="passworlHelp" class="form-text text-muted">Utilize números e caracteres maiúsculo e minúsculo </small>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="aceite">
                        <label class="form-check-label" for="aceite">Estou de acordo!</label>
                    </div>
                </form>
                <small class="text-muted d-block w-100">Quero <a href="cadastro.php" class="text-info">me cadastrar</a>!</small>
                
            </div>

            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-info">Logar</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>