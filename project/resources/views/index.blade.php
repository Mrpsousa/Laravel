<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pesca Web!</title>
  </head>

<!-- NavBar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="container">
        <a class="navbar-brand" href="http://www.uesc.br">Uesc</a>
        <button class="navbar-toggler" data-target="#navbarSite" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarSite" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Iníco </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Serviços </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <button class="btn btn-dark" class="navbar-link dropdown-toggle bg-default" href="#" data-toggle="dropdown" id="navDrop"> Social </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Git</a>
                        <a class="dropdown-item" href="#">Linkedin</a>
                        <a class="dropdown-item" href="#">Facebook</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline">
                <input type="search"  class="form-control ml-5 mr-2" placeholder="Buscar...">
                <button class="btn btn-dark" type="submit"> OK </button>
            </form>
        </div>
    </div>

</nav>
    <!-- Carousel -->

<div id="carouselSite" class="carousel slide " data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1"></li>
        <li data-target="#carouselSite" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('img/slide01.jpg') }}" class="img-fluid d-block">
            <div class="carousel-caption d-none d-md-block" >     <!-- text-dark (color) -->
                <h1> Amparo </h1>
                <h4> Faça o download de material de auxílio </h4>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('img/slide02.jpg') }}" class="img-fluid d-block">
            <div class="carousel-caption d-none d-md-block">
                <h1> Compatilhe </h1>
                <h4> Ajude upando material </h4>
            </div>
        </div>

        <div class="carousel-item">
           <img src="{{ asset('img/slide03.jpg') }}" class="img-fluid d-block">
           <div class="carousel-caption d-none d-md-block">
                <h1> Divulgue </h1>
                <h4> Divulgue o site para os colegas de curso</h4>
             </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Próximo</span>
    </a>

