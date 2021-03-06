@include('/layout/template')



<div class="container">
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
    <div class="row justify-content-md-center">
        <div class="web col-md-auto">
            <i class="fas fa-globe-americas" style="font-size: 3em"></i>
        </div>

    </div>
    <br><br>
    <div class="row justify-content-md-center">
        <p>email-site</p>
        <p>rede social</p>
        <p>endereço</p>
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
