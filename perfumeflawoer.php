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
<!--seção de informações do perfume-->

<body>
    <div class="container">
        <section>
            <div class="row">
                <div class="card-row align-items-center"> <br>
                    <div class="card-text"> <br>
                        <div class="row no-gutters">
                            <div class="col-md-6 "> <br>
                                <!--imagem do perfume-->
                                <img src="../loja/perfume flawoer.png" class="img-fluid rounded-start text-align-center"
                                    alt="..."><br>
                            </div>
                            <!--descrisção de informações do perfume-->
                            <div class="col-md-6"><br>
                                <div class="col-md-12 offset-md-3 text-left h-center">
                                    <br>
                                    <h3 class="card-title"><br>
                                        Perfume Flawoer</h3>
                                    <p class="card-text"><br>
                                        Perfume com notas florais<br>
                                        Aroma suave<br>
                                        Testado dermatologicamente <br>
                                        Frasco de 80ML
                                    </p>
                                    <!--calcula de preço-->
                                    <div class="container mt-5">
                                        <p class="mb-4">Valor</p>
                                        <label for="totalAmount" class="form-control border-success-darck"
                                            id="valor">R$199.99</label>
                                        <select class="form-control" name="parcelas" id="installments"
                                            name="installments" required>
                                            <option value="6">6X R$33,31</option>
                                            <option value="5">5X R$39,98</option>
                                            <option value="4">4X R$49,99</option>
                                            <option value="3">3X R$66,67</option>
                                            <option value="2">2X R$99,99</option>
                                            <option value="1">1X R$199,99</option>
                                        </select><br>
                                        <input type="text" class="form-control" id="totalAmount" name="totalAmount"
                                            placeholder="Insira o cupom de desconto" required><br>
                                        <input type="text" class="form-control" id="totalAmount" name="totalAmount"
                                            placeholder="Insira o CEP" required>
                                    </div>
                                    <br>
                                    <a href="carrinhodecompra.php">
                                        <button class="btn btn-dark" type="submit">Comprar</button><br>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br>
    <br>
    <!--seção de links de referência de página-->
    <div class="container">
        <div class="row-center">
            <div class="card-body col-md-12 mb-3 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        </li>
                        <li class="page-item"><br><br>
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <li class="page-item"><br><br>
                            <img src="../loja/perfume miss dior.png" class="rounded float-start" alt="..."
                                style="width: 45px; height: 45px">
                            <a class="page-link" href="perfumemissdior.php">
                                1</a>
                        </li>
                        <li class="page-item"><br><br>
                            <img src="../loja/perfume percevior.png" class="rounded float-start" alt="..."
                                style="width: 45px; height: 45px">
                            <a class="page-link" href="perfumepercevior.php">
                                2</a>
                        </li>
                        <li class="page-item"><br><br>
                            <img src="../loja/perfume rose.png" class="rounded float-start" alt="..."
                                style="width: 45px; height: 45px">
                            <a class="page-link" href="perfumerose.php">
                                3</a>
                        </li>
                        <li class="page-item"><br><br>
                            <img src="../loja/perfume caf one.png" class="rounded float-start" alt="..."
                                style="width: 45px; height: 45px">
                            <a class="page-link" href="perfumecafone.php">
                                4</a>
                        </li>
                        <li class="page-item"><br><br>
                            <img src="../loja/perfume cascata.png" class="rounded float-start" alt="..."
                                style="width: 45px; height: 45px">
                            <a class="page-link" href="perfumecascata.php">
                                5</a>
                        </li>
                        <li class="page-item"><br><br>
                            <img src="../loja/perfume tempest.png" class="rounded float-start" alt="..."
                                style="width: 45px; height: 45px">
                            <a class="page-link" href="perfumetempest.php">
                                6</a>
                        </li>
                        <li class="page-item"><br><br>
                            <img src="../loja/perfume chanel.png" class="rounded float-start" alt="..."
                                style="width: 45px; height: 45px">
                            <a class="page-link" href="perfumechanel.php">
                                7</a>
                        </li>
                        <li class="page-item"><br><br>
                            <img src="../loja/perfume femina.png" class="rounded float-start" alt="..."
                                style="width: 45px; height: 45px">
                            <a class="page-link" href="perfumefemina.php">
                                8</a>
                        </li>
                        <li class="page-item"><br><br>
                            <img src="../loja/perfume flawoer.png" class="rounded float-start" alt="..."
                                style="width: 45px; height: 45px">
                            <a class="page-link" href="perfumeflawoer.php">
                                9</a>
                        </li>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!--rodape-->
    <div calss="container-flex">
        <div class="card-flex-row">
            <div class="card-row bg-dark border-body">
                <div class="rodape">
                    <section class="col-flex">
                        <div class="card-body">
                            <a href="index.php" class="rodape-links text-white">Sobre Nós</a><br><br>
                            <!--LOGO DA EMPRESA-->
                            <div>
                                <a href="index.php">
                                    <p class="d-flex text-white"> &copy;PARFUM - Todos os Direitos Reservados 2024 <br>
                                        <img src="../loja/logo02.png" alt="Logo da Empresa" href="index.php"
                                            class="d-flex p-2 align-center" style="width: 250px; height: 55px">
                                    </p>
                                </a>
                                <div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
</body>

</html>