<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="./css/contato.css">

    <title>Olá, mundo!</title>
</head>

<body>
   
    <!-- inicio header -->
    <header id="home">

        <nav class="nav navbar-expand-md navbar-light  ">
            <h2><a href="index.html">Def Davi Chagas ;</a></h2>

            <!-- icon menu -->
            <button class="navbar-toggler m-auto" type="button" data-toggle="collapse" data-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav m-auto ">
            <!-- cabeçalho -->
                    <li class="nav-item pr-3 "><a href="index.html">Home</a></li>
                    <li class="nav-item pr-3"><a href="sobre.html">Sobre</a></li>
                    <li class="nav-item pr-3"><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <!-- fim cabeçlho -->
        </nav>
    </header>
    <!-- fim header -->

    <section id="contato">
        <div class="container">
            <h1>Contato</h1>
            <div class="row">
                <div class="col-md-12 m-auto">
                    <form  action="">
                    <div class="form-group">
                        <label for="nome" >Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome">
                    </div>

                    <div class="form-group">
                        <label  for="assunto">Assunto</label>
                       <textarea class="form-control" name="assunto" id="assunto"></textarea>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- fim form -->

    <section id="redes">
        <div class="container">
            <h3>fale-comigo    </h3>
            <div class="row">
                <div class="col-md-3">
                    <a href=""><img src="img/email.svg" width="100" alt="" class="img-fluid"></a>
                </div>
                <div class="col-md-3">
                   <a href=""><img src="img/github.svg" width="100" alt="" class=""></a>
                </div>
                <div class="col-md-3">
                    <a href=""><img src="img/linkedin.svg" width="100" alt=""></a> 
                </div>
                <div class="col-md-3">
                    <a href=""><img src="img/wpp.svg" width="100" alt="" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </section>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>