@include('/layout/template')



<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="row justify-content-md-center">
            <div class="imagen">
                <div class="nome col-md-auto">
                    <h3>{{$parceiro->nome}}</h3>
                </div>
                <br><br><br>
                <img src="{{$parceiro->img}}" >
                <br><br><br>
            </div>
        </div>
    </div>
    {{-- <a href=""><div class="zap"><i class="iczap fab fa-whatsapp"></i>{{ $parceiro->whats }}</div></a> --}}
    <div class="zap">
        {{-- <a href=""><button type="button" class="btn btn-outline-info" ><i class="iczap fab fa-whatsapp" aria-valuetext="{{ $parceiro->whats }}"></i></button></a> --}}
        <a href="/categoriesdel/{{ $parceiro->whats }}"><i class="iczap fab fa-whatsapp"></i></a>
    </div>
    <br><br><br><br>
    <div class="web">
        <div class="row justify-content-md-center">
            <div class="col-3">
                <i class="iweb fas fa-globe-americas"></i>
            </div>
            <div class="col-3">
                <i class="isocial fas fa-users"></i>
            </div>
            <div class="col-3">
                <i class="ilocal fas fa-map-marked-alt"></i>
            </div>
        </div>
        <br>
        <div class="row justify-content-md-center">
            <div class="lmail col-3">
                <p>email / site</p>
            </div>
            <div class="lrede col-3">
                <p>rede social</p>
            </div>
            <div class="lendereco col-3">
                <p>endereço</p>
                <h6>{{$parceiro->endereco}}</h6>
            </div>
        </div>
    </div>
    <br><br>
   <div class="container">
        <iframe src={{$parceiro->localizacao}} frameborder="0"   allowfullscreen="" ></iframe>
   </div>

    {{-- <div class="row justify-content-md-center">
        <div class="row justify-content-md-center">
            <div class="row g-3">
                <div class="col-6" style="align-items: center">
                    <input type="text" class="form-control" name="endereco"  value="{{$parceiro->endereco}}" >
                    <h5>{{$parceiro->endereco}}</h5>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="email"  value="{{$parceiro->email}}" >
                    <h5>{{$parceiro->email}}</h5>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="face"  value="{{$parceiro->face}}" >
                    <h5>{{$parceiro->face}}</h5>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="face"  value="{{$parceiro->categories->nome}}" >
                    <h5>{{$parceiro->categories->nome}}</h5>
                </div>
            </div>
        </div>
    </div> --}}
</div>
