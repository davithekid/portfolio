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

    <title>Davi Chagas dev/contato</title>
</head>

<body>

    <!-- inicio header -->
    <header id="home">

        <nav class="nav navbar-expand-md navbar-light  ">
            <!-- <h2><a href="index.html">Def Davi Chagas ;</a></h2> -->

            <!-- icon menu -->
            <button class="navbar-toggler m-auto" type="button" data-toggle="collapse" data-target="#nav" style="background-color: yellow;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav m-auto ">
                    <!-- cabeçalho -->
                    <li class="nav-item pr-3 "><a href="index.html">Home</a></li>
                    <li class="nav-item pr-3"><a href="sobre.html">Sobre</a></li>
                    <li class="nav-item pr-3"><a href="projetos.html">Projetos</a></li>
                    <li class="nav-item pr-3"><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <!-- fim cabeçlho -->
        </nav>
    </header>
    <!-- fim header -->

    <section id="contato ">
        <div class="container">
            
            <h1 class="text-center" style="border-bottom: 3px solid yellow;">Contato</h1>
            <div class="row" >
                <div class="col-md-12 m-auto">
                    <form action="txt/back.php" method="post">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input class="form-control" type="text" name="nome" id="nome">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input class="form-control" type="text" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <textarea class="form-control" name="assunto" id="assunto"></textarea>
                        </div>

                        <div class="d-flex justify-content-center">
                            <input class="form-control btn btn-success w-25 text-dark font-weight-bold" type="submit" value="Enviar" name="enviar">
                            <input class="form-control btn btn-warning ml-5 w-25 text-dark font-weight-bold" type="reset" value="Limpar">
                        </div>



                    </form>
                </div>
            </div>
        </div>

     

    </section>
    <!-- fim form -->

    <section id="redes">
        <div class="container">
            <h3>fale-comigo </h3>
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-around">
                    <a href=""><img src="img/email.svg" width="100" alt="" class="img-fluid"></a>
                    <a href="https://github.com/davithekid" target="_blank"><img src="img/github.svg" width="100" alt="" class="img-fluid "></a>
                    <a href="https://www.linkedin.com/in/chagas-davi/" target="_blank"><img src="img/linkedin.svg" width="100" alt="" class="img-fluid"></a>
                    <a href="https://wa.me/5511946522127?text=Ol%C3%A1%2C%20Sinta-se%20a%20vontade%20para%20enviar%20sua%20mensagem!!!
                    "><img src="img/wpp.svg" width="100" alt="" class="img-fluid "></a>
                </div>
            </div>
        </div>
    </section>

    <!-- inicio footer -->
    <footer class="d-flex justify-content-center" style="background-color: #101010;">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-4">
                    <h3>Site desenvolvido com: </h3>
                    <img src="img/js.png" width="50px" alt="" class="img-fluid pr-3">
                    <img src="img/php.png" width="50px" alt="" class="img-fluid pr-3">
                    <img src="img/bootstrap.png" width="50px" alt="" class="img-fluid pr-3">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <p>
                        &copy; Davi Chagas, <b>
                            todos os direitos reservados.
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- fim footer -->



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