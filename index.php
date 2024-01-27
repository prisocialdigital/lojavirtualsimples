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

</style>
<!--seção de informações do perfume-->


<body>
    <div>
        <div>
            <!--cards de perfumes-->
            <!--card de animação-->
            </section>
            <section>
                <div class="container-flex" width:"100%">
                    <img src="../loja/banner01.gif" alt="animação" style; width="100%">
                </div>
                <div>
                    <div class="container">
                        <p></p>
                        <img src="../loja/banner gif (2).gif" alt="animação" style; width="100%">
                    </div>
                </div><br> <br>
                <img src="../loja/lançamento.png" class="card-img-top text-center" alt="">
            </section>
            <p>
                </p<br> <br>
                <!--seção 1-->
            <section>
                <div class="container-flex-bg-dark border-body">
                    <div class="card-title-flex-bg-dark border-body">
                        <div class="card-row-body bg-dark border-body">
                            <div class="card-title">
                                <div class="row no-gutters-flex">
                                    <div class="col-md-4">
                                        <!-- Image of the perfume -->
                                        <img src="../loja/banner fitness.png"
                                            class="img-fluid rounded-start text-align-center" alt="...">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../loja/banner sensual.png"
                                            class="img-fluid rounded-start text-align-center" alt="...">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../loja/banner feminino.png"
                                            class="img-fluid rounded-start text-align-center" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>
    </div>
    </section><br> <br>
    <img src="../loja/feminino.png" class="card-img-top text-center" alt="">
    <p></p><br> <br>
    <section>
        <div>
            <div class="container">
                <div class="row">
                    <!--cards de perfume CHanel-->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="../loja/perfume chanel.png" class="card-img-top text-center" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-center">Para mulheres poderosas</h5>
                                <div class="text-center">
                                    <a href="perfumechanel.php" button type="button" class="btn btn-dark btn-lg">Ver
                                        mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--cards de perfume Femina-->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="../loja/perfume femina.png" class="card-img-top text-center" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-center">Exale a sua feminilidade</h5>
                                <div class="text-center">
                                    <a href="perfumefemina.php" button type="button" class="btn btn-dark btn-lg">Ver
                                        mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--cards de perfume Flawoer-->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="../loja/perfume flawoer.png" class="card-img-top text-center" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-center">O seu perfume de todos os dias</h5>
                                <div class="text-center">
                                    <a href="produtos.php" button type="button" class="btn btn-dark btn-lg">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div><br>
        </div><br>
    </section>
    <div>
        <div class="container-flex bg-dark text-white">
            <div class="card-row-fluid">
                <div class="card-body-center">
                    <h5 class="card-title text-center"><br>Receba nossa notificações</h5>
                    <div class="text-center">
                        <form action="process_signup.php" method="post">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <input type="submit" value="Subscribe">
                            <div class="card-icon-item">
                                <i class="fas fa-envelope"><img src="n.png" alt="" style="width: 35px; height: 35px"></i>
                                <i class="fas fa-heart"><img src="n (5).png" alt="" style="width: 35px; height: 35px"></i>
                                <i class="fas fa-star"><img src="n (6).png" alt="" style="width: 35px; height: 35px"></i><br>
                            </div><br>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div><br><br>
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
                                    <p class="d-flex text-white"> &copy;PARFUM - Todos os Direitos Reservados
                                        2024
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