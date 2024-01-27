<?php
  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Parfum</title>
<a href="http://"></a>
<link rel="shortcut icon" href="loja/logo02.png" type="image/x-icon">
<!-- Adicionando o link para o CSS do Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<!--CABEÇALHO-->
<header>
    <nav class="nav nav-toggler bg-dark border-body">
        <!-- Navbar content -->
        <!--BARRA DE PESQUISA-->
        <div class="container">
            <div class="card-flex-row">
                <section class="col-fluid">
                    <div class="d-sm-0 mb-3 text-center">
                        <a href="produtos.php">
                            <input type="search" class="d-inline p-2" placeholder="O que você procura?">
                            <img src="../loja/lupa01.png" alt="Lupa" class="img-col-6 p-2;"
                                style="width: 45px; height: 45px">
                        </a>
                        <!--FIM DA BARRA DE PESQUISA-->
                        <!--LOGO DA EMPRESA-->
                        <a href="index.php">
                            <img src="../loja/logo02.png" alt="Logo da Empresa" href="home.php"
                                class="img-col-6 p-2" style="width: 300px; height: 65px">
                        </a>
                        <!--FIM DO LOGO DA EMPRESA-->
                        <!--ICONES DO CABECALHO-->
                        <a href="produtos.php">
                        <img src="../loja/coracao01.png" alt="lista de desejos" class="img-col-6 p-2;"
                            style="width: 35px; height: 35px">
                        <a href="carrinhodecompra.php">
                            <img src="../loja/carrinho de compra.png" alt="carrinho de compras"
                                class="img-col-6 p-2;" style="width: 45px; heigh: 45px">
                        </a>
                        <!--FIM ICONES DO CABECALHO-->
                        <!--FIM DO CABECALHO-->
                </section>
            </div>
        </div>
    </nav>
</header>
<style>
    /* Estilos adicionais para a imagem */
    .custom-img {
        width: 5px;
        height: 5px;
    }
</style>
<!--seção de informações do perfume-->

<body>


    <div>
        <div class="container">
            <div class="card-row">
                <div class=card-body>
                    <h3>Formulário de dados cadastrais</h3>
                    <div class="card-body col-2>
                                <section>
                                <label for=" exampleFormControlInput1" class="form-label">Nome Completo</label>
                        <input type="name" class="form-control" id="name" placeholder="Insira seu nome completo">
                        </section>
                        <section>
                            <label for="datanumber" class="form-label">Data de nascimento</label>
                            <br>
                            <input type="data" class="form-control" id="data"
                                placeholder="Insira sua data de nascimento 00/00/0000">
                        </section>
                        <section>
                            <label for="number" class="form-label">Telefone </label>
                            <input type="number" class="form-control" id="number"
                                placeholder=" Insira o número do seu telefone WhatsApp (00)0000 0000">
                        </section>
                        <br>
                        <section>
                            <label for="form-select" class="form-label max-auto">Genêro
                                <select class="form-select " aria-label="Escolha qual o seu genero">
                                    <option selected>Selecione seu Genero</option>
                                    <option value="1">Feminino</option>
                                    <option value="2">Masculino</option>
                                    <option value="3">Outro</option>
                                </select> </label>
                        </section>
                        <br><br>
                        <section>
                            <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Insira o seu endereço (rua e bairro)">
                        </section>
                        <section>
                            <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Insira a cidade">
                        </section>
                        <section>
                            <label for="exampleFormControlInput1" class="form-label">Estado</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Insira o seu estado">
                        </section>
                        <br>
                        <br>
                        <section>
                            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Insira o seu estado">
                        </section>
                        <section>
                            <label for="exampleFormControlInput1" class="form-label">Senha</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Insira a senha 8 caracters simbolo especial, Letra maiuscula, letra minuscula, número">
                        </section>
                        <label for="exampleFormControlInput1" class="form-label">Confirme sua senha</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Confirme a senha repetindo a senha anterior">
                        </section>
                        <section><br>
                            <a href="produtos.php">
                                <button type="button" class="btn btn-secondary btn-lg" href="produtos.php">Cadastrar </button>
                            </a>
                        </section>

                    </div>
                </div>
                <section>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>

</html>