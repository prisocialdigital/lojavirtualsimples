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
                        <a href=".php">
                            <input type="search" class="d-inline p-2" placeholder="O que você procura?">
                            <img src="../loja/lupa01.png" alt="Lupa" class="img-col-6 p-2;"
                                style="width: 45px; height: 45px">
                        </a>
                        <!--FIM DA BARRA DE PESQUISA-->
                        <!--LOGO DA EMPRESA-->
                        <a href="index.php">
                            <img src="../loja/logo02.png" alt="Logo da Empresa" href="home.php" class="img-col-6 p-2"
                                style="width: 300px; height: 65px">
                        </a>
                        <!--FIM DO LOGO DA EMPRESA-->
                        <!--ICONES DO CABECALHO-->
                        <a href="produtos.php">
                            <img src="../loja/coracao01.png" alt="lista de desejos" class="img-col-6 p-2;"
                                style="width: 35px; height: 35px"></a>
                        <a href="carrinhodecompra.php">
                            <img src="../loja/carrinho de compra.png" alt="carrinho de compras" class="img-col-6 p-2;"
                                style="width: 45px; heigh: 45px">
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
    <div class="container text-center">
        <div class="row">
            <!-- Imagem ao lado esquerdo -->
            <div class="card-flex-fluid">
            </div>
            <!-- Painel de Login -->
            <div class="col-md-6 offset-md-3 text-center">
                <h2>
                    <br>
                    <br>
                    Login
                </h2>
                <form>
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label >Senha</label>
                        <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Digite sua senha">
                    </div>
                    <div>
                    <a href="produtos.php" ><button type="button" class="btn btn-dark btn-lg text-white" id="loginPassword">
                     Entrar</a>
                    </div><br><br>
                    <div>
                    <a href="cadastro.php" ><button type="button" class="btn btn-dark btn-lg text-white" id="loginPassword">
                     Cadastrar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>


</html>