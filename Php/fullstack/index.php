<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Projeto</title>

</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<div class="container">
    <div class="py-5 text-center">

        <h2>Formulário de teste para o back-end</h2>
        <p class="lead">Abaixo temos um exemplo de formulário construído com controles de formulário Bootstrap. Cada campo obrigatório possui um estado de validação que é ativado quando tenta-se enviar o formulário sem completá-lo.</p>
    </div>


        <div class="col-md-12 >

            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="primeiroNome">Nome</label>
                        <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            É obrigatório inserir um nome válido.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            É obrigatório inserir um sobre nome válido.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="nickname">Nickname</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="nickname" placeholder="Nickname" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Seu nickname é obrigatório.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com">
                    <div class="invalid-feedback">
                        Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Av. Faria Lima, nº 0" required>
                    <div class="invalid-feedback">
                        Por favor, insira seu endereço de entrega.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="endereco2">Endereço 2 <span class="text-muted">(Opcional)</span></label>
                    <input type="text" class="form-control" id="endereco2" placeholder="Apartamento ou casa">
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="pais">País</label>
                        <select class="custom-select d-block w-100" id="pais" required>
                            <option value="">Escolha...</option>
                            <option>Brasil</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, escolha um país válido.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="estado">Estado</label>
                        <select class="custom-select d-block w-100" id="estado" required>
                            <option value="">Escolha...</option>
                            <option>Acre</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, insira um estado válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" placeholder="" required>
                        <div class="invalid-feedback">
                            É obrigatório inserir um CEP.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="mesmo-endereco">
                    <label class="custom-control-label" for="mesmo-endereco">Endereço de entrega é o mesmo que o de cobrança.</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="salvar-info">
                    <label class="custom-control-label" for="salvar-info">Lembrar desta informação, na próxima vez.</label>
                </div>
                <hr class="mb-4">



                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue o checkout</button>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Nome da companhia</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacidade</a></li>
            <li class="list-inline-item"><a href="#">Termos</a></li>
            <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
    </footer>
</div>

<!-- Principal JavaScript do Bootstrap
================================================== -->
<!-- Foi colocado no final para a página carregar mais rápido -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
            var forms = document.getElementsByClassName('needs-validation');

            // Faz um loop neles e previne envio
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>


</body>
</html>