</div>

    <!-- Scroll Spy -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-4">
            <h1  class="display-2">Pesca Web!</h1>
            <h3>Portal de Apoio aos alunos de Ciência   da Computação da UESC</h3>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-3">
            <nav id="navbarVertical" class="navbar navbar-light bg-light">
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#">Portal do Aluno</a>
                    <a class="nav-link" href="#">Google</a>
                    <a class="nav-link" href="#">NBCGIB</a>
                    <a class="nav-link" href="#">Bibloteca</a>
                    <a class="nav-link" href="#">Colcic</a>
                    <a class="nav-link" href="#">Outros</a>
                </nav>
            </nav>
        </div>

        <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Objetivo</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Título motivacional</h6>
                        <p class="card-text">Explicação blá blá blá blá blá blá blá blá blá blá</p>
                        <button class="btn btn-dark" href="#" > Algo? </button>
                    </div>
                </div>
        </div>
    </div>

    <!-- Cards -->
    <div class="container">
        <!-- Cards -->
        <div class="row mb-5">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/item1.jpg') }}">
                    <div class="card-body">
                        <h4 class="card-title"> 1º Semestre</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Matérias do 1º regular</h6>
                        </div>
                            <uL class="list-group list-group-flush">
                                <li class="list-group-item"> Linguagem de Programação I </li>
                                <li class="list-group-item"> Metodologia da Pesquisa Científica </li>
                                <li class="list-group-item"> Física para Ciência da Computação </li>
                                <li class="list-group-item"> Introdução à Ciência da Computação</li>
                                <li class="list-group-item"> Lógica para Computação </li>
                                <li class="list-group-item"> Cálculo Aplicado I </li>
                            </uL>
                        <div class="card-body">
                        <p><a href="{{ url('/sem1') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/item2.jpg') }}">
                        <div class="card-body">
                            <h4 class="card-title"> 2º Semestre</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Matérias do 2º regular</h6>
                            </div>
                                <uL class="list-group list-group-flush">
                                    <li class="list-group-item"> Linguagem de Programação II </li>
                                    <li class="list-group-item"> Algebra e Geometria Analítica </li>
                                    <li class="list-group-item"> Eletrônica </li>
                                    <li class="list-group-item"> Lógica Digital I </li>
                                    <li class="list-group-item"> Fund. Matemáticos para Computação </li>
                                    <li class="list-group-item"> Cálculo Aplicado II </li>
                                </uL>
                            <div class="card-body">
                            <p><a href="{{ url('/sem2') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/item3.jpg') }}">
                        <div class="card-body">
                            <h4 class="card-title"> 3º Semestre</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Matérias do 3º regular</h6>
                        </div>
                            <uL class="list-group list-group-flush">
                                    <li class="list-group-item"> Linguagem de Programação III </li>
                                    <li class="list-group-item"> Estrutura de Dados </li>
                                    <li class="list-group-item"> Algebra Abstrata </li>
                                    <li class="list-group-item"> Lógica Digital II</li>
                                    <li class="list-group-item"> Fundamentos de Economia</li>
                                    <li class="list-group-item"> Cálculo Aplicado III </li>
                                </uL>
                            <div class="card-body">
                            <p><a href="{{ url('/sem3') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Card 2-->
        <div class="row mb-5">
            <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/item4.jpg') }}">
                        <div class="card-body">
                            <h4 class="card-title"> 4º Semestre</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Matérias do 4º regular</h6>
                        </div>
                                <uL class="list-group list-group-flush">
                                    <li class="list-group-item"> Computação Gráfica </li>
                                    <li class="list-group-item"> Análise dos Sistemas de Informação </li>
                                    <li class="list-group-item">Organização e Recuperação da Informação </li>
                                    <li class="list-group-item"> Projeto e Análise de Algoritmos </li>
                                    <li class="list-group-item"> Organização e Arquiterura de Computadores </li>
                                    <li class="list-group-item">Direito e Legislação </li>
                                    <li class="list-group-item"> Probabilidade e Estatística </li>
                                </uL>
                            <div class="card-body">
                            <p><a href="{{ url('/sem4') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                            </div>
                    </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                        <img class="card-img-top" src="{{ asset('img/item5.jpg') }}">
                        <div class="card-body">
                                <h4 class="card-title"> 5º Semestre</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Matérias do 5º regular</h6>
                                </div>
                                    <uL class="list-group list-group-flush">
                                        <li class="list-group-item">Banco de Dados I </li>
                                        <li class="list-group-item"> Conceitos de Linguagens de Programação</li>
                                        <li class="list-group-item"> Teoria da Computação </li>
                                        <li class="list-group-item">Sistemas Operacionais </li>
                                        <li class="list-group-item"> Inteligência Artificial</li>
                                        <li class="list-group-item"> Análise Numérica </li>
                                    </uL>
                                <div class="card-body">
                                <p><a href="{{ url('/sem5') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                </div>
                        </div>
                </div>
            <div class="col-sm-3">
                    <div class="card">
                            <img class="card-img-top" src="{{ asset('img/item6.jpg') }}">
                            <div class="card-body">
                                <h4 class="card-title"> 6º Semestre</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Matérias do 6º regular</h6>
                                </div>
                                    <uL class="list-group list-group-flush">
                                        <li class="list-group-item"> Interface Homem-Máquina </li>
                                        <li class="list-group-item"> Banco de Dados II </li>
                                        <li class="list-group-item"> Compiladores </li>
                                        <li class="list-group-item"> Administração para Computação </li>
                                        <li class="list-group-item"> Redes de Computadores I </li>
                                    </uL>
                                <div class="card-body">
                                <p><a href="{{ url('/sem6') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                </div>
                            </div>
                    </div>
            </div>

        <!-- Cards 3 -->
        <div class="container">
                <div class="row mb-5">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/item7.jpg') }}">
                                <div class="card-body">
                                        <h4 class="card-title"> 7º Semestre</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Matérias do 7º regular</h6>
                                    </div>
                                        <uL class="list-group list-group-flush">
                                            <li class="list-group-item"> Engenharia de Software </li>
                                            <li class="list-group-item"> Tecnologia e Sociedade </li>
                                            <li class="list-group-item"> Empreendedor em Informática </li>
                                            <li class="list-group-item"> Sistemas Distribuídos </li>
                                            <li class="list-group-item"> Redes de Computadores II </li>
                                        </uL>
                                    <div class="card-body">
                                    <p><a href="{{ url('/sem7') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                    </div>
                        </div>
                </div>

                        <div class="col-sm-3">
                                <div class="card">
                                        <img class="card-img-top" src="{{ asset('img/item8.jpg') }}">
                                        <div class="card-body">
                                            <h4 class="card-title"> 8º Semestre</h4>
                                            <h6 class="card-subtitle mb-2 text-muted">Matérias do 8º regular</h6>
                                            </div>
                                            <uL class="list-group list-group-flush">
                                                <li class="list-group-item"> TCC </li>
                                            </uL>
                                            <div class="card-body">
                                            <p><a href="{{ url('/sem8') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                            </div>
                                    </div>
                        </div>
                <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/dibre.jpg') }}">
                            <div class="card-body">
                                        <h4 class="card-title"> Optativas</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Matérias Optativas</h6>
                                        </div>
                                            <uL class="list-group list-group-flush">
                                                <li class="list-group-item"> Lp1  cal1 ld1 </li>
                                                <li class="list-group-item"> cal1 ingles </li>
                                                <li class="list-group-item"> metodo adb </li>
                                            </uL>
                                        <div class="card-body">
                                        <p><a href="{{ url('/opt') }}" class="btn btn-info btn-xs" role="button">Acesso</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
