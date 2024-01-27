<?php
session_start();

// Check if user is not logged in, then redirect to a specific page
//if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
//header("Location: localhost/loja/login.php");
   // exit();
//}

// Inserindo o código HTML
//include_once('server.php');

// Rest of your PHP code
//if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    //unset($_SESSION['email']);
    //unset($_SESSION['senha']);
    //header('Location: server.php');
    //exit();
//}

//$logado = $_SESSION['email'];

//if (!empty($_GET['search'])) {
    //$data = $_GET['search'];
   // $sql = "SELECT * FROM cadastro WHERE id LIKE '%$data%' OR nome LIKE '%$data%' OR email LIKE '%$data%' ORDER BY id DESC";
//} else {
//$sql = "SELECT * FROM cadastro ORDER BY id DESC";
//}

//$result = $conexao->query($sql);
//?>

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
    <div class="container mt-5">
        <h3>Insira as Informações do comprador</h3>
        <div class="card-row">
            <div class="form-group">
                <div class="card-body">
                    <section>
                        <label for="cardName">Comprador</label>
                        <input type="text" class="form-control" id="cardName" name="name" required>
                    </section>
                    <section>
                        <label for="cardNumber">CPF</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                    </section>
                    <section>
                        <label for="cardNumber">Insira os números do cartão</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                    </section>
                    <section>
                        <label for="cardEndereço">Endereço de entrega</label>
                        <input type="text" class="form-control" id="cardEndereço" name="cardEndereço" required>
                    </section>
                    <section>
                        <label for="cardNumber">CEP</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                    </section>
                    <section>
                        <label for="cardEndereço">Referência</label>
                        <input type="text" class="form-control" id="cardEndereço" name="cardEndereço" required>
                    </section>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h3 class="card-row text-dark">Informações sobre pagamento</h3>
        <div class="card-row">
            <div class="form-group">
                <div class="card-body">
                    <div class="col positive-relative">
                        <section class="card-title text-dark">
                            <label for="cardName" class="col-3">Numero do cartão</label>
                            <input type="text" class="form-control col-3" id="cardName" name="name" required>


                            <label for="cardNumber" class="col-3">CV</label>
                            <input type="text" class="form-control col-3" id="cardNumber" name="cardNumber" required>


                            <label for="cardNumber" class="col-3">Data</label>
                            <input type="text" class="form-control col-3" id="cardNumber" name="cardNumber" required>
                        </section>
                    </div>
                    <section class="card-row text-dark">
                        <label for="cardEndereço">Endereço de entrega</label>
                        <input type="text" class="form-control" id="cardEndereço" name="cardEndereço" required>
                    </section>
                    <section class="card-row text-dark">
                        <label for="cardNumber">CEP</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                    </section>
                    <section class="card-row text-dark">
                        <label for="cardEndereço">Referência</label>
                        <input type="text" class="form-control" id="cardEndereço" name="cardEndereço" required>
                    </section>
                    <br>
                    <section class="card-row text-dark">
                        <a href=""><button type="button" class="btn btn-dark btn-lg">Confirmar a compra</butto< /a>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

</html>