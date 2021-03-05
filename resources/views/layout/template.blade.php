<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/js/index.js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/imagens/teste.svg" type="image/x-icon"/>
    <title>Portal Bocaiúva</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="/imagens/mascote.png" height="100px" style="margin: 3%">
        <a class="navbar-brand" href="/">Bocaiúva</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.google.com/search?q=sine+bocaiuva+mg&rlz=1C1SQJL_pt-BRBR866BR866&oq=sine+bocaiu&aqs=chrome.1.0l2j69i57j0l5.5729j0j4&sourceid=chrome&ie=UTF-8&ibp=htl;jobs&sa=X&ved=2ahUKEwjcronh8oHoAhUVK7kGHSJcC64QiYsCKAF6BAgKEAU#htivrt=jobs&htidocid=QS5mCttO5ZdL-8RTAAAAAA%3D%3D&fpstate=tldetail">Oportunidades de emprego</a>
                </li>
                {{-- <li class="nav-item ">
                    <a class="nav-link" href="#">Repartições Públicas</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Comércio Local
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/fashions">Modas</a>
                        <a class="dropdown-item" href="#">Comidas</a>
                        <a class="dropdown-item" href="#">Automóveis</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Repartições Públicas</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/quem_somos">Sobre o Portal</a>
                </li>
                {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
          <form class="form-inline my-2 my-lg-0">
            {{-- <input class="form-control mr-sm-2" type="search" placeholder="O que você procura?" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button> --}}
            <div class="input-group-prepend">
                <div class="input-group mb-3">
                    <input type="text" id="search" name="search" class="form-control" placeholder="O que você procura?" aria-label="Username" aria-describedby="basic-addon1">
                    {{-- <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                    </div> --}}
                    <button type="submit" class="btn btn-outline-secondary">Pesquisar</button>
                </div>
            </div>
          </form>
        </div>
      </nav>
</body>
</html>

