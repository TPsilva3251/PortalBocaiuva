@include('/layout/template')
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li> --}}
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<form action="{{ route('create_parceiro') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="container">
        <div class="row g-3">
            <div class="col-8">
              <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>
            <div class="col-4">
                <select class="form-control input-required" id="categoria" name="categories_id">
                    <option value=""></option>
                    <option value="" disabled selected>Selecione uma categoria</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="row g-3">
            <div class="col-12">
                <label for="descricao">Descrição da atividade</label>
                <textarea class="form-control" name="descricao" placeholder="Descrição da atividade">
                </textarea>
            </div>
        </div>
        <br>
        <div class="row g-3">

            <div class="col-4">
                <input type="text" class="form-control" name="endereco" placeholder="Endereço">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="email" placeholder="email">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="face" placeholder="Facebook">
            </div>
        </div>
        <br>
        <div class="row g-3">
            <div class="col-6">
                <input type="text" class="form-control" name="insta" placeholder="Instagran">
            </div>
            <div class="col-6">
                <input type="text" class="form-control" name="whats" placeholder="Whatsapp">
            </div>
        </div>
        <br><br>
        <div class="row g-3">
            <div class="col-4">
                <div class="img-group">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24763.114160698788!2d-43.83353741155226!3d-17.117819082656517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xab6230efb84b03%3A0xf8120c7ff129066c!2sBocai%C3%BAva%2C%20MG%2C%2039390-000!5e1!3m2!1spt-BR!2sbr!4v1572448714991!5m2!1spt-BR!2sbr" width="350px" height="350px"  frameborder="0" margin-left="3%;"  allowfullscreen="" id="local"></iframe><br>
                    {{-- <input type="text" class="form-control" name="loca" id="locu" placeholder="Digite a url do local"> --}}
                    <input type="text" class="form-control" name="localizacao" id="locurl" placeholder="Digite a url do local">
                    <br><br>
                    <button type="button" class="btn btn-outline-secondary" id="loc">Visualizar</button>
                </div>
            </div>
            {{-- <div class="col offset-4">
                <div class="img-group">
                    <img src="https://i.pinimg.com/originals/de/f6/96/def69643889ee29e232637646e839064.jpg" width="350" height="350px" name="img" id="img">
                    <br><br>
                    <input type="text" class="form-control" name="img" id="timg" placeholder="Digite a url da imagem">
                    <br>
                    <button type="button" class="btn btn-outline-secondary" id="bimg">Visualizar</button>
                </div>
            </div> --}}

                <div class="col-md-6">
                    <label>Logomarca</label>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" id="image-holder">
                            <img src="http://demos.creative-tim.com/material-dashboard-pro/assets/img/image_placeholder.jpg"  width="350px" height="350px" >
                        </div>
                        <div>
                            <span class="btn btn-file">
                                <span class="btn btn-default"><i class="fa fa-fw fa-upload"></i>Escolher</span>
                            <input type="hidden">
                            <input type="file" id="fileUpload" name="img">
                            <div class="ripple-container"></div>
                            </span>
                            <a onclick="limpa()" class="btn btn-default">
                                <i class="fa fa-times"></i> Remover</a>
                        </div>
                    </div>
                </div>

        </div>
        <button type="submit" class="btn btn-success" id="submit">Salvar</button>
    </div>
</form>
<br>
@include('/layout/footer')

<script>
    $('#bimg').click(function(){
       let url = $('#timg').val();
       document.getElementById('img').src = url;
    });
    // //////////////////////////////////////////////////////////////////////////
    $('#loc').click(function(){
        let end = $('#locurl').val();
        let url = end.substring(13, end.length - 88);
        document.getElementById('local').src = url;
        document.getElementById('locurl').value = url;
    });
    // /////////////////////////////////////////////////////////////////////////
    $("#fileUpload").on('change', function() {
        if (typeof(FileReader) != "undefined") {
            var image_holder = $("#image-holder");
            image_holder.empty();
            var reader = new FileReader();
            reader.onload = function(e) {
                $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                }).appendTo(image_holder);
            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            Swal.fire(
                'ERRO',
                'Este navegador nao suporta FileReader!',
                'error'
            )
        }
    });
</script>
