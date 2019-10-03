<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url('assets/css-padrao/css-padrao.css');?>" rel="stylesheet">
    <title>Faça seu Login</title>
    <style>
        body{
            background-image:url('<?php echo base_url('assets/imagens/homeADM.png');?>');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

    <h1>Tela de Produto</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Leone SHOPS</a>
            <button type="button" class="btn btn-danger">Danger</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="ex: batom,pó, base, perfume, gel hot"
                        style="width: 700px;">
                    <button class="btn btn-Danger my-2 my-sm-0" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav mr-2 mt-2 mt-lg-0">
                    <li class="nav-item" style="margin-left:100px;">logar</li>
                    <li class="nav-item" style="margin-left: 30px;">carinho</li>
                </ul>
            </div>
        </nav>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/ProjetoPw2/node_modules/img/empire.png" class="d-block w-100" alt="..."
                            style="height: 500px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Perfumes Essenciais</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/ProjetoPw2/node_modules/img/latitude.jpg" class="d-block w-100" alt="..."
                            style="height: 500px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>ACESSORIOS PARA ARRASAR COM CRUSH</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/ProjetoPw2/node_modules/img/grace.jpg" class="d-block w-100" alt="..."
                            style="height: 500px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>15% de desconto só aqui </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="boticario.php">BOTICÁRIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hinode.php">HINODE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="avon.php">AVON</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pacco.php">PACCO RABANE</a>
            </li>

        </ul><br>




        <div class="jumbotron mt-0">
        <div class="row">
        <div class="col-sm-1">


        </div>

        <div class="col-sm-6 mb-5">


<form method="POST" id="anuncio" enctype="multipart/form-data" action="Validar_Anuncio.php" >

<label><h5>FOTO:</h5></label><br>

<input type="file" class="" size="60" name="imagem" id="imagem" onchange="previewImagem()" style="">

<div class="form-group row">

    <div class="">
      <input type="text" class="form-control mr-5 mt-2" name="modelo" id="inputEmail3" placeholder="Digite o Produto:" >


    <div class="">
      <input type="number" class="form-control mt-2 mr-5" name="numero" id="inputEmail3" placeholder="Digite o Setor:" >

    <div class="">
      <input type="number" class="form-control mt-2 mr-5" name="preco" id="inputEmail3" placeholder="Digite o Preço:">






	  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="ml-1 mt-2"><h5>DESCRIÇÃO:</h5></label>
    <textarea class="form-control mr-5" name="descricao" id="exampleFormControlTextarea1" rows="7"></textarea>
  </div>



    </div>



</div>

  <button type="submit" class="btn btn-danger ml-5" style="width:130px;" name="anuncio">ENVIAR</button>

  </div>

   </form>


</div>

</div>



<div class="container col-sm-5">


<img src="produtos/Padrao.png"class="mr-5 mt-2 mb-5" style="height:400px; width:300px;" name="produtos">

<?php
$foto = "produtos/Padrao.png";
?>









    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js');?>"></script>

    <script src="<?php echo base_url('assets/javascript/validacoes.js');?>"></script>

</body>
</html>
